<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Search Bizz</title>
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

<section class="hero-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-12 custom-padding-right" style="margin-left: auto; margin-right: auto;">
<div class="slider-head">

<div class="hero-slider">

<div class="single-slider" style="background-image: url({{asset('images/hero/pic1.png')}});">
<div class="content">
<h2 style="color: white;font-size:50px;">Serve Your Requirements</h2>
<!-- <h2><span>No restocking fee ($35 savings)</span>
M75 Sport Watch
</h2>
<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
labore dolore magna aliqua.</p>
<h3><span>Now Only</span> $320.99</h3>
<div class="button">
<a href="http://store-locator.test/details" class="btn">Shop Now</a>
</div> -->
</div>
</div>


<div class="single-slider" style="background-image: url({{asset('images/hero/1.jpg')}});">
<!-- <div class="content">
<h2><span>Big Sale Offer</span>
Get the Best Deal on CCTV Camera
</h2>
<p>Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut
labore dolore magna aliqua.</p>
<h3><span>Combo Only:</span> $590.00</h3>
<div class="button">
<a href="http://store-locator.test/details" class="btn">Shop Now</a>
</div>
</div> -->
</div>


<div class="single-slider" style="background-image: url({{asset('images/hero/2.jpg')}});">
<div class="content">
<p style="margin-top: -250px;"><h1 style="color: black;font-size:60px;margin-left:70px;"><b>Fullfill your needs.</b></h1></p>
</div>
</div>



</div>
</div>
<!-- <div class="col-lg-4 col-12">
<div class="row">
<div class="col-lg-12 col-md-6 col-12 md-custom-padding">

<div class="hero-small-banner" style="background-image: url('assets/images/hero/slider-bnr.jpg');">
<div class="content">
<h2>
<span>New line required</span>
iPhone 12 Pro Max
</h2>
<h3>$259.99</h3>
</div>
</div>

</div>
<div class="col-lg-12 col-md-6 col-12">

<div class="hero-small-banner style2">
<div class="content">
<h2>Weekly Sale!</h2>
 <p>Saving up to 50% off all online store items this week.</p>
<div class="button">
<a class="btn" href="http://store-locator.test/details">Shop Now</a>
</div>
</div>
</div>

</div>
</div>
</div> -->
</div>
</div>
</section>


<section class="featured-categories section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h2>Featured Categories</h2>
<p>There are many variations of bussiness and services near you.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-12">

<div class="single-category" style="border-color: black;background-color: #292b2c;">
<h3 class="heading" style="color: white;">Electronics and Electrician</h3>
<ul>
<li><a href="http://store-locator.test/details" >Store - 1</a></li>
<li><a href="http://store-locator.test/details" >Store - 2</a></li>
<li><a href="http://store-locator.test/details" >Store - 3</a></li>
<li><a href="http://store-locator.test/details" >Store - 4</a></li>
<li><a href="http://store-locator.test/businesses" >View All</a></li>
</ul>
<div class="images">
<!-- <img src="{{asset('images/featured-categories/pic1.png')}}" alt="#"> -->
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="single-category" style="border-color: black;background-color:#292b2c; ">
<h3 class="heading" style="color: white;">Automobiles and Mechanics</h3>
<ul>
<li><a href="http://store-locator.test/details" >Store - 1</a></li>
<li><a href="http://store-locator.test/details" >Store - 2</a></li>
<li><a href="http://store-locator.test/details" >Store - 3</a></li>
<li><a href="http://store-locator.test/details" >Store - 4</a></li>
<li><a href="http://store-locator.test/businesses" >View All</a></li>
</ul>
<div class="images">
<!-- <img src="{{asset('images/featured-categories/pic2.png')}}" alt="#"> -->
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="single-category" style="border-color: black;background-color: #292b2c; ">
<h3 class="heading" style="color: white;">Grocery</h3>
<ul>
<li><a href="http://store-locator.test/details" >Store - 1</a></li>
<li><a href="http://store-locator.test/details" >Store - 2</a></li>
<li><a href="http://store-locator.test/details" >Store - 3</a></li>
<li><a href="http://store-locator.test/details" >Store - 4</a></li>
<li><a href="http://store-locator.test/businesses" >View All</a></li>
</ul>
<div class="images">
<!-- <img src="{{asset('images/featured-categories/pic3.png')}}" alt="#"> -->
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="single-category" style="border-color: black;background-color: #292b2c; ">
<h3 class="heading" style="color: white;">Hardware and Plumbing</h3>
<ul>
<li><a href="http://store-locator.test/details" >Store - 1</a></li>
<li><a href="http://store-locator.test/details" >Store - 2</a></li>
<li><a href="http://store-locator.test/details" >Store - 3</a></li>
<li><a href="http://store-locator.test/details" >Store - 4</a></li>
<li><a href="http://store-locator.test/businesses" >View All</a></li>
</ul>
<div class="images">
<!-- <img src="{{asset('images/featured-categories/fetured-item-4.png')}}" alt="#"> -->
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12" style="border-color: black; ">

