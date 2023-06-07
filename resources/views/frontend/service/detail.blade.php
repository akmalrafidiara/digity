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
                <small>Available</small>
                <h3>Service Name</h3>
                <p>Rp. 100.000 - Rp. 750.000</p>
                <p>Caption---Branding is the process of giving a meaning to specific organization, company, products or
                    services by creating and shaping a brand in consumers' minds.</p>
                <p>Description -- Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nobis non molestiae
                    fugiat fugit, commodi aliquid expedita ab veniam temporibus doloribus libero ut saepe laboriosam beatae
                    quibusdam facere magni neque rem dolores provident unde mollitia repellat! Nam corporis vero, nostrum
                    aut aliquid cumque error labore, ratione itaque ab sequi nihil ullam aliquam, quo iste laborum.
                    Perspiciatis dolorum sapiente magni consequuntur. Omnis aspernatur iusto quidem eius debitis placeat
                    doloremque velit provident!</p>
            </div>
            <div class="service-detail-action">
                <img src="/assets/img/ux.svg" alt="">
                <a href="" class="btn btn-digity"><i class="fa-solid fa-check-to-slot"></i> Make Order</a>
            </div>
        </div>
    </section>
@endsection
