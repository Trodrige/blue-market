@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" id="profile-header">My Profile</div>

                <div class="panel-body">
                    <div class="row" id="row1">
                        <div class="col-sm-2">
                            <div id="img"><img src="../../../uploads/images/{{$user->picture}}" alt="Profile picture"
                                 width="100px" height="20px" class="img-responsive">
                            </div>
                            <a href="{{url('/user/edit')}}/{{$user->firstname}}">
                                <h5 style="text-align:center">Change profile picture</h5>
                            </a>
                        </div>
                        <div class="col-sm-10" id="credentials">
                            <h5><b>Name</b>: {{$user->firstname}} {{$user->lastname}}</h5>
                            <h5><b>email</b>: {{$user->email }}</h5>
                            <h5><b>Location</b>: Buea, Cameroon</h5>
                            <h5><b>Location</b> {{$user->picture}}</h5>
                        </div>
                    </div><br>

                    <div class="row" >
                        <div class="panel-section panel-default">
                            <div class="panel-heading" id="profile-header">My Posts</div>
                            <div class="panel panel-body" >
                                <article>
                                    <p class="lead">OOP and design pattern in PHP 5</p>
                                        This can be solved by defining, withing your
                                    class, a static function
                                    getInstance() which
                                    creates and stores an object instance in a private
                                    member of the class on it's first call while
                                    subsequent call returns this unique instance
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