<div class="single-category" style="border-color: black;background-color: #292b2c; ">
<h3 class="heading" style="color: white;">Pharmacy</h3>
<ul>
<li><a href="http://store-locator.test/details" >Store - 1</a></li>
<li><a href="http://store-locator.test/details" >Store - 2</a></li>
<li><a href="http://store-locator.test/details" >Store - 3</a></li>
<li><a href="http://store-locator.test/details" >Store - 4</a></li>
<li><a href="http://store-locator.test/businesses" >View All</a></li>
</ul>
<div class="images">
<!-- <img src="{{asset('images/featured-categories/fetured-item-5.png')}}" alt="#"> -->
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="single-category" style="border-color: black;background-color: #292b2c; ">
<h3 class="heading" style="color: white;">Furniture and Carpentry</h3>
<ul>
<li><a href="http://store-locator.test/details" >Store - 1</a></li>
<li><a href="http://store-locator.test/details" >Store - 2</a></li>
<li><a href="http://store-locator.test/details" >Store - 3</a></li>
<li><a href="http://store-locator.test/details" >Store - 4</a></li>
<li><a href="http://store-locator.test/businesses" >View All</a></li>
</ul>
<div class="images">
<!-- <img src="{{asset('images/featured-categories/fetured-item-6.png')}}" alt="#"> -->
</div>
</div>

</div>
</div>
</div>
</section>


<section class="trending-product section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h2>Trending Business</h2>
<p>Trending and popular businesses .</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-md-6 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-1.jpg')}}" alt="#">
<div class="button">
<a href="http://store-locator.test/details" class="btn">
<!-- <i class="lni lni-cart"> -->
</i>View Details</a>
</div>
</div>
 <div class="product-info">
<span class="category">Watches</span>
<h4 class="title">
<a href="http://store-locator.test/details">Xiaomi Mi Band 5</a>
</h4>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star"></i></li>
<li><span>4.0 Review(s)</span></li>
</ul>
<!-- <div class="price">
<span>$199.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-2.jpg')}}" alt="#">
<!-- <span class="sale-tag">-25%</span> -->
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
<div class="product-info">
<span class="category">Speaker</span>
<h4 class="title">
<a href="http://store-locator.test/details">Big Power Sound Speaker</a>
</h4>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><span>5.0 Review(s)</span></li>
</ul>
<!-- <div class="price">
<span>$275.00</span>
<span class="discount-price">$300.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-3.jpg')}}" alt="#">
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
<div class="product-info">
<span class="category">Camera</span>
<h4 class="title">
<a href="http://store-locator.test/details">WiFi Security Camera</a>
</h4>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><span>5.0 Review(s)</span></li>
</ul>
<!-- <div class="price">
<span>$399.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-4.jpg')}}" alt="#">
<!-- <span class="new-tag">New</span> -->
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
<div class="product-info">
<span class="category">Phones</span>
<h4 class="title">
<a href="http://store-locator.test/details">iphone 6x plus</a>
</h4>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><span>5.0 Review(s)</span></li>
</ul>
<!-- <div class="price">
<span>$400.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-5.jpg')}}" alt="#">
<div class="button">
<a href="product-details.html" class="btn">View Details</a>
</div>
</div>
<div class="product-info">
<span class="category">Headphones</span>
<h4 class="title">
<a href="http://store-locator.test/details">Wireless Headphones</a>
</h4>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><span>5.0 Review(s)</span></li>
</ul>
<!-- <div class="price">
<span>$350.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-6.jpg')}}" alt="#">
<div class="button">
 <a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
