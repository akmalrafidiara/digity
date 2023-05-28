@php
    $page = 'dashboard';
    $title = 'Dashboard - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Dashboard</h1>
        <p>Hi, Welcome to Digital Entity</p>
    </div>
    <div class="status-process">
        <div class="card">
            <div class="card-title">
                <h3>Order Compleate</h3>
            </div>
            <div class="card-body">
                <h1>10<span>/18</span></h1>
                <div class="progress">
                    <div class="progress-bar" style="width: 55%;">55%</div>
                </div>
            </div>
            <a href=""><i class="fa-solid fa-arrow-right"></i> Details</a>
        </div>

        <div class="card">
            <div class="card-title">
                <h3>Waiting for Revision</h3>
            </div>
            <div class="card-body">
                <h1>2</h1>
                <div class="progress">
                    <div class="progress-bar" style="width: 100%; background-color:#FFEE57 ;">100%</div>
                </div>
            </div>
            <a href=""><i class="fa-solid fa-arrow-right"></i> Details</a>
        </div>

        <div class="card">
            <div class="card-title">
                <h3>Success</h3>
            </div>
            <div class="card-body">
                <h1>8<span>/10</span></h1>
                <div class="progress">
                    <div class="progress-bar" style="width: 80%; background-color:#73FF9A ;">80%</div>
                </div>
            </div>
            <a href=""><i class="fa-solid fa-arrow-right"></i> Details </a>
        </div>
    </div>
@endsection
