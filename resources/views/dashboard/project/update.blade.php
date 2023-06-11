@php
    $page = 'project';
    $title = 'Update Project - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Update Project {{$project->name}}</h1>
        <p>Edit Digity Project!</p>
    </div>
    <div class="btn-create">
        <a href="{{ url()->previous() }} "><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
    <div class="dashboard-container">
        <form action="{{route('project.update')}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$project->id}}">
            <div class="row">
                <div class="col-6">
                    <div class="form-field">
                        <label for="name">Project Name</label>
                        <input type="text" name="name" id="name" placeholder="name Name" value="{{old('name',$project->name)}}">
                    </div>
                    <div class="form-field">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description">{{old('description',$project->description)}}</textarea>
                    </div>
                    <div class="form-field">
                        <label for="note">Note</label>
                        <textarea name="note" id="note" cols="30" rows="10" placeholder="Note">{{old('note',$project->note)}}</textarea>
                    </div>

                </div>
                <div class="col-6">
                    <div class="form-field">
                        <label for="stakeholder">Stakeholder</label>
                        <select name="stackholder" id="stakeholder">
                            <option value="{{old('stackholder',$project->stackholder)}}" selected >{{old('stackholder',$project->stackholderName->name)}}</option>
                            {{-- client --}}
                            @foreach($stackholder as $stack)
                                <option value="{{$stack->id}}">{{$stack->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="PIC">PIC Project</label>
                        <select name="pic" id="PIC">
                            <option value="{{old('pic',$project->pic)}}" selected >{{old('pic',$project->picName->name)}}</option>
                            {{-- to staff / designer --}}
                            @foreach($pic as $pic)
                                <option value="{{$pic->id}}">{{$pic->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="date_start">Date Start</label>
                        <input type="date" name="date_start" id="date_start" value="{{old('date_start',$project->date_start)}}">
                    </div>
                    <div class="form-field">
                        <label for="date_end" >Estimate Date End (optional)</label>
                        <input type="date" name="date_end" id="date_end" value="{{old('date_end',$project->date_end)}}">
                    </div>
                    <div class="form-field">
                        <label for="service">Relate with service</label>
                        <select name="service_id" id="service">
                            <option value="{{old('service_id',$project->service_id)}}" selected >{{old('service_id',$project->service_id)}}</option>
                            {{-- to staff / designer --}}
                            @foreach($service as $serv)
                                <option value="{{$serv->id}}">{{$serv->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="{{old('status',$project->status)}}" selected >{{old('status',$project->status)}}</option>
                            <option value="queue">Queue</option>
                            <option value="preparation">Preparation</option>
                            <option value="onprogress">On Progress</option>
                            <option value="done">Done</option>
                            <option value="notavailable">Not Available</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-field form-submit">
                <button type="submit" class="btn btn-submit">Update Project</button>
            </div>


        </form>
    </div>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
        CKEDITOR.replace('note');
    </script>
@endsection