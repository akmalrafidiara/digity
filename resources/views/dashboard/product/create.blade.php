@php
    $page = 'service';
    $title = 'Create Service - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Create Service</h1>
        <p>Create Digity Service!</p>
    </div>
    <div class="btn-create">
        <a href="../service"><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
    <div class="dashboard-container">
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-field">
                        <label for="service">Service</label>
                        <input type="text" name="service" id="service" placeholder="Service Name">
                    </div>
                    <div class="form-field">
                        <label for="caption">Caption</label>
                        <input type="text" name="caption" id="caption" placeholder="Caption">
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
                        <label for="price-min">Price-Min</label>
                        <input type="text" name="price-minn" id="price-min" placeholder="Price-Min">
                    </div>
                    <div class="form-field">
                        <label for="price-max">Price-Max</label>
                        <input type="text" name="price-max" id="price-max" placeholder="Price-Max (optional)">
                    </div>

                    <div class="form-field">
                        <label>Pin</label>
                        <div class="form-radio">
                            <input type="radio" name="pin" value="1" id="pin1"> <label
                                for="pin1">Yes</label>
                            <input type="radio" name="pin" value="0" id="pin0" checked> <label
                                for="pin0">No</label>
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="" selected disabled>Select Status</option>
                            <option value="1">Available</option>
                            <option value="0">Not Available</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="form-field">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
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
