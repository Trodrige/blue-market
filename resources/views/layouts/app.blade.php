<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BlueMarket</title>

    <!-- Fonts
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    -->
    <!-- Styles -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <style>
        body {
            font-family: 'AquaBase';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <div class="white-bar"></div>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container head">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" style="color: white;" href="{{ url('/') }}">
                    RedMarket
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav" >
                    <li><a  style="color: white;" href="{{ url('/home') }}">Home</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a style="color: white;" href="" data-toggle="modal" data-target="#login">Login</a></li>
                        <li><a style="color: white;" href="" data-toggle="modal" data-target="#signup">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

        <!-- Modal for signup
        ========================================================================-->
        <div class="modal fade" id="signup" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title col-sm-offset-4 col-sm-4"><strong>SignUp</strong></h4>
                <div class="col-sm-offset-4"></div>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" action="{{ url('create/store') }}" method="post">
                  <div class="form-group" >
                    <label for="username" class="col-sm-2 control-label">Username: </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                  </div>
                  <div class="form-group" >
                    <label for="first_name" class="col-sm-2 control-label">Firstname: </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                  </div>
                  <div class="form-group" >
                    <label for="last_name" class="col-sm-2 control-label">Lastname: </label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                  </div>
                  <div class="form-group" >
                    <label for="password" class="col-sm-2 control-label">Password: </label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                  </div>
                  <div class="form-group" >
                    <label for="confirmaton" class="col-sm-2 control-label">Confirm password: </label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="confirmation" name="confirmation" required>
                    </div>
                  </div>
                  <div class="form-group" >
                    <label for="email" class="col-sm-2 control-label">Email: </label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-2">
                      <button type="submit" class="btn btn-default red-btn">signup</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <p>Already have account? <a data-dismiss="modal" data-toggle="modal" data-target="#login">Login here</a>
              </div>
            </div>

          </div>
        </div>

        <!-- Modal for login
        =============================================================================-->
        <div class="modal fade" id="login" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
              </div>
              <div class="modal-body">
                <!-- login form -->
                <form class="form-horizontal" method="POST" action="{{url('/auth/login')}}">
                  <div class="form-group">
                    <label for="email_login" class="col-sm-2 control-label">Email: </label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="email_login" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password_login" class="col-sm-2 control-label">Password: </label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="password_login" name="password">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-2">
                      <button type="submit" class="btn btn-default red-btn"><i class="fa fa-btn fa-user"></i>Login</button>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <p>Don't have account? <a data-toggle="modal" data-dismiss="modal" data-target="#signup">Sign up here</a></p>
              </div>
            </div>

          </div>
        </div>

    @yield('content')


</body>
</html>