<div class="product-info">
<span class="category">Speaker</span>
<h4 class="title">
<a href="http://store-locator.test/details">Mini Bluetooth Speaker</a>
</h4>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star"></i></li>
<li><span>4.0 Review(s)</span></li>
</ul>
<!-- <div class="price">
<span>$70.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-7.jpg')}}" alt="#">
<!-- <span class="sale-tag">-50%</span> -->
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
<div class="product-info">
<span class="category">Headphones</span>
<h4 class="title">
<a href="http://store-locator.test/details">PX7 Wireless Headphones</a>
</h4>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star"></i></li>
<li><span>4.0 Review(s)</span></li>
</ul>
<!-- <div class="price">
<span>$100.00</span>
<span class="discount-price">$200.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-3 col-md-6 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-8.jpg')}}" alt="#">
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
<div class="product-info">
<span class="category">Laptop</span>
<h4 class="title">
<a href="http://store-locator.test/details">Apple MacBook Air</a>
</h4>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
 <li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><span>5.0 Review(s)</span></li>
</ul>
<!-- <div class="price">
<span>$899.00</span>
</div> -->
</div>
</div>

</div>
</div>
</div>
</section>


<!-- <section class="banner section">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<div class="single-banner" style="background-image:url('{{asset('images/banner/banner-1-bg.jpg')}}')">
<div class="content">
<h2>Smart Watch 2.0</h2>
<p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<div class="single-banner custom-responsive-margin" style="background-image:url('{{asset('images/banner/banner-2-bg.jpg')}}')">
<div class="content">
<h2>Smart Headphone</h2>
<p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
incididunt ut labore.</p>
<div class="button">
<a href="http://store-locator.test/details" class="btn">Shop Now</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section> -->


<!-- <section class="special-offer section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h2>Special Offer</h2>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have
suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-8 col-md-12 col-12">
<div class="row">
<div class="col-lg-4 col-md-4 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-3.jpg')}}" alt="#">
<div class="button">
<a href="http://store-locator.test/details" class="btn"><i class="lni lni-cart"></i> Add to
Cart</a>
</div>
</div>
<div class="product-info">
<span class="category">Camera</span>
<h4 class="title">
<a href="http://store-locator.test/details">WiFi Security Camera</a>
</h4>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><span>5.0 Review(s)</span></li>
</ul>
<div class="price">
<span>$399.00</span>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-4 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-8.jpg')}}" alt="#">
<div class="button">
<a href="http://store-locator.test/details" class="btn"><i class="lni lni-cart"></i> Add to
Cart</a>
</div>
</div>
<div class="product-info">
<span class="category">Laptop</span>
<h4 class="title">
<a href="http://store-locator.test/details">Apple MacBook Air</a>
</h4>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><span>5.0 Review(s)</span></li>
</ul>
<div class="price">
<span>$899.00</span>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-4 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-6.jpg')}}" alt="#">
<div class="button">
<a href="http://store-locator.test/details" class="btn"><i class="lni lni-cart"></i> Add to
Cart</a>
</div>
</div>
<div class="product-info">
<span class="category">Speaker</span>
<h4 class="title">
<a href="http://store-locator.test/details">Bluetooth Speaker</a>
</h4>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star"></i></li>
<li><span>4.0 Review(s)</span></li>
</ul>
<div class="price">
<span>$70.00</span>
</div>
</div>
</div>

</div>
</div>

<div class="single-banner right" style="background-image:url('{{asset('images/banner/banner-3-bg.jpg')}}');margin-top: 30px;">
<div class="content">
<h2>Samsung Notebook 9 </h2>
<p>Lorem ipsum dolor sit amet, <br>eiusmod tempor
incididunt ut labore.</p>
<div class="price">
<span>$590.00</span>
</div>
<div class="button">
<a href="http://store-locator.test/details" class="btn">Shop Now</a>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-12 col-12">
<div class="offer-content">
<div class="image">
<img src="{{asset('images/offer/offer-image.jpg')}}" alt="#">
<span class="sale-tag">-50%</span>
</div>
<div class="text">
<h2><a href="http://store-locator.test/details">Bluetooth Headphone</a></h2>
<ul class="review">
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><i class="lni lni-star-filled"></i></li>
<li><span>5.0 Review(s)</span></li>
</ul>
<div class="price">
<span>$200.00</span>
<span class="discount-price">$400.00</span>
</div>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry incididunt ut
eiusmod tempor labores.</p>
</div>
<div class="box-head">
<div class="box">
<h1 id="days">000</h1>
<h2 id="daystxt">Days</h2>
</div>
<div class="box">
<h1 id="hours">00</h1>
<h2 id="hourstxt">Hours</h2>
</div>
<div class="box">
<h1 id="minutes">00</h1>
<h2 id="minutestxt">Minutes</h2>
</div>
<div class="box">
<h1 id="seconds">00</h1>
<h2 id="secondstxt">Secondes</h2>
</div>
</div>
<div style="background: rgb(204, 24, 24);" class="alert">
<h1 style="padding: 50px 80px;color: white;">We are sorry, Event ended ! </h1>
</div>
</div>
</div>
</div>
</div>
</section> -->


