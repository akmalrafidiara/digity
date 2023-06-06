@php
    $page = 'history';
    $title = 'History - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>History</h1>
        <p>History your transaction!</p>
    </div>
    <div class="dashboard-container">
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
                    <td>Complate</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><a href="#">Banner Design</a></td>
                    <td>2 May 23</td>
                    <td>Rp. 750.000</td>
                    <td>Progress</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
