@php
    $page = 'invoice';
    $title = 'Upload invoice - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Upload Payment</h1>
        <p>Upload Payment!</p>
    </div>
    <div class="btn-create">
        <a href="{{ route('invoice') }}"><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
    @if ($errors->any())
        <div class="error-form">
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        </div>
    @endif
    <div class="dashboard-container">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-field">
                        <label for="payment_method">Payment Method</label>
                        <input type="text" name="payment_method" id="payment_method"
                            placeholder="Example: Transfer - Mandiri" value="{{ old('payment_method') }}">
                    </div>
                    <div class="form-field">
                        <label for="image">Approval Payment</label>
                        <div class="form-file">
                            <input type="file" name="image" id="image" onchange="previewImage()">
                            <div class="image-preview">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <h3>Service</h3>
                    <p>{{ $invoice->service->name }}</p>
                    <br>
                    <h3>Total</h3>
                    <p>Rp. {{ number_format($invoice->total, 0, ',', '.') }}</p>
                    <br>
                    <ul>
                        <li>Mandiri: 1240011378966 a/n Akmal Rafi Diara</li>
                        <li>Gopay/ShopeePay/OVO/Dana: 085210542017</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-field form-submit">
                        <button type="submit" class="btn btn-submit">Upload Invoice</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
