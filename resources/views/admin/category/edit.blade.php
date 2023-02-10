@extends('layouts.admin')

@section('content')
<div class="card-header">
    <h3>Edit/Update  Category</h3>
</div>
<div class="card">
    <div class="card-body">
        <form action="{{ url('update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6 mb-3" >
                    <label for="">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$category->name}}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">slug</label>
                    <input type="text" class="form-control" name="slug" value="{{$category->slug}}">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">description</label>
                    <textarea name="description" id="" rows="3" class="form-control">{{$category->name}}</textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">Status</label>
                    <input type="checkbox"  name="status" {{ $category->status ? 'checked':'' }}>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="">popular</label>
                    <input type="checkbox"  name="popular" {{ $category->popular ? 'checked':'' }}>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta title</label>
                    <input type="text" class="form-control" value="{{$category->meta_title}}"" name="meta_title">
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" id="" rows="3" class="form-control"> {{$category->meta_keywords}}</textarea>
                </div>
                <div class="col-md-12 mb-3">
                    <label for="">Meta Description</label>
                    <textarea name="meta_desc" id="" rows="3" class="form-control">{{$category->meta_desc}}</textarea>
                </div>
                @if($category->image)
                    <img src="{{ asset('assets/uploads/category/'.$category->image)}}" alt="" class="img-cat">
                @endif
                <div class="col-md-12 ">
                  <input type="file" name="image" >
                </div>
                <div class="col-md-12 ">
                    <input type="submit" class="btn btn-primary">
                </div>

            </div>
        </form>
    </div>
</div>

@endsection