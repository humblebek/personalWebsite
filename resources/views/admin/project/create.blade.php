
@extends('admin.layouts.header')
@section('content')
<div class="container-fluid pt-4 px-4 " >
    <div class="row  bg-white rounded  mx-0">
        <div class="container-fluid pt-4 px-4">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-6 "  >
                    <form action={{route('projects.store')}}  method="POST"  enctype="multipart/form-data">
                        @csrf
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4 fs-2"> Add a Project</h6>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Name</label>
                            <input class="form-control" type="text"  name="name">
                        </div>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Link</label>
                            <input class="form-control" type="text"  name="link">
                        </div>
                        <div class="mb-3">
                            <label for="formFileSm" class="form-label">Photo</label>
                            <input class="form-control " type="text" name="photo">
                        </div>

                        <button type="submit" class="btn btn-primary rounded-pill  m-2">Send</button>
                        <button type="button" class="btn btn-success m-2"><a style="color: white;" href="{{route('projects.index')}}">Back</a></button>
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection


