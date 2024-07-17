
@extends('admin.layouts.header')

@section('content')
<div class="container-fluid pt-4 px-4 " >
    <div class="row  bg-white rounded  mx-0">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6 "  >
                    <form action="{{route('statistic.update',$statistic->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4 fs-2"> Edit a Statistic</h6>

                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Name UZ</label>
                            <input class="form-control" type="text"  name="name_uz" value="{{$statistic->name_uz}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Name EN</label>
                            <input class="form-control" type="text"  name="name_en" value="{{$statistic->name_en}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Name RU</label>
                            <input class="form-control" type="text"  name="name_ru" value="{{$statistic->name_ru}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Number</label>
                            <input class="form-control" type="number"  name="number" value="{{$statistic->number}}">
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill m-2">Send</button>
                        <button type="button" class="btn btn-success m-2"><a style="color: white;" href="{{ route('statistic.index') }}">Back</a></button>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection



