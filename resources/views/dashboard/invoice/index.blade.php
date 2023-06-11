@php
    $page = 'invoice';
    $title = 'Invoice - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Invoice</h1>
        <p>Let's start your project!</p>
    </div>
    @if ($session = Session::get('status'))
        <div class="print-status">
            <p>{{ $session }}</p>
        </div>
    @endif
    <div class="dashboard-container">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Service</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th style="min-width: 10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoices as $invoice)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a
                                href="{{ route('frontend.service.detail', $invoice->service->slug) }}">{{ $invoice->service->name }}</a>
                        </td>
                        <td>{{ date('d M Y', strtotime($invoice->created_at)) }}</td>
                        <td>Rp. {{ number_format($invoice->total, 0, ',', '.') }}</td>
                        <td>{{ $invoice->status }}</td>
                        <td>
                            <form action="{{ route('invoice.destroy', $invoice->id) }}" method="POST"
                                class="btn-action-container">
                                @if ($invoice->status == 'waiting-for-payment' || $invoice->status == 'canclled')
                                    <a href="{{ route('invoice.proof', $invoice->id) }}" class="btn btn-action"><i
                                            class="fa-solid fa-credit-card"></i></a>
                                @endif
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-action"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
