@extends('backend.layouts.master')
@section('content')

    <div class="card" style="height: 100%">
        <div class="card-header font-weight-bold">
            <div class="text-dark">Slider</div>
        </div>
        <div class="card-body text-center">    
            <a href="{{route('slider.create')}}" class="btn btn-info">Add New</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Heading Text</th>
                        <th>Small Text</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key => $row)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td><img src="{{asset('backend/img/slider/'.$row->image)}}"></td>
                        <td>{{$row->heading_text}}</td>
                        <td>{{$row->small_text}}<td>
                        <td>
                            <a href="" class="btn btn-info">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>
    </div>

@endsection