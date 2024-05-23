<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/dist/css/AdminLTE.min.css')}}">
</head>
<body class="hold-transition login-page">

<div class="login-box">
  <div class="login-logo">
    <a><b>Penggajian</b></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login</p>
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $item)
                <li> {{ $item }} </li>
            @endforeach
          </ul>
        </div>
      
      @endif
    <form action="" method="post">
      @csrf
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email" id="email" value="{{ old('email')}}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password" id="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8"></div>
        <div class="col-xs-4">
            <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Login</button>
        </div>
      </div>
    </form>
    <a href=" {{route('register')}} ">Registrasi akun</a>
  </div>
</div>

</body>
</html>