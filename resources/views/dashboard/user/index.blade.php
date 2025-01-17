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
        <a href="user/create"><i class="fa-solid fa-plus"></i> Create User</a>
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
                    <th style="width: 30px">#</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td style="width: 30px">{{ $loop->iteration }}</td>
                        <td>{{ $user->email }}</td>
                        @if ($user->role_id == 1)
                            <td>Admin</td>
                        @elseif ($user->role_id == 2)
                            <td>Staff</td>
                        @elseif ($user->role_id == 3)
                            <td>Client</td>
                        @endif
                        <td>
                            <form action="user/delete/{{ $user->id }}" method="POST">
                                <a href="user/edit/{{ $user->id }}" class="btn btn-action"><i
                                        class="fa-solid fa-edit"></i></a>
                                {{-- tombol delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-action"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
