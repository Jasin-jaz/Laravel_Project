@extends('backend.layouts.master')
@section('content')

    <div class="card" style="height:100%">
        <div class="card-header font-weight-bold d-flex justify-content-between">
            <div class="text-dark">Slider Update</div>
            <a href="{{route('slider.index')}}" class="text-dark"><i class="mdi mdi-arrow-left-drop-circle-outline "></i>&nbsp;Back</a>
        </div>
        <div class="card-body text-center">    
        <form class="forms-sample" method="POST" action="{{ route('slider.update', $editData->id) }}" enctype="multipart/form-data">@csrf
            <div class="form-group row">
            <label for="heading" class="col-sm-3 col-form-label text-dark">Heading Text</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="heading" name="heading" value="{{$editData->heading}}">
            </div>
            </div>
            <div class="form-group row">
            <label for="small_text" class="col-sm-3 col-form-label text-dark">Small Text</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="small_text" name="small_text" value="{{$editData->small_text}}">
            </div>
            </div>
            <div class="form-group row">
            <label for="button_text" class="col-sm-3 col-form-label text-dark">Button</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="button_text" name="button_text" value="{{$editData->button_text}}">
            </div>
            </div>
            <div class="form-group row">
            <label for="image" class="col-sm-3 col-form-label text-dark">Current Slider Image</label>
            <div class="col-sm-8">
                <img src="{{asset('backend/img/slider/'.$editData->image)}}" width="200px">
            </div>
            </div>    
            <div class="form-group row">
            <label for="image" class="col-sm-3 col-form-label text-dark">Slider Image</label>
            <div class="col-sm-8">
                <input type="file" class="form-control" id="image" name="image">
            </div>
            </div>          
            <button type="submit" class="btn btn-primary mr-2">Update</button>
            <!-- <button class="btn btn-light">Cancel</button> -->
        </form>
        </div>
    </div>

@endsection