

@extends('admin.layouts.header')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row vh-100  mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded p-4">
                <h6 class="mb-4 fs-1">Show Service</h6>
                <dl>

                    <dt class="col-sm-4 fs-4">Name</dt>
                    <dd class="col-sm-8 fs-4">{{$service->name_uz}}</dd>

                    <dt class="col-sm-4 fs-4">Icon</dt>
                    <dd class="col-sm-8 fs-4">{{$service->icon}}</dd>

                </dl>
                 <button type="button" class="btn btn-success m-4"><a style="color: white" href="{{ route('service.index') }}">Back</a></button>
            </div>
        </div>

@endsection
