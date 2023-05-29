@php
    $page = 'project';
    $title = 'My Project - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>My Project</h1>
        <p>Take Control of Your Projects!</p>
    </div>
    <div class="table">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Order</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Digital Entity Instagram Content</td>
                    <td><a href="#">12 Feed Instagram</a></td>
                    <td>22 June 23</td>
                    <td>On Progress</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Banner Utama Toko</td>
                    <td><a href="#">Banner</a></td>
                    <td>22 June 23</td>
                    <td>On Progress</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i></a>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Desain Baju</td>
                    <td><a href="#">Corporate Cloth Design</a></td>
                    <td>22 June 23</td>
                    <td>On Progress</td>
                    <td>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
