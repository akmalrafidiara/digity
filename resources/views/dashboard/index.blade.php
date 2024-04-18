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
    @if (auth()->user()->role_id == 1)
        <h3>Welcome Admin</h3>
        <div class="widget-client">
            <div class="card">
                <div class="card-title">
                    <h3>Total User</h3>
                </div>
                <div class="card-body">
                    <h1>{{ $data['user'] }}</h1>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    <h3>Available Service</h3>
                </div>
                <div class="card-body">
                    <h1>{{ $data['service'] }}</h1>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    <h3>Count Product</h3>
                </div>
                <div class="card-body">
                    <h1>{{ $data['product'] }}</h1>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    <h3>Waiting For Approval</h3>
                </div>
                <div class="card-body">
                    <h1>{{ $data['transaction_waiting'] }}</h1>
                </div>
            </div>
            <div class="card">
                <div class="card-title">
                    <h3>Project Status</h3>
                </div>
                <div class="card-body">
                    <h1>{{ $data['project']['done'] }}<span>/{{ $data['project']['on-progress'] }}</span></h1>
                    <div class="progress">
                        <div class="progress-bar" style="width: {{ $data['project']['percent'] }}%;">
                            {{ $data['project']['percent'] }}%</div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    @if (auth()->user()->role_id == 2)
        <div class="widget-client">
            <h3>Haloo Entity</h3>
        </div>
    @endif

    @if (auth()->user()->role_id == 3)
        <div class="widget-client">
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
        <div class="widget-client">
            <div class="card">
                <div class="card-title">
                    <h3>Preview</h3>
                </div>
                <div class="card-img">
                    <img src="/assets/img/desain-pro-1.png" alt="">
                </div>
                <div class="card-caption">
                    <p>"We believe that everyone has great potential to improve their skills! Join us and discover new ways
                        to
                        hone your skills. From art, programming, cooking, and more! With our expert guidance, you will gain
                        valuable knowledge and insights . Add value to yourself and see incredible progress on your way to
                        excellence! 💪✨" <br>
                        #improveyourskills #skilldevelopment #learningjourney #personaldevelopment</p>
                </div>
                <div class="card-action">
                    <a href="">Accept</a>
                    <a href="">Need Revision</a>
                </div>
            </div>
            <div class="card card-history">
                <div class="card-title">
                    <h3>History</h3>
                </div>
                <div class="card-history-img">
                    <img src="/assets/img/desain-pro-1.png" alt="">
                    <img src="/assets/img/desain-pro-2.png" alt="">
                    <img src="/assets/img/desain-pro-3.png" alt="">
                    <img src="/assets/img/desain-pro-4.png" alt="">
                    <img src="/assets/img/desain-pro-1.png" alt="">
                    <img src="/assets/img/desain-pro-2.png" alt="">
                    <img src="/assets/img/desain-pro-3.png" alt="">
                    <img src="/assets/img/desain-pro-4.png" alt="">
                </div>
            </div>
        </div>
    @endif
@endsection
