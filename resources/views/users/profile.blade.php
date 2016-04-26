@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" id="profile-header">My Profile</div>

                <div class="panel-body">
                    <div class="row" id="row1">
                        <div class="col-sm-4">
                            <img src="../../../uploads/images/{{$user->picture}}" alt="Profile picture"
                                 width="100px" height="20px" class="img-responsive">
                            <a href="{{url('/user/edit')}}/{{$user->firstname}}">Change profile picture</a>
                        </div>
                        <div class="col-sm-8" id="credentials">
                            <h5><b>Name</b>: {{$user->firstname}} {{$user->lastname}}</h5>
                            <h5><b>email</b>: {{$user->email }}</h5>
                            <h5><b>Location</b>: Buea, Cameroon</h5>
                            <h5><b>Location</b> {{$user->picture}}</h5>
                        </div>
                    </div><br>

                    <div class="row2">

                        <h5 class="lead" id="personal-info">Posts</h5>
                        <h4>Display posts here</h4>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
