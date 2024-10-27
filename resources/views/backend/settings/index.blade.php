@extends('backend.layouts.master')
@section('content')

    <div class="card">
        <div class="card-header font-weight-bold">
            <div class="text-dark">Setting</div>
        </div>
        <div class="card-body text-center">
        <form class="forms-sample" method="POST" action="{{ route('setting.update') }}" enctype="multipart/form-data">@csrf
            <div class="form-group row">
            <label for="name" class="col-sm-3 col-form-label text-dark">Site Name</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="name" name="site_name" value="{{$setting->site_name}}">
            </div>
            </div>
            <div class="form-group row">
            <label for="email" class="col-sm-3 col-form-label text-dark">Email</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" id="email" name="email" value="{{$setting->email}}">
            </div>
            </div>
            <div class="form-group row">
            <label for="mobile" class="col-sm-3 col-form-label text-dark">Mobile</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="mobile" name="mobile" value="{{$setting->mobile}}">
            </div>
            </div>
            <div class="form-group row">
            <label for="address" class="col-sm-3 col-form-label text-dark">Address</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="address" name="address" value="{{$setting->address}}">
            </div>
            </div>
            <div class="form-group row">
            <label for="linkedin" class="col-sm-3 col-form-label text-dark">Linkedin</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$setting->linkedin}}">
            </div>
            </div>
            <div class="form-group row">
            <label for="facebook" class="col-sm-3 col-form-label text-dark">Facebook</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="facebook" name="facebook" value="{{$setting->facebook}}">
            </div>
            </div>
            <div class="form-group row">
            <label for="twitter" class="col-sm-3 col-form-label text-dark">Twitter</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="twitter" name="twitter" value="{{$setting->twitter}}">
            </div>
            </div>  
            <div class="form-group row">
            <label for="logo" class="col-sm-3 col-form-label text-dark">Logo</label>
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