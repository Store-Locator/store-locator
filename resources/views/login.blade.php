<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.graygrids.com/themes/shopgrids/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 17:17:05 GMT -->
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Login - Search Bizz</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/LineIcons.3.0.css')}}" />
<link rel="stylesheet" href="{{asset('css/tiny-slider.css')}}" />
<link rel="stylesheet" href="{{asset('css/glightbox.min.css')}}" />
<link rel="stylesheet" href="{{asset('css/main.css')}}" />
</head>
<body>
<!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

<div class="preloader">
<div class="preloader-inner">
<div class="preloader-icon">
<span></span>
<span></span>
</div>
</div>
</div>


@include('masterlayout.header')


<div class="breadcrumbs">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-6 col-12">
<div class="breadcrumbs-content">
<h1 class="page-title">Login</h1>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<ul class="breadcrumb-nav">
<li><a href="http://store-locator.test/index"><i class="lni lni-home"></i> Home</a></li>
<li>Login</li>
</ul>
</div>
</div>
</div>
</div>


<div class="account-login section">
<div class="container">
<div class="row">
<div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">

<div>
<div class="form-group">
<input class="cols-lg-5" type="radio" id="business_radio" name="radio1" value="Business" required checked> Business </input>&nbsp;
<input class="cols-lg-5" type="radio" id="customer_radio" name="radio1" value="Customer" required> Customer </input>
<!-- <button>Business</button>
<button>customer</button> -->
</div>
</div>

<!-- business form -->
<form class="card login-form" id="business" action="{{ route('check2') }}" method="post">

@if(Session::get('success'))
<div class="alert alert-success">
{{Session::get('success')}}
</div>
@endif

@if(Session::get('fail'))
<div class="alert alert-danger">
{{Session::get('fail')}}
</div>
@endif


@csrf
<div class="card-body">
<div class="title">
<h3>Login as Business</h3>
<p>You can login using your social media account or email address.</p>
</div>
<div class="social-login">
<div class="row">
<div class="col-lg-4 col-md-4 col-12"><a class="btn facebook-btn" href="javascript:void(0)"><i class="lni lni-facebook-filled"></i> Facebook
login</a></div>
<div class="col-lg-4 col-md-4 col-12"><a class="btn twitter-btn" href="javascript:void(0)"><i class="lni lni-twitter-original"></i> Twitter
login</a></div>
<div class="col-lg-4 col-md-4 col-12"><a class="btn google-btn" href="javascript:void(0)"><i class="lni lni-google"></i> Google login</a>
</div>
</div>
</div>
<div class="alt-option">
<span>Or</span>
</div>
<div class="form-group input-group">
<label for="reg-fn">Email</label>
<input class="form-control" type="text" id="reg-email" name="bizz_email" value="{{ old('bizz_email') }}">
<span class="text-danger">@error('bizz_email'){{ $message }} @enderror</span>
</div>
<div class="form-group input-group">
<label for="reg-fn">Password</label>
<input class="form-control" type="password" id="reg-pass" name="pass" >
<span class="text-danger">@error('pass'){{ $message }} @enderror</span>
</div>
<div class="d-flex flex-wrap justify-content-between bottom-content">
<div class="form-check">
<input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
<label class="form-check-label">Remember me</label>
</div>
<a class="lost-pass" href="account-password-recovery.html">Forgot password?</a>
</div>
<div class="button">
<button class="btn" type="submit" >Login</button>
</div>
<p class="outer-link">Don't have an account? <a href="http://store-locator.test/register#">Register here </a>
</p>
</div>
</form>
<!-- business form end -->
<!-- customer form -->
<form class="card login-form" id="customer" action="{{ route('check') }}" method="post">

@if(Session::get('success'))
<div class="alert alert-success">
{{Session::get('success')}}
</div>
@endif

@if(Session::get('fail'))
<div class="alert alert-danger">
{{Session::get('fail')}}
</div>
@endif


@csrf
<div class="card-body">
<div class="title">
<h3>Login as Customer</h3>
<p>You can login using your social media account or email address.</p>
</div>
<div class="social-login">
<div class="row">
<div class="col-lg-4 col-md-4 col-12"><a class="btn facebook-btn" href="javascript:void(0)"><i class="lni lni-facebook-filled"></i> Facebook
login</a></div>
<div class="col-lg-4 col-md-4 col-12"><a class="btn twitter-btn" href="javascript:void(0)"><i class="lni lni-twitter-original"></i> Twitter
login</a></div>
<div class="col-lg-4 col-md-4 col-12"><a class="btn google-btn" href="javascript:void(0)"><i class="lni lni-google"></i> Google login</a>
</div>
</div>
</div>
<div class="alt-option">
<span>Or</span>
</div>
<div class="form-group input-group">
<label for="reg-fn">Email</label>
<input class="form-control" type="text" id="reg-email" name="email" value="{{ old('email') }}">
<span class="text-danger">@error('email'){{ $message }} @enderror</span>
</div>
<div class="form-group input-group">
<label for="reg-fn">Password</label>
<input class="form-control" type="password" id="reg-pass" name="password" >
<span class="text-danger">@error('password'){{ $message }} @enderror</span>
</div>
<div class="d-flex flex-wrap justify-content-between bottom-content">
<div class="form-check">
<input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
<label class="form-check-label">Remember me</label>
</div>
<a class="lost-pass" href="account-password-recovery.html">Forgot password?</a>
</div>
<div class="button">
<button class="btn" type="submit" >Login</button>
</div>
<p class="outer-link">Don't have an account? <a href="http://store-locator.test/register#">Register here </a>
</p>
</div>
</form>
</div>
</div>
</div>
</div>


@include('masterlayout.footer')

<a href="#" class="scroll-top" style="background-color: #292b2c;">
<i class="lni lni-chevron-up"></i>
</a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/tiny-slider.js')}}"></script>
<script src="{{asset('js/glightbox.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>


<script 
src="https://code.jquery.com/jquery-3.6.0.min.js" 
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
crossorigin="anonymous"></script>

<script>
      $(document).ready(function(){
          $('#customer').hide();
        //   $('#business').hide();
          $('#business_radio').on('click',function(){
            $('#business').show();
            $('#customer').hide();
          });
        $('#customer_radio').on('click', function(){
            $('#business').hide();
            $('#customer').show();
        });
    });  
</script>
</body>
</html>

</body>

<!-- Mirrored from demo.graygrids.com/themes/shopgrids/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 17:17:06 GMT -->
</html>