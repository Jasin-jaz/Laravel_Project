@extends('backend.layouts.master')
@section('content')

    <div class="card" style="height: 100%">
        <div class="card-header font-weight-bold d-flex justify-content-between">
            <div class="text-dark">Page</div>
            <a href="{{route('backend.index')}}" class="text-dark"><i class="mdi mdi-arrow-left-drop-circle-outline "></i>&nbsp;Home</a>
        </div>
        <div class="card-body text-center">    
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allData as $key => $row)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$row->title}}</td>
                        <td>{{$row->description}}</td>
                        <td>
                            <a href="{{route('page.edit', $row -> id)}}" class="btn btn-info">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>
    </div>

@endsection