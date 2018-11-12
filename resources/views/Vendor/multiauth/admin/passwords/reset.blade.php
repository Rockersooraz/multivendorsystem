<html>
<head>

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
</head>
<body id="LoginForm">
    <div class="container">
        <h1 class="form-heading">Create your New password </h1>
        <div class="login-form">
            <div class="main-div">
                <div class="panel">
                 <h2>Admin password reset</h2>
                 <p>Please enter your valid email</p>
             </div>

             <div class="container">
                <form id="Login" method="POST" action="{{ route('admin.password.request') }}" aria-label="{{ __('Admin Reset Password') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group">


                        <input type="email" id="inputEmail" placeholder="Email Address" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}"
                        required autofocus>@if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span> @endif

                    </div>

                    <div class="form-group">

                        <input type="password"  id="inputPassword" placeholder="Password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                        required> @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span> @endif

                    </div>

                    <div class="form-group">

                        <input type="password"  id="inputPassword" class="form-control" placeholder="Password" name="password_confirmation" required> 

                    </div>

                 <button type="submit" class="btn btn-primary">{{ __('Reset Password') }}</button>

                </form>
            </div>
        </div>
    </div>
</div>


