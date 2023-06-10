@php
    $page = 'product';
    $title = 'Detail - Digity';
@endphp
@extends('layouts.frontend')
@section('content')
    <section class="product container">
        <a href="{{ url()->previous() }}" class="btn btn-back"><i class="fa-solid fa-arrow-left"></i> Back</a>
        <div class="product-detail">
            <img src="/assets/img/{{ $product->image }}" alt="Product 1">
            <a href="/services/{{ $product->service->slug }}" style="text-decoration: none;">
                <small>{{ $product->service->name }}</small>
            </a>
            <h3>{{ $product->name }}</h3>
            <p>{{ $product->caption }}</p>
            <p>
                {!! $product->description !!}
            </p>
            <div class="product-action">
                <a href="" class="btn btn-order"><i class="fa-regular fa-heart"></i></a>
                <a href="/services/{{ $product->service->slug }}" class="btn btn-order">See Service</a>
            </div>
        </div>
        <div class="section-title">
            <h2>Related Product</h2>
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
    <section class="contact-whatsapp">
        <div class="container contact-whatsapp-card">
            <div class="contact-whatsapp-text">
                <h2>Are you interested in partnering with us? Let's collaborate and create together!</h2>
                <p>Our team will reply your message as soon as possible</p>
            </div>
            <div class="contact-whatsapp-btn">
                <a href="https://wa.me/6285210542017?text={{ urlencode('Halo admin DIGITY, saya tertarik dengan konten ' . $product->name . ', apakah ada info lebih lanjut mengenai layanan ini?') }}"
                    target="_blank" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> Contact Us!</a>
            </div>
        </div>
    </section>
@endsection
