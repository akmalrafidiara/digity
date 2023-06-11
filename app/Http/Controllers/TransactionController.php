<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::where('status', '!=', 'waiting-for-payment')->get();
        return view('dashboard/transaction/index', compact('transactions'));
    }

    public function acceptPayment($id)
    {
        $transaction = Transaction::where('id', $id)->firstorfail();
        $transaction->status = 'paid';
        $transaction->save();

        return redirect()->route('transaction')->with('status', 'Payment proof has been accepted!');
    }

    public function rejectPayment($id)
    {
        $transaction = Transaction::where('id', $id)->firstorfail();
        $transaction->status = 'cancelled';
        $transaction->save();

        return redirect()->route('transaction')->with('status', 'Payment proof has been rejected!');
    }

    public function destroy($id)
    {
        $transaction = Transaction::where('id', $id)->firstorfail();
        if ($transaction->image) {
            $image_path = 'assets/img/' . $transaction->image;
            if (file_exists($image_path)) {
                unlink($image_path);
            }
        }
        $transaction->delete();

        return redirect()->route('transaction')->with('status', 'Transaction has been deleted!');
    }

    // History transaction for user
    public function history()
    {
        return view('dashboard/transaction/history');
    }

    // Detail transaction for user
    public function history_detail()
    {
        return view('dashboard/transaction/detail');
    }
}
