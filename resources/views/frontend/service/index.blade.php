@php
    $page = 'product';
    $title = 'Product - Digity';
@endphp
@extends('layouts.frontend')
@section('content')
    <section class="product container">
        <div class="section-title">
            <h1>Digital Entity Services</h1>
            <p>Unlocking possibilities, delivering excellence. See all our service provide for you.</p>
        </div>
        <div class="section-service">
            <div class="service-item">
                <div class="service-img">
                    <img src="/assets/img/ux.svg" alt="services-logo" />
                </div>
                <div class="service-info">
                    <small>Available</small>
                    <h3><a href="/services/detail" class="service-name">Service Name</a></h3>
                    <p>Caption---Branding is the process of giving a meaning to specific organization, company, products or
                        services
                        by
                        creating and shaping a brand in consumers' minds.</p>
                    <p>Rp. 100.000 - Rp. 750.000</p>
                    <a href="/services/detail" class="btn btn-order">Order Now</a>
                </div>
            </div>
            <div class="service-item">
                <div class="service-img">
                    <img src="/assets/img/ux.svg" alt="services-logo" />
                </div>
                <div class="service-info">
                    <small>Available</small>
                    <h3><a href="/services/detail" class="service-name">Service Name</a></h3>
                    <p>Caption---Branding is the process of giving a meaning to specific organization, company, products or
                        services
                        by
                        creating and shaping a brand in consumers' minds.</p>
                    <p>Rp. 100.000 - Rp. 750.000</p>
                    <a href="/services/detail" class="btn btn-order">Order Now</a>
                </div>
            </div>
            <div class="service-item">
                <div class="service-img">
                    <img src="/assets/img/ux.svg" alt="services-logo" />
                </div>
                <div class="service-info">
                    <small>Available</small>
                    <h3><a href="/services/detail" class="service-name">Service Name</a></h3>
                    <p>Caption---Branding is the process of giving a meaning to specific organization, company, products or
                        services
                        by
                        creating and shaping a brand in consumers' minds.</p>
                    <p>Rp. 100.000 - Rp. 750.000</p>
                    <a href="/services/detail" class="btn btn-order">Order Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection
