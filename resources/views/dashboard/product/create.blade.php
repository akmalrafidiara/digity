@php
    $page = 'product';
    $title = 'Create product - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Create Product</h1>
        <p>Create Digity Product!</p>
    </div>
    <div class="btn-create">
        <a href="../product"><i class="fa-solid fa-arrow-left"></i> Back</a>
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
                        <label for="product">Product</label>
                        <input type="text" name="name" id="product" placeholder="Product Name"
                            value="{{ old('name') }}">
                    </div>
                    <div class="form-field">
                        <label for="caption">Caption</label>
                        <input type="text" name="caption" id="caption" placeholder="Caption"
                            value="{{ old('caption') }}">
                    </div>
                    <div class="form-field">
                        <label for="image">Featured Image</label>
                        <div class="form-file">
                            <input type="file" name="image" id="image" onchange="previewImage()">
                            <div class="image-preview">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-6">
                    <div class="form-field">
                        <label for="service">Service</label>
                        <select name="service_id" id="service">
                            <option value="" selected disabled>Select Service</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}"
                                    {{ old('service_id' == $service->id ? 'selected' : '') }}>
                                    {{ $service->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="date">Final Date</label>
                        <input type="date" name="date" id="date" placeholder="Date of Final"
                            value="{{ old('date') }}">
                    </div>
                    <div class="form-field">
                        <label>Pin</label>
                        <div class="form-radio">
                            <input type="radio" name="pin" value="yes" id="pin1"> <label
                                for="pin1">Yes</label>
                            <input type="radio" name="pin" value="no" id="pin0" checked> <label
                                for="pin0">No</label>
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="" selected disabled>Select Status</option>
                            <option value="active" {{ old('status' == 'active' ? 'selected' : '') }}>Active</option>
                            <option value="inactive" {{ old('status' == 'inactive' ? 'selected' : '') }}>Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-field">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description">
                            {{ old('description') }}</textarea>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-field form-submit">
                        <button type="submit" class="btn btn-submit">Save Product</button>
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
