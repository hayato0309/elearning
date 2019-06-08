@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
            @foreach($users as $user)
                <div class="card">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-1"><img src="{{ asset('images/dog.png') }}" alt="profile" height="50px"></div>
                            <div class="col-sm-8">{{ $user->name }}</div>
                            <div class="col-sm-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-6"><a class="btn btn-primary" href="">Follow</a></div>
                                        <div class="col-sm-6"><a class="btn btn-secondary" href="">Admin</a></div>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            @empty($user)
                <h3 class="text-center">No other users</h3>
            @endempty
            </div>
            <div class="col-sm-1"></div>
        </div>
    </div>
@endsection