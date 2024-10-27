@extends('backend.layouts.master')
@section('content')

    <div class="card" style="height:100%">
        <div class="card-body text-center">
        <h4 class="card-title">Setting</h4>       
        <form class="forms-sample" method="POST" action="{{ route('setting.update') }}" enctype="multipart/form-data">@csrf
            <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label text-dark">Heading Text</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="name" name="site_name">
            </div>
            </div>
            <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-dark">Small Text</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email" name="email">
            </div>
            </div>
            <div class="form-group row">
            <label for="logo" class="col-sm-3 col-form-label text-dark">Slider Image</label>
            <div class="col-sm-8">
                <input type="file" class="form-control" id="logo" name="logo">
            </div>
            </div>          
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <!-- <button class="btn btn-light">Cancel</button> -->
        </form>
        </div>
    </div>

@endsection