@php
    $page = 'wishlist';
    $title = 'Wishlist - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Wishlist</h1>
        <p>My wishlist!</p>
    </div>
    <div class="dashboard-container">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Service</th>
                    <th style="min-width: 10%">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><a href="#">12 Feed Instagram</a></td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
