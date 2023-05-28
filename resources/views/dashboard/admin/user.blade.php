@php
    $page = 'user';
    $title = 'User - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>User Management</h1>
        <p>Create Read Update Delete Digity User!</p>
    </div>
    <div class="btn-create">
        <a href="#"><i class="fa-solid fa-plus"></i> Create User</a>
    </div>
    <div class="table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
