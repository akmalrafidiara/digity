@php
    $page = 'setting';
    $title = 'Setting - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
@php
    $user = Auth::user();
@endphp
    <div class="page-title">
        <h1>Setting</h1>
        <p>Create Digity User!</p>
    </div>
    <div class="btn-create">
        <a href="../user"><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
    <div class="dashboard-container">
        <form action="{{route('updateUser')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$user->id}}" id="">
            <div class="row">
                <div class="col-6">
                    <div class="form-field">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name" value="{{$user->name}}">
                    </div>
                    <div class="form-field">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Fill with username" value="{{$user->username}}">
                    </div>
                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="example@mail.com" value="{{$user->email}}">
                    </div>
                    <div class="form-field">
                        <label for="phone_number">Telp/Wa</label>
                        <input type="text" name="phone_number" id="phone_number" placeholder="Fill with telp/wa" value="{{$user->phone_number}}">
                    </div>
                    <div class="form-field">
                        <label for="image">Profile Image</label>
                        <div class="form-file">
                            <input type="file" name="profile" id="image" onchange="previewImage()">
                            <div class="image-preview">
                                <img src="/assets/profile/{{$user->profile}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-field">
                        <label for="password">password</label>
                        <input type="password" name="password" id="password" placeholder="" value="">
                    </div>
                    <div class="form-field">
                        <label for="confirm-password">Confirm password</label>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="">
                    </div>
                    <div class="form-field">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Des ription">{{{ $user->bio }}}</textarea>
                    </div>
                </div>
            </div>
            <div class="form-field form-submit">
                <button type="submit" class="btn btn-submit">Create Account</button>
            </div>

        </form>
    </div>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('bio');
    </script>
@endsection
