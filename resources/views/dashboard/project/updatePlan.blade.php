@php
    $page = 'project';
    $title = 'Update Project Plan - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Update Editorial Plan</h1>
        <p>For {{$project->name}}</p>
    </div>
    <div class="btn-create">
        <a href="{{ url()->previous() }}"><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
    <div class="dashboard-container">
        <form action="{{route('project.update-plan')}}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{$projectPlan->id}}">
            <div class="row">
                <div class="col-6">
                    <div class="form-field">
                        <label for="Title">Title</label>
                        <input type="text" name="title" id="Title" placeholder="Title" value="{{old('title',$projectPlan->title)}}">
                    </div>
                    <div class="form-field">
                        <div class="form-field">
                            <label for="Type">Type</label>
                            <input type="text" name="type" id="Type" placeholder="Example: Feed" value="{{old('type',$projectPlan->type)}}">
                        </div>
                    </div>
                    <div class="form-field">
                        <label for="time">Upload Time (optional)</label>
                        <input type="time" name="upload_time" id="time"value="{{old('upload_time',$projectPlan->upload_time)}}">
                    </div>
                    <div class="form-field">
                        <label for="date">Upload Date (optional)</label>
                        <input type="date" name="upload_date" id="date"value="{{old('upload_date',$projectPlan->upload_date)}}">
                    </div>
                    <div class="form-field">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="{{old('upload_date',$projectPlan->status)}}" selected >{{old('upload_date',$projectPlan->status)}}</option>
                            <option value="queue">Queue</option>
                            <option value="preparation">Preparation</option>
                            <option value="onprogress">On Progress</option>
                            <option value="done">Done</option>
                            <option value="notavailable">Not Available</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="detail">Detail</label>
                        <textarea name="detail" id="detail" cols="30" rows="10">
                            {!!old('detail',$projectPlan->detail)!!}
                        </textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-field">
                        <label for="caption">Caption</label>
                        <textarea name="caption" id="caption" cols="30" rows="10">
                            {!!old('caption',$projectPlan->caption)!!}
                        </textarea>
                    </div>
                    <div class="form-field">
                        <label for="hashtag">Hashtag</label>
                        <textarea name="hashtag" id="hashtag" cols="30" rows="10" placeholder="Hashtag">
                            {!!old('hashtag',$projectPlan->hashtag)!!}
                        </textarea>
                    </div>
                    <div class="form-field">
                        <label for="revision">Revision</label>
                        <textarea name="revision" id="revision" cols="30" rows="10">
                            {!!old('revision',$projectPlan->revision)!!}
                        </textarea>
                    </div>

                </div>
            </div>
            <div class="form-field form-submit">
                <button type="submit" class="btn btn-submit">Start Project</button>
            </div>


        </form>
    </div>
@endsection
@section('script')
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('detail');
        CKEDITOR.replace('caption');
        CKEDITOR.replace('revision');
    </script>
@endsection
