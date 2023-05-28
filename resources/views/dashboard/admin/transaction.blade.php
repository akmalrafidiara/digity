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
                    <th>Code</th>
                    <th>Date</th>
                    <th>User</th>
                    <th>Payment</th>
                    <th>Nominal</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>IG1M</td>
                    <td>23/5/23</td>
                    <td>fathanbaka</td>
                    <td>Transfer - Mandiri</td>
                    <td>Rp. 750.000</td>
                    <td>Paid</td>
                    <td>
                        <a href="#" class="btn btn-delete"><i class="fa-solid fa-trash"></i> Delete</a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>IG1M</td>
                    <td>01/5/23</td>
                    <td>aqmalpratama</td>
                    <td>Transfer - BSI</td>
                    <td>Rp. 750.000</td>
                    <td>Paid</td>
                    <td>
                        <a href="#" class="btn btn-delete"><i class="fa-solid fa-trash"></i> Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
