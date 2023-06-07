@php
    $page = 'product';
    $title = 'Detail - Digity';
@endphp
@extends('layouts.frontend')
@section('content')
    <section class="product container">
        <a href="{{ url()->previous() }}" class="btn btn-back"><i class="fa-solid fa-arrow-left"></i> Back</a>
        <div class="product-detail">
            <a href=""></a>
            <img src="/assets/img/prod-1.png" alt="Product 1">
            <small>Social Media Design</small>
            <h3>Instagram Feed Design</h3>
            <p>Enhance your Instagram aesthetics with our premium Social Media Design. Engage your audience and
                make a lasting impression with captivating visuals and a cohesive layout that reflects your brand's
                unique identity.</p>
            <p>
                Details
            </p>
            <div class="product-action">
                <a href="" class="btn btn-order"><i class="fa-regular fa-heart"></i></a>
                <a href="" class="btn btn-order">See Service</a>
            </div>
        </div>
        <div class="section-title">
            <h2>Related Product</h2>
            <p>Our product can assist your business in appearing more appealing and interactive</p>
        </div>
        <div class="section-product">
            <div class="product-card">
                <div class="product-img">
                    <img src="/assets/img/prod-1.png" alt="Product 1">
                </div>
                <div class="product-info">
                    <small>Social Media Design</small>
                    <h3>Instagram Feed Design</h3>
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
                    <img src="/assets/img/prod-1.png" alt="Product 1">
                </div>
                <div class="product-info">
                    <small>Social Media Design</small>
                    <h3>Instagram Feed Design</h3>
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
                    <img src="/assets/img/prod-1.png" alt="Product 1">
                </div>
                <div class="product-info">
                    <small>Social Media Design</small>
                    <h3>Instagram Feed Design</h3>
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
