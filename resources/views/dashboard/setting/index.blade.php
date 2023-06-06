@php
    $page = 'setting';
    $title = 'Setting - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Setting</h1>
        <p>Create Digity User!</p>
    </div>
    <div class="btn-create">
        <a href="../user"><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
    <div class="dashboard-container">
        <form action="" method="POST">
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
                        <label for="role">Assign Role</label>
                        <select name="role" id="role">
                            <option value="" selected disabled>Select Role</option>
                            <option value="client">Client</option>
                            <option value="designer">Designer</option>
                            <option value="staff">Staff</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="image">Profile Image</label>
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
