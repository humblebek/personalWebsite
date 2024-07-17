
@extends('admin.layouts.header')

@section('content')
<!-- MAIN -->

    <div class="table-data" style="padding: 60px 40px;">
        <div class="order">
            <div class="head">
                <h2>Skill</h2>
                <button type="button" class="btn btn-outline-primary m-2"> <a href="{{route('skill.create')}}"><i class="fa fa-plus me-2"></i>Add</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Percentage</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skill as $item)
                    <tr>
                        <th scope="row">{{++$loop->index}}</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->percentage }}</td>
                        <td style="display: flex">
                            <button type="button" class="btn btn-square btn-success m-2"><a href="{{route('skill.show',$item->id)}}"><i class="fa fa-eye"style="color: white"></i></a></button>
                            <button type="button" class="btn btn-square btn-warning m-2"><a href="{{route('skill.edit',$item->id)}}"><i class="fa fa-edit" style="color: white"></i></a></button>
                            <form action="{{route('skill.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-square btn-danger m-2"><a href="{{route('skill.destroy',$item->id)}}"><i class="fa fa-trash"style="color: white"></i></a></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

<!-- MAIN -->

@endsection