<section class="home-product-list section">
<div class="container">
<div class="row">
<!-- <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
<h4 class="list-title">Best Sellers</h4>

<div class="single-list">
<div class="list-image">
<a href="http://store-locator.test/details"><img src="{{asset('images/home-product-list/01.jpg')}}" alt="#"></a>
</div>
<div class="list-info">
<h3>
<a href="http://store-locator.test/details">GoPro Hero4 Silver</a>
</h3>
<span>$287.99</span>
</div>
</div>


<div class="single-list">
<div class="list-image">
<a href="http://store-locator.test/details"><img src="{{asset('images/home-product-list/02.jpg')}}" alt="#"></a>
</div>
<div class="list-info">
<h3>
<a href="http://store-locator.test/details">Puro Sound Labs BT2200</a>
</h3>
<span>$95.00</span>
</div>
</div>


<div class="single-list">
<div class="list-image">
<a href="http://store-locator.test/details"><img src="{{asset('images/home-product-list/03.jpg')}}" alt="#"></a>
</div>
<div class="list-info">
<h3>
<a href="http://store-locator.test/details">HP OfficeJet Pro 8710</a>
</h3>
<span>$120.00</span>
</div>
</div>

</div> -->
<div class="col-lg-6 col-md-6 col-12 custom-responsive-margin">
<h4 class="list-title">New Bussinesses</h4>

<div class="single-list">
<!-- <div class="list-image">
<a href="http://store-locator.test/details"><img src="{{asset('images/home-product-list/04.jpg')}}" alt="#"></a>
</div> -->
<div class="list-info">
<h3>
<a href="http://store-locator.test/details">iPhone X 256 GB Space Gray</a>
</h3>
<!-- <span>$1150.00</span> -->
</div>
</div>


<div class="single-list">
<!-- <div class="list-image">
<a href="http://store-locator.test/details"><img src="{{asset('images/home-product-list/05.jpg')}}" alt="#"></a>
</div> -->
<div class="list-info">
<h3>
<a href="http://store-locator.test/details">Canon EOS M50 Mirrorless Camera</a>
</h3>
<!-- <span>$950.00</span> -->
</div>
</div>


<div class="single-list">
<!-- <div class="list-image">
<a href="http://store-locator.test/details"><img src="{{asset('images/home-product-list/06.jpg')}}" alt="#"></a>
</div> -->
<div class="list-info">
<h3>
<a href="http://store-locator.test/details">Microsoft Xbox One S</a>
</h3>
<!-- <span>$298.00</span> -->
</div>
</div>

</div>
<div class="col-lg-6 col-md-6 col-12">
<h4 class="list-title">Top Businesses</h4>

<div class="single-list">
<!-- <div class="list-image">
<a href="http://store-locator.test/details"><img src="{{asset('images/home-product-list/07.jpg')}}" alt="#"></a>
</div> -->
<div class="list-info">
<h3>
<a href="http://store-locator.test/details">Samsung Gear 360 VR Camera</a>
</h3>
<!-- <span>$68.00</span> -->
</div>
</div>


<div class="single-list">
<!-- <div class="list-image">
<a href="http://store-locator.test/details"><img src="{{asset('images/home-product-list/08.jpg')}}" alt="#"></a>
</div> -->
<div class="list-info">
<h3>
<a href="http://store-locator.test/details">Samsung Galaxy S9+ 64 GB</a>
</h3>
<!-- <span>$840.00</span> -->
</div>
</div>


