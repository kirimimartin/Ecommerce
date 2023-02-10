@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Product Category</h4>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <th>id</th>
                <th>Name</th>
                <th>Description</th>
                <th>image</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($category as $item)
                    <tr>
                        <td>{{ $item->id}}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->description}}</td>
                        <td>
                            <img src="{{ asset('assets/uploads/category/'.$item->image) }}" class="cat-img" alt="image here">
                        </td>
                        <td>
                            <a href="{{ url('edit-prod/'.$item->id)}}" class="btn btn-sm btn-primary">Edit</a>
                            <a href="{{ url('delete-category/'.$item->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>

@endsection