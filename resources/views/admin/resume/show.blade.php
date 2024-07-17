

@extends('admin.layouts.header')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row vh-100  mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded p-4">
                <h6 class="mb-4 fs-1">Show Resume</h6>
                <dl>
                    <dt class="col-sm-4 fs-4">Title</dt>
                    <dd class="col-sm-8 fs-4">{{$resume->title_uz}}</dd>

                    <dt class="col-sm-4 fs-4">Year</dt>
                    <dd class="col-sm-8 fs-4">{{$resume->date}}</dd>

                    <dt class="col-sm-4 fs-4">Adress</dt>
                    <dd class="col-sm-8 fs-4">{{$resume->adress_uz}}</dd>

                    <dt class="col-sm-4 fs-4">Paragraph</dt>
                    <dd class="col-sm-2 fs-4"> {{$resume->paragraph_uz}}</dd>

                </dl>
                 <button type="button" class="btn btn-success m-4"><a style="color: white" href="{{ route('resume.index') }}">Back</a></button>
            </div>
        </div>

@endsection
