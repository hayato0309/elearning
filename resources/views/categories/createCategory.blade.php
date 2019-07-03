@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="">
                <h2>Create a new category</h2>
            </div>
            <div class="card p-2">
                <div class="container">
                    <form action="{{ route('store.category') }}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input name="category_name" type="text" class="form-control" id="" placeholder="Category Name">
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="mr-1"><button type="submit" class="btn btn-primary">Submit</button></div>
                                <a href="{{ route('categories') }}" class="btn btn-secondary" role="button">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        <div class="col-sm-2"></div>
    </div>
</div>
@endsection