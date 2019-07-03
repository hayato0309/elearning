@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 card border border-0 p-3">
            <h3>Edit Profile</h3>
            <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    @if ($is_image)
                        <figure>
                            <img src="/storage/images/{{ Auth::id() }}.jpg" class="rounded-circle" width="100px" height="100px">
                        </figure>
                    @else
                        <div><img src="{{ asset('images/user.png') }}" alt="profile_img" style="height: 100px; width: 100px"></div>
                    @endif
                    <p>Current Profile Photo</p>
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="photo" id="">
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control {{ $errors->has('name') ? 'has-danger' : '' }}" name="name" id="name" value="{{ auth()->user()->name }}" required>
                        @if($errors->has('name'))
                            <p class="text-danger">{{ $errors->first('name')}}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="text" class="form-control {{ $errors->has('email') ? 'has-danger' : '' }}" name="email" id="email" value="{{ auth()->user()->email }}" required>
                        @if($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email')}}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password">New Password</label>
                        <input type="password" class="form-control {{ $errors->has('password') ? 'has-danger' : '' }}" name="password" id="password" required>
                        @if($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password')}}</p>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" class="form-control {{ $errors->has('password_confirmation') ? 'has-danger' : '' }}" name="password_confirmation" id="password_confirmation" required>
                        @if($errors->has('password_confirmation'))
                            <p class="text-danger">{{ $errors->first('password_confirmation')}}</p>
                        @endif
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ URL::previous() }}" class="btn btn-secondary">Back</a>    
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>
@endsection