<div class="single-list">
<!-- <div class="list-image">
<a href="http://store-locator.test/details"><img src="{{asset('images/home-product-list/09.jpg')}}" alt="#"></a>
</div> -->
<div class="list-info">
<h3>
<a href="http://store-locator.test/details">Zeus Bluetooth Headphones</a>
</h3>
<!-- <span>$28.00</span> -->
</div>
</div>

</div>
</div>
</div>
</section>


<div class="brands">
<div class="container">
<div class="row">
<div class="col-lg-6 offset-lg-3 col-md-12 col-12">
<h2 class="title">Popular Brands</h2>
</div>
</div>
<div class="brands-logo-wrapper">
<div class="brands-logo-carousel d-flex align-items-center justify-content-between">
<div class="brand-logo">
<img src="{{asset('images/brands/01.png')}}" alt="#">
</div>
<div class="brand-logo">
<img src="{{asset('images/brands/02.png')}}" alt="#">
</div>
<div class="brand-logo">
<img src="{{asset('images/brands/03.png')}}" alt="#">
</div>
<div class="brand-logo">
<img src="{{asset('images/brands/04.png')}}" alt="#">
</div>
<div class="brand-logo">
<img src="{{asset('images/brands/05.png')}}" alt="#">
</div>
<div class="brand-logo">
<img src="{{asset('images/brands/06.png')}}" alt="#">
</div>
<div class="brand-logo">
<img src="{{asset('images/brands/03.png')}}" alt="#">
</div>
<div class="brand-logo">
 <img src="{{asset('images/brands/04.png')}}" alt="#">
</div>
</div>
</div>
</div>
</div>


<!-- <section class="blog-section section">
<div class="container">
<div class="row">
<div class="col-12">
<div class="section-title">
<h2>Our Latest News</h2>
<p>There are many variations of passages of Lorem
Ipsum available, but the majority have suffered alteration in some form.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-6 col-12">

<div class="single-blog">
<div class="blog-img">
<a href="blog-single-sidebar.html">
<img src="{{asset('images/blog/blog-1.jpg')}}" alt="#">
</a>
</div>
<div class="blog-content">
<a class="category" href="javascript:void(0)">eCommerce</a>
<h4>
<a href="blog-single-sidebar.html">What information is needed for shipping?</a>
</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
incididunt.</p>
<div class="button">
<a href="javascript:void(0)" class="btn">Read More</a>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="single-blog">
<div class="blog-img">
<a href="blog-single-sidebar.html">
<img src="{{asset('images/blog/blog-2.jpg')}}" alt="#">
</a>
</div>
<div class="blog-content">
<a class="category" href="javascript:void(0)">Gaming</a>
<h4>
<a href="blog-single-sidebar.html">Interesting fact about gaming consoles</a>
</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
incididunt.</p>
<div class="button">
<a href="javascript:void(0)" class="btn">Read More</a>
</div>
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="single-blog">
<div class="blog-img">
<a href="blog-single-sidebar.html">
<img src="{{asset('images/blog/blog-3.jpg')}}" alt="#">
</a>
</div>
<div class="blog-content">
<a class="category" href="javascript:void(0)">Electronic</a>
<h4>
<a href="blog-single-sidebar.html">Electronics, instrumentation & control engineering
</a>
</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
incididunt.</p>
 <div class="button">
<a href="javascript:void(0)" class="btn">Read More</a>
</div>
</div>
</div>

</div>
</div>
</div>
</section> -->


<!-- <section class="shipping-info">
<div class="container">
<ul>

<li>
<div class="media-icon">
<i class="lni lni-delivery"></i>
</div>
<div class="media-body">
<h5>Free Shipping</h5>
<span>On order over $99</span>
</div>
</li>

<li>
<div class="media-icon">
<i class="lni lni-support"></i>
</div>
<div class="media-body">
<h5>24/7 Support.</h5>
<span>Live Chat Or Call.</span>
</div>
</li>

<li>
<div class="media-icon">
<i class="lni lni-credit-cards"></i>
</div>
<div class="media-body">
<h5>Online Payment.</h5>
<span>Secure Payment Services.</span>
</div>
</li>

<li>
<div class="media-icon">
<i class="lni lni-reload"></i>
</div>
<div class="media-body">
<h5>Easy Return.</h5>
<span>Hassle Free Shopping.</span>
</div>
</li>
</ul>
</div>
</section> -->

@include('masterlayout.footer');

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
</body>
</html>