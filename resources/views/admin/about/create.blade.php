
@extends('admin.layouts.header')
@section('content')
<div class="container-fluid pt-4 px-4 " >
    <div class="row  bg-white rounded  mx-0">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6 "  >
                    <form action={{route('about.store')}}  method="POST"  enctype="multipart/form-data">
                        @csrf
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4 fs-2"> Add an About</h6>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Name UZ</label>
                            <input class="form-control" type="text"  name="name_uz">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Name EN</label>
                            <input class="form-control" type="text"  name="name_en">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Name RU</label>
                            <input class="form-control" type="text"  name="name_ru">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Date of Birth</label>
                            <input class="form-control " type="date" name="date">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Adress UZ</label>
                            <input class="form-control" type="text"  name="adress_uz">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Adress EN</label>
                            <input class="form-control" type="text"  name="adress_en">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Adress RU</label>
                            <input class="form-control" type="text"  name="adress_ru">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Email</label>
                            <input class="form-control " type="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Phone</label>
                            <input class="form-control " type="text" name="phone">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Education UZ</label>
                            <input class="form-control" type="text"  name="education_uz">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Education EN</label>
                            <input class="form-control" type="text"  name="education_en">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Education RU</label>
                            <input class="form-control" type="text"  name="education_ru">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Website</label>
                            <input class="form-control " type="text" name="website">
                        </div>
                        <button type="submit" class="btn btn-primary rounded-pill  m-2">Send</button>
                        <button type="button" class="btn btn-success m-2"><a style="color: white;" href="{{route('about.index')}}">Back</a></button>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


