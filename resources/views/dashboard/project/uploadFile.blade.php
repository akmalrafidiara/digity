@php
    $page = 'project';
    $title = 'Create Project - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Upload File</h1>
        <p>For {{ $plan->title }}!</p>
    </div>
    <div class="btn-create">
        <a href="{{ url()->previous() }}"><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
    <div class="dashboard-container">
        <form action="{{ route('project.storeFile') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-field">
                        <label for="image">Upload File</label>
                        <div class="form-file">
                            <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                            <input type="file" name="image" id="image" class="file-final"
                                onchange="previewImage()">
                            <div class="image-preview">
                                <img src="" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="form-field form-submit">
                        <button type="submit" class="btn btn-submit btn-final disabled"><i class="fa-solid fa-upload"></i>
                            Upload
                            Final</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="card-final-view">
            {{-- <div class="card-final-item">
                <img src="/assets/img/digity-footer-ig2.png" alt="">
                <a href="#" class="btn-final-view"><i class="fa-solid fa-trash"></i></a>
            </div>
            <div class="card-final-item">
                <img src="/assets/img/digity-footer-ig3.png" alt="">
                <a href="#" class="btn-final-view"><i class="fa-solid fa-trash"></i></a>
            </div>
            <div class="card-final-item">
                <img src="/assets/img/digity-footer-ig1.png" alt="">
                <a href="#" class="btn-final-view"><i class="fa-solid fa-trash"></i></a>
            </div> --}}
            @foreach ($planImages as $planImage)
                <div class="card-final-item card-final-item-{{$planImage->id}}">
                    <img src="/assets/img/{{$planImage->image}}" alt="">
                    <button class="btn-final-view" onclick="deletePlanImage({{$planImage->id}})"><i class="fa-solid fa-trash"></i></button>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('script')
    <script>
        function deletePlanImage(plan_image_id) {
            $.ajax({
                type: "delete",
                url: '{{ route('project.deleteFile', $planImage->id) }}',
                data: {
                    _token: '{{ csrf_token() }}',
                    id: plan_image_id
                },
                success: function(response) {
                    if (response.isDeleted) {
                        $('.card-final-item-' + plan_image_id).remove();
                    }
                }
            });
        }
    </script>
@endsection
