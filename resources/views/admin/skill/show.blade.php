

@extends('admin.layouts.header')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row vh-100  mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded p-4">
                <h6 class="mb-4 fs-1">Show skill</h6>
                <dl>
                    <dt class="col-sm-4 fs-4">Name</dt>
                    <dd class="col-sm-8 fs-4">{{$skill->name}}</dd>

                    <dt class="col-sm-4 fs-4">Percentage</dt>
                    <dd class="col-sm-8 fs-4">{{$skill->percentage}}</dd>
                </dl>
                 <button type="button" class="btn btn-success m-4"><a style="color: white" href="{{ route('skill.index') }}">Back</a></button>
            </div>
        </div>

@endsection
