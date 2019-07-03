@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Categories</h2>
        <div class="col text-right">
            <a href="{{ route('create.category') }}">Add a new category</a>
        </div>
    </div>
    <div class="row">
        @foreach($categories as $category)
            <div class="card mx-2 my-1" style="width: 22.5rem;">
                <div class="card-body">
                    <h4 class="card-title">{{ $category->category_name }}</h4>
                    <p class="card-text">{{ $category->description }}</p>
                </div>
                <div class="d-flex align-items-end m-3">
                    <a href="{{ route('edit.category', ['id' => $category->id]) }}" class="card-link">Edit</a>
                    <a href="{{ route('destroy.category', ['id' => $category->id]) }}" class="card-link">Delete</a>
                </div>
            </div>
        @endforeach
        @empty($categories)
            <h3 class="text-center">No Categories</h3>
        @endempty
    </div>
</div>
@endsection