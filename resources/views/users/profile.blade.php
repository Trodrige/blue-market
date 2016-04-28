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
                            <div id="img"><img src="../../../uploads/images/{{$user->picture}}"
                                alt="Profile picture"width="100px" height="20px" class="img-responsive">
                            </div>
                            <a href="{{url('/user/edit')}}/{{$user->id}}">
                                <h5 style="text-align:center">Change profile picture</h5>
                            </a>
                        </div>
                        <div class="col-sm-10" id="credentials">
                            <a data-toggle="modal" data-target="#edit-profile" href="#" >Edit your profile</a>
                            <h5><b>Name</b>: {{$user->firstname}} {{$user->lastname}}</h5>
                            <h5><b>email</b>: {{$user->email }}</h5>
                            <h5><b>Location</b>: Buea, Cameroon</h5>
                            <h5><b>Picture</b>: {{$user->picture}}</h5>
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
<!--========================================================================================================== -->
<!-- Modal for editing user profile -->
<div class="modal fade" role="dialog" id="edit-profile">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong>Edit your profile</strong></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{url('/user/update')}}/{{$user->id}}">
                    <div class="form-group">
                        <label class="col-md-4 control-label">Picture</label>
                        <div class="col-md-6">
                            <input type="file" class="btn" name="picture">
                        </div>
                    </div>
                  <div class="form-group">
                    <label for="firstname" class="col-sm-2 control-label">Firstname: </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="firstname" name="firstname"
                        value="{{$user->firstname}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">Lastname: </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="lastname" name="lastname"
                        value="{{$user->lastname}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">email: </label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email"
                        value="{{$user->email}}">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-2">
                      <button type="submit" class="btn red-btn">
                          <i class="fa fa-btn fa-user"></i>Apply
                      </button>
                    </div>
                  </div>
                </form>
            </div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>
@endsection
