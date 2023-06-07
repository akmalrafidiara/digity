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
            <div class="product-card">
                <div class="product-img">
                    <a href="/products/detail"><img src="/assets/img/prod-1.png" alt="Product 1"></a>
                </div>
                <div class="product-info">
                    <small>Social Media Design</small>
                    <a href="/products/detail">
                        <h3>Instagram Feed Design</h3>
                    </a>
                    <p>Enhance your Instagram aesthetics with our premium Social Media Design. Engage your audience and
                        make a lasting impression with captivating visuals and a cohesive layout that reflects your brand's
                        unique identity.</p>
                    <div class="product-action">
                        <a href="" class="btn btn-order"><i class="fa-regular fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-img">
                    <a href="/products/detail"><img src="/assets/img/prod-1.png" alt="Product 1"></a>
                </div>
                <div class="product-info">
                    <small>Social Media Design</small>
                    <a href="/products/detail">
                        <h3>Instagram Feed Design</h3>
                    </a>
                    <p>Enhance your Instagram aesthetics with our premium Social Media Design. Engage your audience and
                        make a lasting impression with captivating visuals and a cohesive layout that reflects your brand's
                        unique identity.</p>
                    <div class="product-action">
                        <a href="" class="btn btn-order"><i class="fa-regular fa-heart"></i></a>
                    </div>
                </div>
            </div>
            <div class="product-card">
                <div class="product-img">
                    <a href="/products/detail"><img src="/assets/img/prod-1.png" alt="Product 1"></a>
                </div>
                <div class="product-info">
                    <small>Social Media Design</small>
                    <a href="/products/detail">
                        <h3>Instagram Feed Design</h3>
                    </a>
                    <p>Enhance your Instagram aesthetics with our premium Social Media Design. Engage your audience and
                        make a lasting impression with captivating visuals and a cohesive layout that reflects your brand's
                        unique identity.</p>
                    <div class="product-action">
                        <a href="" class="btn btn-order"><i class="fa-regular fa-heart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
