@php
    $page = 'product';
    $title = 'Detail - Digity';
@endphp
@extends('layouts.frontend')
@section('content')
    <section class="product container">
        <a href="{{ url()->previous() }}" class="btn btn-back"><i class="fa-solid fa-arrow-left"></i> Back</a>
        <div class="service-detail">
            <div class="service-detail-info">
                <small>{{ $service->status }}</small>
                <h3>{{ $service->name }}</h3>
                <p>
                    Rp. {{ number_format($service->price_min, 0, ',', '.') }}
                    @if ($service->price_max != null)
                        - Rp. {{ number_format($service->price_max, 0, ',', '.') }}
                    @endif
                </p>
                <p>{{ $service->caption }}</p>
                {!! $service->description !!}
            </div>
            <div class="service-detail-action">
                <img src="/assets/img/{{ $service->image }}" alt="">
                <a href="" class="btn btn-digity"><i class="fa-solid fa-check-to-slot"></i> Make Order</a>
                <a href="https://wa.me/6285210542017?text={{ urlencode('Halo admin DIGITY, saya tertarik dengan layanan ' . $service->name . ', apakah ada info lebih lanjut mengenai layanan ini?') }}"
                    target="_blank" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> Request WA</a>
            </div>
        </div>
    </section>
@endsection
