<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Service;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Transaction::where('user_id', auth()->user()->id)->get();
        return view('dashboard/invoice/index', compact('invoices'));
    }

    public function makeInvoice($id)
    {
        $service = Service::where('id', $id)->firstorfail();
        $user_id = auth()->user()->id;
        $invoice = Transaction::create([
            'user_id' => $user_id,
            'service_id' => $id,
            'total' => $service->price_min,
            'status' => 'waiting-for-payment',
        ]);
        $invoice->save();

        return redirect()->route('invoice')->with('status', 'Invoice has been created!');
    }

    public function proof($id)
    {
        $invoice = Transaction::where('user_id', auth()->user()->id)->where('id', $id)->firstorfail();
        return view('dashboard/invoice/proof', compact('invoice'));
    }

    public function proofUpload(Request $request, $id)
    {
        $invoice = Transaction::where('user_id', auth()->user()->id)->where('id', $id)->firstorfail();
        $validatedData = $request->validate([
            'payment_method' => 'required',
        ]);

        $filename = $invoice->image;
        if ($filename == null) {
            $validatedData = $request->validate([
                'image' => 'required'
            ]);
        }
        if ($request->hasFile('image')) {
            if ($invoice->image) {
                $image_path = 'assets/img/' . $invoice->image;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = 'invoice.' . auth()->user()->name . '.' . time() . '.' . $extension;
            $file->move('assets/img/', $filename);
        }

        $invoice = Transaction::where('user_id', auth()->user()->id)->where('id', $id)->firstorfail();
        $invoice->payment_method = $request->payment_method;
        $invoice->image = $filename;
        $invoice->status = 'waiting-for-approval';
        $invoice->save();

        return redirect()->route('invoice')->with('status', 'Thank you for successfully uploading the payment proof! We kindly await confirmation from our administrator.');
    }



    public function destroy($id)
    {
        $invoice = Transaction::where('id', $id)->firstorfail();
        if ($invoice->image) {
            $image_path = 'assets/img/' . $invoice->image;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $invoice->delete();

        return redirect()->route('invoice')->with('status', 'Invoice has been deleted!');
    }
}
