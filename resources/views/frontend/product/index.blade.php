@php
    $page = 'product';
    $title = 'Product - Digity';
@endphp
@extends('layouts.frontend')
@section('content')
    <section class="product container">
        <div class="section-title">
            <h1>Digital Entity Product</h1>
            <p>Our product can assist your business in appearing more appealing and interactive</p>
        </div>
        <div class="product-container">
            @foreach ($products as $product)
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    </div>
                    <div class="product-info">
                        <h3>{{ $product->name }}</h3>
                        <p>{{ $product->description }}</p>
                        <a href="{{ route('product.show', $product->slug) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach
    </section>
@endsection
