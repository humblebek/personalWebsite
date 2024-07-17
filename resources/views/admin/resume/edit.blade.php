
@extends('admin.layouts.header')

@section('content')
<div class="container-fluid pt-4 px-4 " >
    <div class="row  bg-white rounded  mx-0">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6 "  >
                    <form action="{{route('resume.update',$resume->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4 fs-2"> Edit a Resume</h6>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Year</label>
                            <input class="form-control " type="text" name="date" value="{{$resume->date}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Title UZ</label>
                            <input class="form-control" type="text"  name="title_uz" value="{{$resume->title_uz}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Title EN</label>
                            <input class="form-control" type="text"  name="title_en" value="{{$resume->title_en}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Title RU</label>
                            <input class="form-control" type="text"  name="title_ru" value="{{$resume->title_ru}}">
                        </div>

                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Adress UZ</label>
                            <input class="form-control" type="text"  name="adress_uz" value="{{$resume->adress_uz}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Adress EN</label>
                            <input class="form-control" type="text"  name="adress_en" value="{{$resume->adress_en}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Adress RU</label>
                            <input class="form-control" type="text"  name="adress_ru" value="{{$resume->adress_ru}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Paragraph UZ</label>
                            <input class="form-control" type="text"  name="paragraph_uz" value="{{$resume->paragraph_uz}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Paragraph EN</label>
                            <input class="form-control" type="text"  name="paragraph_en" value="{{$resume->paragraph_en}}">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Paragraph RU</label>
                            <input class="form-control" type="text"  name="paragraph_ru" value="{{$resume->paragraph_ru}}">
                        </div>

                        <button type="submit" class="btn btn-primary rounded-pill m-2">Send</button>
                        <button type="button" class="btn btn-success m-2"><a style="color: white;" href="{{ route('resume.index') }}">Back</a></button>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection



