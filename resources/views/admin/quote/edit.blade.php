
@extends('admin.layouts.header')

@section('content')
<div class="container-fluid pt-4 px-4 " >
    <div class="row  bg-white rounded  mx-0">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6 "  >
                    <form action="{{route('quote.update',$quote->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4 fs-2"> Edit a Quote</h6>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Section</label>
                            <input class="form-control" type="text"  name="section" value="{{$quote->section}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Quote UZ</label>
                            <input class="form-control" type="text"  name="quote_uz" value="{{$quote->quote_uz}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Quote EN</label>
                            <input class="form-control" type="text"  name="quote_en" value="{{$quote->quote_en}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Quote RU</label>
                            <input class="form-control" type="text"  name="quote_ru" value="{{$quote->quote_ru}}">
                        </div>


                        <button type="submit" class="btn btn-primary rounded-pill m-2">Send</button>
                        <button type="button" class="btn btn-success m-2"><a style="color: white;" href="{{ route('quote.index') }}">Back</a></button>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection



