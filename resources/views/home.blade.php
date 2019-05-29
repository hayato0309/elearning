@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body">
                    <figure><img src="" alt="" class="rounded-circle" height="100px"></figure>
                    <h3 class="text-center">Hayato</h3>
                    <div class="text-center"><a class="btn btn-primary" href="">Edit Profile</a></div>
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
