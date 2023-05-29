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
    <div class="table">
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
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="#">12 Feed Instagram</a></td>
                    <td>2 May 23</td>
                    <td>fathanbak<br><a href="#">085210542017</a></td>
                    <td>Transfer - Mandiri</td>
                    <td>Rp. 750.000</td>
                    <td>Paid</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-check"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-xmark"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="#">Banner</a></td>
                    <td>10 June 23</td>
                    <td>aqmalpratama<br><a href="#">085210542017</a></td>
                    <td>Transfer - BSI</td>
                    <td>Rp. 100.000</td>
                    <td>Waiting for Approval</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-check"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-xmark"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
