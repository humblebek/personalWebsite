

@extends('admin.layouts.header')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row vh-100  mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded p-4">
                <h6 class="mb-4 fs-1">Show Admin</h6>
                <dl>
                    <dt class="col-sm-4 fs-4">Name</dt>
                    <dd class="col-sm-8 fs-4">{{$about->name_uz}}</dd>

                    <dt class="col-sm-4 fs-4">Date of birth</dt>
                    <dd class="col-sm-8 fs-4">{{$about->date}}</dd>

                    <dt class="col-sm-4 fs-4">Email</dt>
                    <dd class="col-sm-8 fs-4">{{$about->email}}</dd>

                    <dt class="col-sm-4 fs-4">Phone</dt>
                    <dd class="col-sm-2 fs-4"> {{$about->phone}}</dd>

                    <dt class="col-sm-4 fs-4">Education</dt>
                    <dd class="col-sm-2 fs-4"> {{$about->education_uz}}</dd>

                    <dt class="col-sm-4 fs-4">Website</dt>
                    <dd class="col-sm-2 fs-4"> {{$about->website}}</dd>

                </dl>
                 <button type="button" class="btn btn-success m-4"><a style="color: white" href="{{ route('about.index') }}">Back</a></button>
            </div>
        </div>

@endsection
