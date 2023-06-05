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
                <tr>
                    <td>1</td>
                    <td>12 Feed Instagram + Content Planner</td>
                    <td>Rp. 750.000</td>
                    <td>Off</td>
                    <td>Available</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>6 Feed Instagram + Content Planner</td>
                    <td>Rp. 750.000</td>
                    <td>Off</td>
                    <td>Available</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Desain Custom</td>
                    <td>Rp. 100.000 - Rp. 250.000</td>
                    <td>Off</td>
                    <td>Available</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Corporate Cloth Design</td>
                    <td>Rp. 100.000 - Rp. 250.000</td>
                    <td>Off</td>
                    <td>Available</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
