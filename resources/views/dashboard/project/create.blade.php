@php
    $page = 'project';
    $title = 'Create Project - Digity';
@endphp
@extends('layouts.dashboard')
@section('content')
    <div class="page-title">
        <h1>Create Project</h1>
        <p>Create Digity Project!</p>
    </div>
    <div class="btn-create">
        <a href="../project"><i class="fa-solid fa-arrow-left"></i> Back</a>
    </div>
    <div class="dashboard-container">
        <form action="" method="POST">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-field">
                        <label for="name">Project Name</label>
                        <input type="text" name="name" id="name" placeholder="name Name">
                    </div>
                    <div class="form-field">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description"></textarea>
                    </div>
                    <div class="form-field">
                        <label for="note">Note</label>
                        <textarea name="note" id="note" cols="30" rows="10" placeholder="Note"></textarea>
                    </div>

                </div>
                <div class="col-6">
                    <div class="form-field">
                        <label for="stakeholder">Stakeholder</label>
                        <select name="stakeholder" id="stakeholder">
                            <option value="" selected disabled>Select stakeholder</option>
                            {{-- client --}}
                            <option value="1">Akmal</option>
                            <option value="1">Fathan</option>
                            <option value="1">Aqmal</option>
                            <option value="1">Roro</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="PIC">PIC Project</label>
                        <select name="PIC" id="PIC">
                            <option value="" selected disabled>Select staff</option>
                            {{-- to staff / designer --}}
                            <option value="1">Akmal</option>
                            <option value="1">Fathan</option>
                            <option value="1">Aqmal</option>
                            <option value="1">Roro</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="date-start">Date Start</label>
                        <input type="date" name="date-start" id="date-start">
                    </div>
                    <div class="form-field">
                        <label for="date-end">Estimate Date End (optional)</label>
                        <input type="date" name="date-end" id="date-end">
                    </div>
                    <div class="form-field">
                        <label for="service">Relate with service</label>
                        <select name="service" id="service">
                            <option value="" selected disabled>Select service</option>
                            {{-- to staff / designer --}}
                            <option value="1">No Sevice</option>
                            <option value="1">12 Feed Insagram</option>
                            <option value="1">Banner</option>
                            <option value="1">Logo Design</option>
                        </select>
                    </div>
                    <div class="form-field">
                        <label for="status">Status</label>
                        <select name="status" id="status">
                            <option value="" selected disabled>Select Status</option>
                            <option value="1">Queue</option>
                            <option value="1">Preparation</option>
                            <option value="1">On Progress</option>
                            <option value="1">Done</option>
                            <option value="0">Not Available</option>
                        </select>
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
        CKEDITOR.replace('description');
        CKEDITOR.replace('note');
    </script>
@endsection
