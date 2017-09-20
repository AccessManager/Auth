<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Access Manager | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
{!! HTML::style('assets/css/bootstrap-3.3.7.min.css') !!}
<!-- Font Awesome -->
{!! HTML::style('assets/css/font-awesome-4.7.0.min.css') !!}
<!-- Theme style -->
{!! HTML::style('assets/css/AdminLT.min.css') !!}

{!! HTML::style('assets/icheck/skins/all.css') !!}

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        Admin Console
        {{-- <a href="../../index2.html"><b>Admin</b>LTE</a> --}}
    </div><!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        {!! Form::open(['route'=>'login.post']) !!}
        <div class="form-group has-feedback">
            {!! Form::text('username', null, ['class'=>'form-control','placeholder'=>'email address']) !!}
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            <span class="text-danger">
                  {{$errors->first('username')}}
              </span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            <span class="text-danger">
                  {{$errors->first('password')}}
              </span>
        </div>
        <div class="row">
            <div class="col-xs-8">
                <div class="checkbox icheck">
                    <label>
                        <input name="remember" type="checkbox"> Remember Me
                    </label>
                </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
        </div>
        {!! Form::close() !!}
        {{$errors->first('status')}}
    </div><!-- /.login-box-body -->
</div><!-- /.login-box -->
<!-- jQuery 2.1.4 -->
{!! HTML::script('assets/js/jQuery-3.2.1.min.js') !!}
<!-- Bootstrap 3.3.5 -->
{!! HTML::script('assets/js/bootstrap-3.3.7.min.js') !!}
<!-- iCheck -->
{!! HTML::script('assets/icheck/icheck.min.js') !!}
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>
