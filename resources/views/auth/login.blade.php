<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
    <link href="https://demo.dashboardpack.com/architectui-html-free/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/original-quality-demo" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/metisMenu/3.0.7/metisMenu.min.js" rel="stylesheet">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="hold-transition login-page">
                <div class="login-box">
                    
                    <!-- /.login-logo -->
                    <div class="card">
                        <div class="login-logo text-center">
                            <a href="../../index2.html" class="" style="text-decoration: none; font-size:1.7rem"><b>Login</b>From</a>
                        </div>
                    <div class="card-body login-card-body">
                        <p class="login-box-msg text-center" >Sign in to start your session</p>
                
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email" >
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember">
                                Remember Me
                                </label>
                            </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            </div>
                            <!-- /.col -->
                        </div>
                        </form>
                
                        <div class="social-auth-links text-center mb-3">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                        </a>
                        </div>
                        <!-- /.social-auth-links -->
                
                        <p class="mb-1">
                        <a href="forgot-password.html">I forgot my password</a>
                        </p>
                        <p class="mb-0">
                        <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
                        </p>
                    </div>
                    <!-- /.login-card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="https://demo.dashboardpack.com/architectui-html-free/assets/scripts/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"> </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</body>
</html>

// {{-- <div class="container">
//     <div class="row justify-content-center">
//         <div class="col-md-8">
//             <div class="card">
//                 <div class="card-header">{{ __('Login') }}</div>

//                 <div class="card-body">
//                     <form method="POST" action="{{ route('login') }}">
//                         @csrf

//                         <div class="row mb-3">
//                             <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

//                             <div class="col-md-6">
//                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

//                                 @error('email')
//                                     <span class="invalid-feedback" role="alert">
//                                         <strong>{{ $message }}</strong>
//                                     </span>
//                                 @enderror
//                             </div>
//                         </div>

//                         <div class="row mb-3">
//                             <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

//                             <div class="col-md-6">
//                                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

//                                 @error('password')
//                                     <span class="invalid-feedback" role="alert">
//                                         <strong>{{ $message }}</strong>
//                                     </span>
//                                 @enderror
//                             </div>
//                         </div>

//                         <div class="row mb-3">
//                             <div class="col-md-6 offset-md-4">
//                                 <div class="form-check">
//                                     <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

//                                     <label class="form-check-label" for="remember">
//                                         {{ __('Remember Me') }}
//                                     </label>
//                                 </div>
//                             </div>
//                         </div>

//                         <div class="row mb-0">
//                             <div class="col-md-8 offset-md-4">
//                                 <button type="submit" class="btn btn-primary">
//                                     {{ __('Login') }}
//                                 </button>

//                                 @if (Route::has('password.request'))
//                                     <a class="btn btn-link" href="{{ route('password.request') }}">
//                                         {{ __('Forgot Your Password?') }}
//                                     </a>
//                                 @endif
//                             </div>
//                         </div>
//                     </form>
//                 </div>
//             </div>
//         </div>
//     </div>
// </div> --}}