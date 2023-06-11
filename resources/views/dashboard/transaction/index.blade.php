@php
    $page = 'transaction';
    $title = 'Transaction - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Transaction</h1>
        <p>Log transaction digity watch traffic!</p>
    </div>
    <div class="dashboard-container">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Order</th>
                    <th>Date</th>
                    <th>User Contact</th>
                    <th>Payment</th>
                    <th>Nominal</th>
                    <th>Status</th>
                    <th style="min-width: 10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transactions as $transaction)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a
                                href="/dashboard/service/{{ $transaction->service->slug }}">{{ $transaction->service->name }}</a>
                        </td>
                        <td>{{ date('d, M Y', strtotime($transaction->date)) }}</td>
                        <td>
                            {{ $transaction->user->name }}
                            <br>
                            <a href="https://wa.me/62{{ ltrim($transaction->user->phone_number, 0) }}"
                                target="_blank">{{ $transaction->user->phone_number }}</a>
                        </td>
                        <td>{{ $transaction->payment_method }}</td>
                        <td>Rp. {{ number_format($transaction->total, 0, ',', '.') }}
                        </td>
                        <td>{{ $transaction->status }}</td>
                        <td>
                            <a href="#" class="btn btn-action"><i class="fa-solid fa-check"></i></a>
                            <a href="#" class="btn btn-action"><i class="fa-solid fa-xmark"></i></a>
                            <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
