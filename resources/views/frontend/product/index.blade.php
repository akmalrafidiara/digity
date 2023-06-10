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
        <div class="section-product">
            @foreach ($products as $product)
                <div class="product-card">
                    <div class="product-img">
                        <a href="/products/{{ $product->slug }}">
                            <img src="/assets/img/{{ $product->image }}" alt="Product 1">
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="/services/{{ $product->service->slug }}">
                            <small>{{ $product->service->name }}</small>
                        </a>
                        <a href="/products/{{ $product->slug }}">
                            <h3>{{ $product->name }}</h3>
                        </a>
                        <p>{{ $product->caption }}</p>
                        <div class="product-action">
                            <a href="" class="btn btn-order"><i class="fa-regular fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
