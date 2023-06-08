@php
    $page = 'service';
    $title = 'Service - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Service</h1>
        <p>Create Read Update Delete Digity Service!</p>
    </div>
    <div class="btn-create">
        <a href="service/create"><i class="fa-solid fa-plus"></i> Create Service</a>
    </div>
    <div class="dashboard-container">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Service</th>
                    <th>Price</th>
                    <th>Pin</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $service->name }}</td>
                        <td>Rp. {{ number_format($service->price_min, 0, ',', '.') }}
                            @if ($service->price != null)
                                - Rp. {{ number_format($service->price_max, 0, ',', '.') }}
                            @endif
                        </td>
                        <td>{{ $service->pin }}</td>
                        <td>{{ $service->status }}</td>
                        <td>
                            <form action="/dashboard/service/{{ $service->id }}" method="POST" class="d-inline">
                                <a href="/dashboard/service/{{ $service->id }}" class="btn btn-action"><i
                                        class="fa-solid fa-eye"></i></a>
                                <a href="/dashboard/service/{{ $service->id }}/edit" class="btn btn-action"><i
                                        class="fa-solid fa-pen"></i></a>
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-action"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
