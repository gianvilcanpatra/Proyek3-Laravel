<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in (v2)</title>


<link rel="stylesheet" href="{{ asset('css/login.css') }}">
  
  
  
</head>
<body class="hold-transition login-page">

<div class="container">
 <div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="form">
    <div class="card-body">
      <p class="login-box-msg">REGISTER</p>
      

      <form action="/registeruser" method="post">
      @csrf
        <div class="input-group mb-3">
            <input type="text" name="name" class="form-control" placeholder="Name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
                
              </div>
            </div>
          </div>
        <div class="input-group mb-3" style="margin-top: 10px;">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          
          <div class="input-group mb-3" style="margin-top: 10px;"> <!-- Atur margin-top sesuai keinginan Anda -->
            <input type="password" name="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
                <span class="fas fa-envelope"></span>
              </div>
            </div>

            <div class="input-group mb-3" style="margin-top: 10px;"> <!-- Atur margin-top sesuai keinginan Anda -->
                <input type="password" name="password" class="form-control" placeholder="Confirm password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
        
          

  </div>
  <div class="col-4">
    <div class="signin-container">
      <button type="submit" class="btn btn-primary btn-block">Sign In</button>
      <p class="signup-link">
        <a href="/login">login</a>
      </p>
    </div>
  </div>
</div>
        </div>
      </form>
     
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
  </div>
</div>
</div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
