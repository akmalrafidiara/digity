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
                    <th style="width: 30px">#</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>akmalrafidiara@gmail.com</td>
                    <td>Admin</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>aqmalpratama@gmail.com</td>
                    <td>Designer</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>fathanbaka@gmail.com</td>
                    <td>Designer</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>salwats@gmail.com</td>
                    <td>Clinet</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>radenrziva@gmail.com</td>
                    <td>Clinet</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
