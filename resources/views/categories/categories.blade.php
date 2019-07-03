@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2>Categories</h2>
        @if (auth()->user()->is_admin !== 0)
            <div class="col text-right">
                <a href="{{ route('create.category') }}">Add a new category</a>
            </div>
        @else
        @endif
    </div>
    <div class="row">
        @foreach($categories as $category)
            <a href="#" class="text-decoration-none text-black">
                <div class="card mx-2 my-1" style="width: 22.5rem;">
                    <div class="card-body">
                        <h4 class="card-title">{{ $category->category_name }}</h4>
                        <p class="card-text">{{ $category->description }}</p>
                    </div>
                    <div class="d-flex align-items-end">
                        <div class="container">
                            <div class="row">
                                @if (auth()->user()->is_admin !== 0)
                                    <div class="col-sm-8">
                                        <a href="{{ route('edit.category', ['id' => $category->id]) }}" class="card-link">Edit</a>
                                        <a href="{{ route('destroy.category', ['id' => $category->id]) }}" class="card-link">Delete</a>
                                    </div>
                                @else
                                    <div class="col-sm-8"></div>
                                @endif
                                <div class="col-sm-4">
                                    @if ($category->difficulty_level === 1)
                                        <div class="text-center text-white bg-success rounded h5 p-1">Easy</div>
                                    @elseif ($category->difficulty_level === 2)
                                        <div class="text-center text-white bg-primary rounded h5 p-1">Normal</div>
                                    @else
                                        <div class="text-center text-white bg-danger rounded h5 p-1">Hard</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
        @empty($categories)
            <h3 class="text-center">No Categories</h3>
        @endempty
    </div>
</div>
@endsection