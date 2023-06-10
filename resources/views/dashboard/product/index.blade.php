@php
    $page = 'product';
    $title = 'Product - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Product</h1>
        <p>Create Read Update Delete Digity Product!</p>
    </div>
    <div class="btn-create">
        <a href="product/create"><i class="fa-solid fa-plus"></i> Create Product</a>
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
                    <th>#</th>
                    <th>Product</th>
                    <th>Service</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->name }}</td>
                        <td><a href="/services/{{ $product->service->slug }}">{{ $product->service->name }}</a></td>
                        <td>{{ $product->status }}</td>
                        <td>
                            <form action="{{ route('product.destroy', $product->id) }}" method="POST"
                                class="btn-action-container">
                                @csrf
                                @method('DELETE')
                                <a href="" class="btn btn-action"><i class="fa-solid fa-eye"></i></a>
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-action"><i
                                        class="fa-solid fa-pen"></i></a>
                                <button type="submit" class="btn btn-action"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
