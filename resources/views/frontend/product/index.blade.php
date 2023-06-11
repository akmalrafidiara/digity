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
                        <a href="/products/{{ $product['slug'] }}">
                            <img src="/assets/img/{{ $product['image'] }}" alt="Product 1">
                        </a>
                    </div>
                    <div class="product-info">
                        <a href="/services/{{ $product['service']['slug'] }}">
                            <small>{{ $product['service']['name'] }}</small>
                        </a>
                        <a href="/products/{{ $product['slug'] }}">
                            <h3>{{ $product['name'] }}</h3>
                        </a>
                        <p>{{ $product['caption'] }}</p>
                        <div class="product-action">
                            {{-- wishlist button --}}
                            {{-- <form action="{{route('frontend.product.add-to-wishlist')}}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{$product['slug']}}" id="product-id">
                                <button type="submit" class="btn btn-order add-wishlist"><i class="fa-regular fa-heart"></i></a>
                            </form> --}}

                            <input type="hidden" name="product_id" value="{{ $product['id'] }}">
                            @if(Auth::check())
                            <button class="btn btn-order {{ $product['wishlisted'] ? 'wishlisted' : '' }} product-{{ $product['id'] }}" onclick="toggleWishlist('{{ $product['id'] }}')"><i class="fa-solid fa-heart"></i></a>
                            
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection

@section('script')
    <script>

        function toggleWishlist(product_id) {
            $.ajax({
                type: "post",
                url: '{{ route('frontend.product.add-to-wishlist') }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    product_id: product_id
                },
                success: function (response) {
                    let selector =  $('.product-'+response.productId);
                    if (response.isWishlist == true) {
                        if (selector.hasClass('wishlisted')) {
                            selector.removeClass('wishlisted');
                        } else {
                            selector.addClass('wishlisted');
                        }
                    } else {
                        if (selector.hasClass('wishlisted')) {
                            selector.removeClass('wishlisted');
                        } else {
                            selector.addClass('wishlisted');
                        }
                    }
                }
            });
        }

    </script>
@endsection
