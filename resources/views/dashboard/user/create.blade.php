@php
    $page = 'user';
    $title = 'Create User - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Create User</h1>
        <p>Create Digity User!</p>
    </div>
    <div class="btn-create">
        <a href="../user"><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
    <div class="dashboard-container">
        <form action="{{route('storeUser')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-field">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" id="name" placeholder="Your Name">
                    </div>
                    <div class="form-field">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" placeholder="Fill with username">
                    </div>
                    <div class="form-field">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="example@mail.com">
                    </div>
                    <div class="form-field">
                        <label for="phone_number">Telp/Wa</label>
                        <input type="text" name="phone_number" id="phone_number" placeholder="Fill with telp/wa">
                    </div>
                    <div class="form-field">
                        <label for="role">Assign Role</label>
                        <select name="role_id" id="role">
                            <option value="" selected disabled>Select Role</option>
                            <option value="3">Client</option>
                            <option value="2">Staff</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="image">Profile Image</label>
                        <div class="form-file">
                            <input type="file" name="profile" id="image" onchange="previewImage()">
                            <div class="image-preview">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-field">
                        <label for="password">password</label>
                        <input type="password" name="password" id="password" placeholder="">
                    </div>
                    <div class="form-field">
                        <label for="confirm-password">Confirm password</label>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="">
                    </div>
                    <div class="form-field">
                        <label for="bio">Bio</label>
                        <textarea name="bio" id="bio" cols="30" rows="10" placeholder="Description"></textarea>
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
