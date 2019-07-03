@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    @if ($is_image)
                        <figure class="text-center">
                            <img src="/storage/images/{{ Auth::id() }}.jpg" class="rounded-circle" width="100px" height="100px">
                        </figure>
                    @else
                        <div class="text-center"><img src="{{ asset('images/user.png') }}" alt="profile_img" style="height: 100px; width: 100px"></div>
                    @endif
                    <h3 class="text-center">{{ Auth()->user()->name }}</h3>
                    <div class="text-center"><a class="btn btn-primary" href="{{ route('user.edit', ['id'=> auth()->user()->id]) }}">Edit Profile</a></div>
                    <hr>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="text-center"><a href="">2</a></div>
                                <div class="text-center">followings</div>
                            </div>
                            <div class="col-sm-6">
                                <div class="text-center"><a href="">2</a></div>
                                <div class="text-center">followers</div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="text-center"><a href="">2</a></div>
                        <div class="text-center">words learnded</div>
                    </div>
                </div>
            </div>
            <br>
            <div>   
                <a href="{{ route('categories') }}" class="btn btn-primary btn-lg btn-block" role="button">Categories</a>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="card">
                <h3 class="card-header">Activity</h3>
                <div class="card-body">
                    <div>This is activity log.</div>
                </div>
            </div>
        </div>
   </div>
</div>
@endsection
