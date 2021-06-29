<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Register - Store-Locator</title>
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{asset('css/LineIcons.3.0.css') }}" >
<link rel="stylesheet" href="{{asset('css/tiny-slider.css') }}" >
<link rel="stylesheet" href="{{asset('css/glightbox.min.css') }}" >
<link rel="stylesheet" href="{{asset('css/main.css')}}" >
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
<h1 class="page-title">Registration</h1>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<ul class="breadcrumb-nav">
<li><a href="http://store-locator.test/index"><i class="lni lni-home"></i> Home</a></li>
<li>Registration</li>
</ul>
</div>
</div>
</div>
</div>


<div class="account-login section">
<div class="container">
<div class="row">
<div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
<div class="register-form">
<div class="title">
<h3>No Account? Register As : </h3>
</div>
<div>
<div class="form-group">
<input class="cols-lg-5" type="radio" id="business_radio" name="radio1" value="Business" required> Business </input>&nbsp;
<input class="cols-lg-5" type="radio" id="customer_radio" name="radio1" value="Customer" required> Customer </input>
<!-- <button>Business</button>
<button>customer</button> -->
</div>
</div>
<!-- Business form start -->
<form class="row" id="business" method="post">
<div class="col-sm-6">
<div class="form-group">
<label for="reg-bn">Business Name</label>
<input class="form-control" type="text" id="reg-bn" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-on">Owner Name</label>
<input class="form-control" type="text" id="reg-on" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-gst-no">GST Number</label>
<input class="form-control" type="text" id="reg-gst-no" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-gst-cert">GST Certificate</label>
<input class="form-control" type="file" id="reg-gst-cert" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-photo">Business Photograph(s)</label>
<input class="form-control" type="file" id="reg-photo1" required>
<input class="form-control" type="file" id="reg-photo2" required>
<input class="form-control" type="file" id="reg-photo3" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-phone">Phone Number</label>
<input class="form-control" type="tel" id="reg-phone" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-add">Permanant Address</label>
<input class="form-control" type="area" id="reg-add" name="reg-add" rows="5" cols="20" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-bt">Business timing</label>
<input class="form-control" type="time" id="hours" name="time" value="09:00" required>
<label for="reg-bt">To</label>
<input class="form-control" type="time" id="reg-bt" name="time" value="18:00" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-email">E-mail Address</label>
<input class="form-control" type="email" id="reg-email" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-pass">Password</label>
<input class="form-control" type="password" id="reg-pass" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-pass-confirm">Confirm Password</label>
<input class="form-control" type="password" id="reg-pass-confirm" required>
</div>
</div>
<div class="button">
<button class="btn" type="submit">Register</button> 
</div>
<div class="button">
<button class="btn" type="reset">Reset</button>
</div>
<p class="outer-link">Already have an account? <a href="http://store-locator.test/login">Login Now</a>
</p>
</form>
<!-- business form end  -->

<!-- customer form start -->
<form class="row" id="customer" method="POST">
<div class="col-sm-6">
<div class="form-group">
<label for="reg-email">E-mail Address</label>
<input class="form-control" type="email" id="reg-email" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-pass">Password</label>
<input class="form-control" type="password" id="reg-pass" required>
</div>
</div>
<div class="col-sm-6">
<div class="form-group">
<label for="reg-pass-confirm">Confirm Password</label>
<input class="form-control" type="password" id="reg-pass-confirm" required>
</div>
</div>
<div class="button">
<button class="btn" type="submit">Register</button> 
</div>
<div class="button">
<button class="btn" type="reset">Reset</button>
</div>
<p class="outer-link">Already have an account? <a href="http://store-locator.test/login">Login Now</a>
</p>
</form>
<!-- customer form end  -->

</div>
</div>
</div>
</div>
</div>

@include('masterlayout.footer')

<!-- scroll up button-->
<a href="#" class="scroll-top"  style="background-color: #292b2c;">
<i class="lni lni-chevron-up"></i>
</a>
<!--end scroll up button -->
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/tiny-slider.js')}} "></script>
<script src="{{asset('js/glightbox.min.js')}} "></script>
<script src="{{asset('js/main.js')}}"></script>
<script type="text/javascript">
        //========= Hero Slider 
        tns({
            container: '.hero-slider',
            slideBy: 'page',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 0,
            items: 1,
            nav: false,
            controls: true,
            controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
        });

        //======== Brand Slider
        tns({
            container: '.brands-logo-carousel',
            autoplay: true,
            autoplayButtonOutput: false,
            mouseDrag: true,
            gutter: 15,
            nav: false,
            controls: false,
            responsive: {
                0: {
                    items: 1,
                },
                540: {
                    items: 3,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                }
            }
        });

    </script>
<script>
        const finaleDate = new Date("February 15, 2023 00:00:00").getTime();

        const timer = () => {
            const now = new Date().getTime();
            let diff = finaleDate - now;
            if (diff < 0) {
                document.querySelector('.alert').style.display = 'block';
                document.querySelector('.container').style.display = 'none';
            }

            let days = Math.floor(diff / (1000 * 60 * 60 * 24));
            let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
            let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
            let seconds = Math.floor(diff % (1000 * 60) / 1000);

            days <= 99 ? days = `0${days}` : days;
            days <= 9 ? days = `00${days}` : days;
            hours <= 9 ? hours = `0${hours}` : hours;
            minutes <= 9 ? minutes = `0${minutes}` : minutes;
            seconds <= 9 ? seconds = `0${seconds}` : seconds;

            document.querySelector('#days').textContent = days;
            document.querySelector('#hours').textContent = hours;
            document.querySelector('#minutes').textContent = minutes;
            document.querySelector('#seconds').textContent = seconds;

        }
        timer();
        setInterval(timer, 1000);
    </script>

<script 
src="https://code.jquery.com/jquery-3.6.0.min.js" 
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
crossorigin="anonymous"></script>

<script>
      $(document).ready(function(){
          $('#customer').hide();
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