@php
    $page = 'invoice';
    $title = 'Invoice - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Invoice</h1>
        <p>Log transaction digity watch traffic!</p>
    </div>
    <div class="table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Order</th>
                    <th>Date</th>
                    <th>Total</th>
                    <th>Status</th>
                    <th style="min-width: 10%">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="#">12 Feed Instagram</a></td>
                    <td>2 May 23</td>
                    <td>Rp. 750.000</td>
                    <td>Waiting for payment</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-credit-card"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
