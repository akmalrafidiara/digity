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
                @if ($service->isInvoiceExist())
                    <a href="{{ route('invoice') }}" class="btn btn-digity">Already Order</a>
                @endif
                @if ($service->pin == 'no' && $service->isInvoiceExist() == false)
                    <form action="{{ route('frontend.service.makeinvoice', $service->id) }}" method="POST">
                        @csrf
                        <button class="btn btn-digity"><i class="fa-solid fa-check-to-slot"></i> Make Order</button>
                    </form>
                @endif
                <a href="https://wa.me/6285210542017?text={{ urlencode('Halo admin DIGITY, saya tertarik dengan layanan ' . $service->name . ', apakah ada info lebih lanjut mengenai layanan ini?') }}"
                    target="_blank" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> Request WA</a>
            </div>
        </div>
    </section>
    <section id="services" class="container">
        <div class="newsletter" data-aos="fade-right" data-aos-duration="2000">
            <h1 class="text-subtitle">
                How We Can Help You
            </h1>
            <p class="text-tiny">
                Unlocking possibilities, delivering excellence. See all our service provide for you.
            </p>
            <a href="/services" class="btn btn-digity">See All Service</a>
        </div>
        <div class="services">
            @foreach ($services as $service)
                <div class="service" data-aos="fade-up"
                    data-aos-duration="{{ $loop->iteration % 2 == 0 ? '2000' : '3000' }}">
                    <div class="service-card">
                        <img src="/assets/img/{{ $service->image }}" alt="services-logo" />
                        <h3 class="text-paraghraph">{{ $service->name }}</h3>
                        <p class="text-tiny">
                            {{ $service->caption }}
                        </p>
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
                <a href="https://wa.me/6285210542017?text={{ urlencode('Halo admin DIGITY, saya tertarik dengan konten ' . $service->name . ', apakah ada info lebih lanjut mengenai layanan ini?') }}"
                    target="_blank" class="btn btn-whatsapp"><i class="fa-brands fa-whatsapp"></i> Contact Us!</a>
            </div>
        </div>
    </section>
@endsection
