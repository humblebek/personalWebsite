

@extends('admin.layouts.header')

@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="row vh-100  mx-0">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded p-4">
                <h6 class="mb-4 fs-1">Show Quote</h6>
                <dl>
                    <dt class="col-sm-4 fs-4">Section</dt>
                    <dd class="col-sm-8 fs-4">{{$quote->section}}</dd>

                    <dt class="col-sm-4 fs-4">Quote Uz</dt>
                    <dd class="col-sm-8 fs-4">{{$quote->quote_uz}}</dd>

                    <dt class="col-sm-4 fs-4">Quote En</dt>
                    <dd class="col-sm-8 fs-4">{{$quote->quote_en}}</dd>

                    <dt class="col-sm-4 fs-4">Quote Ru</dt>
                    <dd class="col-sm-8 fs-4">{{$quote->quote_ru}}</dd>

                </dl>
                 <button type="button" class="btn btn-success m-4"><a style="color: white" href="{{ route('quote.index') }}">Back</a></button>
            </div>
        </div>

@endsection
