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
                    <th>Product</th>
                    <th style="min-width: 10%">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($wishlists as $wishlist)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="/products/{{ $wishlist->product->slug }}" >{{ $wishlist->product->name }}</a></td>
                        <td>
                        <a href="/products/{{ $wishlist->product->slug }}" class="btn btn-action"><i class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
