@extends('backend.layouts.master')
@section('content')

<div class="card" style="height: 100%">
    <div class="card-header font-weight-bold d-flex justify-content-between">
        <div class="text-dark">Edit Page</div>
        <a href="{{route('page.index')}}" class="text-dark"><i class="mdi mdi-arrow-left-drop-circle-outline "></i>&nbsp;Back</a>
    </div>
    <div class="card-body text-center">    
        <form method="post" action="{{route('page.update', $editData->id)}}">@csrf
            <div class="form-group d-flex">
                <label for="title" class="col-sm-3 col-form-label text-dark">Title</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control placeholder" id="title" name="title" placeholder="Enter title here" value="{{$editData->title}}">
                </div>
            </div>
            <div class="form-group d-flex">
                <label for="type" class="col-sm-3 col-form-label text-dark">Type</label>
                <div class="col-sm-8">
                    <select class="form-control" name="type">
                        <!-- <option value="choose" selected disabled hidden>-Choose type-</option> -->
                        <option value="about-us" @if($editData->type == 'about-us') selected @endif >About Us</option>
                        <option value="contact-us" @if($editData->type == 'contact-us') selected @endif >Contact Us</option>
                    </select>
                </div>
            </div>
            <div class="form-group d-flex">
                <label for="description" class="col-sm-3 col-form-label text-dark">Description</label>
                <div class="col-sm-8">
                    <textarea class="form-control placeholder" id="summernote" name="description" rows="5" placeholder="Enter description  here">{{$editData->description}}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('page.index')}}" class="btn btn-light">Cancel</a>
        </form>
    </div>
</div>

@endsection