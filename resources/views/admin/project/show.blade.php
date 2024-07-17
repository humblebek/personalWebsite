

@extends('admin.layouts.header')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row vh-100  mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded p-4">
                <h6 class="mb-4 fs-1">Show Projects</h6>
                <dl>

                    <dt class="col-sm-4 fs-4">Name</dt>
                    <dd class="col-sm-8 fs-4">{{$project->name}}</dd>

                    <dt class="col-sm-4 fs-4">Link</dt>
                    <dd class="col-sm-8 fs-4">{{$project->link}}</dd>

                    <dt class="col-sm-4 fs-4">Photo</dt>
                    <dd class="col-sm-8 fs-4">{{$project->photo}}</dd>

                </dl>
                 <button type="button" class="btn btn-success m-4"><a style="color: white" href="{{ route('projects.index') }}">Back</a></button>
            </div>
        </div>

@endsection
