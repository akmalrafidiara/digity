@php
    $page = 'service';
    $title = 'Edit Service - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Create Service</h1>
        <p>Create Digity Service!</p>
    </div>
    <div class="btn-create">
        <a href="{{ route('service') }}"><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
    @if ($errors->any())
        <div class="error-form">
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        </div>
    @endif
    <div class="dashboard-container">
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="slug" value="{{ $service->slug }}">
            <div class="row">
                <div class="col-6">
                    <div class="form-field">
                        <label for="service">Service</label>
                        <input type="text" name="name" id="service" placeholder="Service Name"
                            value="{{ old('name', $service->name) }}">
                    </div>
                    <div class="form-field">
                        <label for="caption">Caption</label>
                        <input type="text" name="caption" id="caption" placeholder="Caption"
                            value="{{ old('caption', $service->caption) }}">
                    </div>
                    <div class="form-field">
                        <label for="image">Featured Image</label>
                        <div class="form-file">
                            <input type="file" name="image" id="image" onchange="previewImage()">
                            <div class="image-preview">
                                <img src="/assets/img/{{ $service->image }}" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div class="form-field">
                        <label for="price-min">Price-Min</label>
                        <input type="text" name="price_min" id="price-min" placeholder="Price-Min"
                            value="{{ old('price_min', $service->price_min) }}">
                    </div>
                    <div class="form-field">
                        <label for="price-max">Price-Max</label>
                        <input type="text" name="price_max" id="price-max" placeholder="Price-Max (optional)"
                            value="{{ old('price_max', $service->price_max) }}">
                    </div>

                    <div class="form-field">
                        <label>Pin</label>
                        <div class="form-radio">
                            <input type="radio" name="pin" value="yes" id="pin1"
                                {{ $service->pin == 'yes' ? 'checked' : '' }}> <label for="pin1">Yes</label>
                            <input type="radio" name="pin" value="no" id="pin0"
                                {{ $service->pin == 'no' ? 'checked' : '' }}> <label for="pin0">No</label>
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="" selected disabled>Select Status</option>
                            <option value="available"
                                {{ old('status', $service->status) == 'available' ? 'selected' : '' }}>Available
                            </option>
                            <option value="not-available"
                                {{ old('status', $service->status) == 'not-available' ? 'selected' : '' }}>Not
                                Available
                            </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-field">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description">{{ old('description', $service->description) }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-field form-submit">
                        <button type="submit" class="btn btn-submit">Save Service</button>
                    </div>
                </div>
            </div>


        </form>
    </div>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
