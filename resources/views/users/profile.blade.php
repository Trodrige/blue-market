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
                            <div id="img"><img src="../../../uploads/images/{{$users->picture}}"
                                alt="Profile picture"width="100px" height="20px" class="img-responsive">
                            </div>
                            <!--<a href="{{url('/user/edit')}}/{{$users->firstname}}">
                                <h5 style="text-align:center">Change profile picture</h5>
                            </a> -->
                            <form class="form-horizontal" method="POST"
                                action="{{url('/user/edit')}}/{{$users->id}}">
                                <div class="form-group">
                                    <h4 style="text-align:center">Change picture</h4>
                                    <div class="col-md-6">
                                        <input type="file" class="" name="picture">
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-offset-2 col-sm-2" style="margin-left:-1px">
                                    <button type="submit" class="btn red-btn btn-sm">
                                        <i class="fa fa-btn fa-user"></i>Change
                                    </button>
                                  </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-10" id="credentials">
                            <a data-toggle="modal" data-target="#edit-profile" href="#" >Edit your profile</a>
                            <h5><b>Name</b>: {{$users->firstname}} {{$users->lastname}}</h5>
                            <h5><b>email</b>: {{$users->email }}</h5>
                            <h5><b>Location</b>: {{$users->location}}</h5>
                            <h5><b>Location</b> {{$users->picture}}</h5>
                        </div>
                    </div><br>

                    <div class="row" >
                        <div class="panel-section panel-default">
                            <div class="panel-heading" id="profile-header">My Posts</div>
                            <div class="panel panel-body" >
                                <article>
                                    <p class="lead">OOP and design pattern in PHP 5</p>
                                        This can be solved by defining, withing your
                                    class, a static functiongetInstance() which
                                    creates and stores an object instance in a private
                                    member of the class on it's first call while
                                    subsequent call returns this unique instance.<br>
                                        This can be solved by defining, withing your
                                    class, a static functiongetInstance() which
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
                <h4 class="modal-title"><strong>Edit your profile<strong></h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{url('/user/update')}}/{{$users->id}}">
                  <div class="form-group">
                    <label for="firstname" class="col-sm-2 control-label">Firstname: </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="firstname" name="firstname">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">Lastname: </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="lastname" name="lastname">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">email: </label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="location" class="col-sm-2 control-label">Location:</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="location" name="location">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-2">
                      <button type="submit" class="btn red-btn"><i class="fa fa-btn fa-user"></i>Apply
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
