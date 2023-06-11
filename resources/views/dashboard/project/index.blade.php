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
    @if(Auth()->user()->role_id == 1)
    <div class="btn-create">
        <a href="project/create"><i class="fa-solid fa-plus"></i> Create Project</a>
        <span>**visible for admin only</span>
    </div>
    @endif
    <div class="dashboard-container">
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
                @foreach($projects as $project)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><a href="{{route('project.detail',$project->id)}}">{{ $project->name }}</a></td>
                    <td>{{ $project->service->name }}</td>
                    <td>{{ $project->date_start }}</td>
                    <td>{{ $project->status}}</td>
                    <td>
                        <form action="project/delete/{{ $project->id }}" method="POST">
                            <a class="btn btn-action" href="{{route('project.detail',$project->id)}}"><i class="fa-solid fa-eye"></i></a>
                            <a href="project/edit/{{ $project->id }}" class="btn btn-action"><i class="fa-solid fa-edit"></i></a>
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-action"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
