@php
    $page = 'project';
    $title = 'My Project - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Detail Project</h1>
        <p>{{ $project->name }}</p>
        <a href="#" class="btn btn-action"><i class="fa-solid fa-pen"></i> Edit This Project</a>
        @if ($session = Session::get('status'))
            <div class="print-status ">
                <p>{{ $session }}</p>
            </div>
        @endif
        <div class="page-title-note">
            <h3>Description</h3>
            <p>{!! $project->description !!}</p>
        </div>
        <div class="page-title-note">
            <h3>Note</h3>
            <p>{!! $project->note !!}</p>
        </div>
    </div>

    <div class="btn-create">
        <a href="{{ url()->previous() }}"><i class="fa-solid fa-arrow-left"></i> Back</a>
        @if (Auth()->user()->role_id == 1 || Auth()->user()->role_id == 2)
            <a href="../detail/{{ $project->id }}/create-plan"><i class="fa-solid fa-plus"></i> Create Plan</a>
        @endif
    </div>

    <div class="content-planner">
        @foreach ($plans as $plan)
            <div class="main-accordion">
                <div class="accordion detail-plan-{{ $plan->id }}">
                    <div class="accor-info">
                        <span>{{ $loop->iteration }}</span>
                        <span>{{ $plan->title }}</span>
                    </div>
                    <div>
                        <span>{{ $plan->status }}</span>
                    </div>
                </div>
                <div class="panel detail-plan-{{ $plan->id }}">
                    <div class="row">
                        <div class="col-6">
                            <div class="panel-item">
                                <h3>Type</h3>
                                <p>{{ $plan->type }}</p>
                            </div>
                            <div class="panel-item">
                                <h3>Upload Time</h3>
                                <p>{{ $plan->upload_time }}, {{ $plan->upload_date }}</p>
                            </div>
                            <div class="panel-item">
                                <h3>Detail</h3>
                                <p>{!! $plan->detail !!}</p>
                            </div>
                            <div class="panel-item">
                                <h3>Revision Note</h3>
                                <p>{!! $plan->revision !!}</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="panel-item">
                                <h3>Caption</h3>
                                <p>{!! $plan->caption !!}</p>
                            </div>
                            <div class="panel-item">
                                <h3>Hashtag</h3>
                                <p>{{ $plan->hashtag }}</p>
                            </div>
                            <div class="panel-item">
                                <h3 style="margin-bottom: 15px">Action</h3>
                                <a href="{{ route('project.edit-plan', $plan->id) }}" class="btn btn-action"><i
                                        class="fa-solid fa-pen"></i> Edit</a>
                                @if (Auth()->user()->role_id == 1 || Auth()->user()->role_id == 2)
                                    <button class="btn btn-action delete-{{ $plan->id }}"
                                        onclick="deleteProjectPlan({{ $plan->id }})"><i class="fa-solid fa-trash"></i>
                                        Delete</button>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            @if (Auth()->user()->role_id == 1 || Auth()->user()->role_id == 2)
                            <h3 class="h3-final">Final</h3>
                                <a href="{{ route('project.uploadFile', $plan->id) }}" class="btn btn-action-final"><i
                                        class="fa-solid fa-plus"></i>
                                    Add Final</a>
                            @endif

                            <div class="final-accor-img">
                                @foreach ($planImages as $planImage)
                                    @if ($planImage->project_plan_id == $plan->id)
                                        <img src="/assets/img/{{ $planImage->image }}" alt="">
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@if (count($plans) > 0)
    @section('script')
        <script>
            function deleteProjectPlan(plan_id) {
                $.ajax({
                    type: "delete",
                    url: '{{ route('project.delete-plan', $plan->id) }}',
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: plan_id
                    },
                    success: function(response) {
                        if (response.isDeleted) {
                            $('.detail-plan-' + plan_id).remove();
                        }
                    }
                });
            }
        </script>
    @endsection
@endif
