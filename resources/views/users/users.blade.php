@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
            <h3>User List</h3>
            @foreach($users as $user)
                <div class="card py-1 mb-2">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-sm-1">
                                @if ($user->photo !== "public/images/user.png")
                                    <img src="/storage/images/{{ $user->id }}.jpg" alt="profile" height="50px" width="50px">
                                @else
                                    <img src="{{ asset('images/user.png') }}" alt="profile_img" style="height: 50px; width: 50px">
                                @endif
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">{{ $user->name }}</div>
                            </div>
                            <div class="col-sm-5">
                                <div class="float-right">
                                    <div class="float-left mr-1"><a class="btn btn-primary" href="">Follow</a></div>
                                    <div class="float-left mr-1"><a class="btn btn-info text-white" href="">Admin</a></div>
                                    <div class="float-left mr-1"><a class="btn btn-secondary" href="{{ route('user.delete', ['id' => $user->id]) }}">Delete</a></div>
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