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
            @foreach ($services as $service)
                <div class="service-item">
                    <div class="service-img">
                        <img src="/assets/img/{{ $service->image }}" alt="services-logo" />
                    </div>
                    <div class="service-info">
                        <small>{{ $service->status }}</small>
                        <h3><a href="/services/{{ $service->slug }}" class="service-name">{{ $service->name }}</a></h3>
                        <p>{{ $service->caption }}.</p>
                        <p>Rp. {{ number_format($service->price_min, 0, ',', '.') }}
                            @if ($service->price_max != null)
                                - Rp. {{ number_format($service->price_max, 0, ',', '.') }}
                            @endif
                        </p>
                        <a href="/services/{{ $service->slug }}" class="btn btn-order">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
