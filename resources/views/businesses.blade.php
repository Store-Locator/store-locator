<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.graygrids.com/themes/shopgrids/http://store-locator.test/businesses by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 17:17:20 GMT -->
<head>
<meta charset="utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<title>Shop Grid - ShopGrids Bootstrap 5 eCommerce HTML Template.</title>
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
<h1 class="page-title">Shop Grid</h1>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<ul class="breadcrumb-nav">
<li><a href="http://store-locator.test/index"><i class="lni lni-home"></i> Home</a></li>
<!-- <li><a href="javascript:void(0)">Shop</a></li> -->
<li>Businesses</li>
</ul>
</div>
</div>
</div>
</div>


<section class="product-grids section">
<div class="container">
<div class="row">
<div class="col-lg-3 col-12">

<div class="product-sidebar">

<div class="single-widget search">
<h3>Search Product</h3>
<form action="#">
<input type="text" placeholder="Search Here...">
<button type="submit"><i class="lni lni-search-alt"></i></button>
</form>
</div>


<div class="single-widget">
<h3>All Categories</h3>
<ul class="list">
<li>
<a href="http://store-locator.test/businesses">Electronics and Electrician</a><span>(1138)</span>
</li>
<li>
<a href="http://store-locator.test/businesses">Automobiles and Mechanics</a><span>(2356)</span>
</li>
<li>
<a href="http://store-locator.test/businesses">Grocery</a><span>(420)</span>
</li>
<li>
<a href="http://store-locator.test/businesses">Hardware and Plumbing</a><span>(874)</span>
</li>
<li>
<a href="http://store-locator.test/businesses">Pharmacy</a><span>(1239)</span>
</li>
<li>
<a href="http://store-locator.test/businesses">Furniture and Carpentry</a><span>(340)</span>
</li>
<!-- <li>
<a href="http://store-locator.test/businesses"></a><span>(512)</span>
</li> -->
</ul>
</div>


<div class="single-widget range">
<h3>Range</h3>
<input type="range" class="form-range" name="range" step="1" min="1" max="100" value="1" onchange="rangePrimary.value=value">
<div class="range-inner">
<label>Km</label>
<input type="text" id="rangePrimary" style="margin-left: 10px;" placeholder="1" />
</div>
</div>


<div class="single-widget condition">
<h3>Filter by Price</h3>
<div class="form-check">
 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
<label class="form-check-label" for="flexCheckDefault1">
₹50 - ₹100L (208)
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
<label class="form-check-label" for="flexCheckDefault2">
₹100L - ₹500 (311)
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
<label class="form-check-label" for="flexCheckDefault3">
₹500 - ₹1,000 (485)
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
<label class="form-check-label" for="flexCheckDefault4">
₹1,000 - ₹5,000 (213)
</label>
</div>
</div>


<div class="single-widget condition">
<h3>Filter by Brand</h3>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
<label class="form-check-label" for="flexCheckDefault11">
Apple (254)
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault22">
<label class="form-check-label" for="flexCheckDefault22">
Bosh (39)
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault33">
<label class="form-check-label" for="flexCheckDefault33">
Canon Inc. (128)
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault44">
<label class="form-check-label" for="flexCheckDefault44">
Dell (310)
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault55">
<label class="form-check-label" for="flexCheckDefault55">
Hewlett-Packard (42)
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault66">
<label class="form-check-label" for="flexCheckDefault66">
Hitachi (217)
</label>
</div>
<div class="form-check">
 <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault77">
<label class="form-check-label" for="flexCheckDefault77">
LG Electronics (310)
</label>
</div>
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault88">
<label class="form-check-label" for="flexCheckDefault88">
Panasonic (74)
</label>
</div>
</div>

</div>

</div>
<div class="col-lg-9 col-12">
<div class="product-grids-head">
<div class="product-grid-topbar">
<div class="row align-items-center">
<div class="col-lg-7 col-md-8 col-12">
<div class="product-sorting">
<label for="sorting">Sort by:</label>
<select class="form-control" id="sorting">
<option>Popularity</option>
<option>Low - High Price</option>
<option>High - Low Price</option>
<option>Average Rating</option>
<option>A - Z Order</option>
<option>Z - A Order</option>
</select>
<h3 class="total-show-product">Showing: <span>1 - 12 items</span></h3>
</div>
</div>
<div class="col-lg-5 col-md-4 col-12">
<nav>
<div class="nav nav-tabs" id="nav-tab" role="tablist">
<button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab" data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid" aria-selected="true"><i class="lni lni-grid-alt"></i></button>
<button class="nav-link" id="nav-list-tab" data-bs-toggle="tab" data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list" aria-selected="false"><i class="lni lni-list"></i></button>
</div>
</nav>
</div>
</div>
</div>
<div class="tab-content" id="nav-tabContent">
<div class="tab-pane fade show active" id="nav-grid" role="tabpanel" aria-labelledby="nav-grid-tab">
<div class="row">
<div class="col-lg-4 col-md-6 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-1.jpg')}}" alt="#">
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
<div class="product-info">
<span class="category">Watches</span>
<h4 class="title">
<a href="http://store-locator.test/businesses">Xiaomi Mi Band 5</a>
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
<span>₹199.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-2.jpg')}}" alt="#">
<!-- <span class="sale-tag">-25%</span> -->
<div class="button">
<a href="http://store-locator.test/details" class="btn"> View Details</a>
</div>
</div>
<div class="product-info">
<span class="category">Speaker</span>
<h4 class="title">
<a href="http://store-locator.test/businesses">Bluetooth Speaker</a>
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
<span>₹275.00</span>
<span class="discount-price">₹300.00</span>
</div> -->
</div>
</div>

 </div>
<div class="col-lg-4 col-md-6 col-12">

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
<a href="http://store-locator.test/businesses">WiFi Security Camera</a>
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
<span>₹399.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

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
<a href="http://store-locator.test/businesses">iphone 6x plus</a>
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
<span>₹400.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

<div class="single-product">
<div class="product-image">
<img src="{{asset('images/products/product-5.jpg')}}" alt="#">
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
<div class="product-info">
<span class="category">Headphones</span>
<h4 class="title">
<a href="http://store-locator.test/businesses">Wireless Headphones</a>
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
<span>₹350.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

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
<a href="http://store-locator.test/businesses">Mini Bluetooth Speaker</a>
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
<span>₹70.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

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
<a href="http://store-locator.test/businesses">Wireless Headphones</a>
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
<span>₹100.00</span>
<span class="discount-price">₹200.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

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
<a href="http://store-locator.test/businesses">Apple MacBook Air</a>
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
<span>₹899.00</span>
</div> -->
</div>
</div>

</div>
<div class="col-lg-4 col-md-6 col-12">

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
<a href="http://store-locator.test/businesses">Bluetooth Speaker</a>
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
<span>₹275.00</span>
<span class="discount-price">₹300.00</span>
</div> -->
</div>
</div>

</div>
</div>
<div class="row">
<div class="col-12">
 
<div class="pagination left">
<ul class="pagination-list">
<li><a href="javascript:void(0)">1</a></li>
<li class="active"><a href="javascript:void(0)">2</a></li>
<li><a href="javascript:void(0)">3</a></li>
<li><a href="javascript:void(0)">4</a></li>
<li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a></li>
</ul>
</div>

</div>
</div>
</div>
<div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
<div class="row">
<div class="col-lg-12 col-md-12 col-12">

<div class="single-product">
<div class="row align-items-center">
<div class="col-lg-4 col-md-4 col-12">
<div class="product-image">
<img src="{{asset('images/products/product-1.jpg')}}" alt="#">
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
</div>
<div class="col-lg-8 col-md-8 col-12">
<div class="product-info">
<span class="category">Watches</span>
<h4 class="title">
<a href="http://store-locator.test/businesses">Xiaomi Mi Band 5</a>
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
<span>₹199.00</span>
</div> -->
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-12 col-md-12 col-12">

<div class="single-product">
<div class="row align-items-center">
<div class="col-lg-4 col-md-4 col-12">
<div class="product-image">
<img src="{{asset('images/products/product-2.jpg')}}" alt="#">
<!-- <span class="sale-tag">-25%</span> -->
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
</div>
<div class="col-lg-8 col-md-8 col-12">
<div class="product-info">
<span class="category">Speaker</span>
<h4 class="title">
<a href="http://store-locator.test/businesses">Big Power Sound Speaker</a>
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
<span>₹275.00</span>
<span class="discount-price">₹300.00</span>
</div> -->
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-12 col-md-12 col-12">

<div class="single-product">
<div class="row align-items-center">
<div class="col-lg-4 col-md-4 col-12">
<div class="product-image">
<img src="{{asset('images/products/product-3.jpg')}}" alt="#">
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
 </div>
</div>
</div>
<div class="col-lg-8 col-md-8 col-12">
<div class="product-info">
<span class="category">Camera</span>
<h4 class="title">
<a href="http://store-locator.test/businesses">WiFi Security Camera</a>
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
<span>₹399.00</span>
</div> -->
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-12 col-md-12 col-12">

<div class="single-product">
<div class="row align-items-center">
<div class="col-lg-4 col-md-4 col-12">
<div class="product-image">
<img src="{{asset('images/products/product-4.jpg')}}" alt="#">
<!-- <span class="new-tag">New</span> -->
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
</div>
<div class="col-lg-8 col-md-8 col-12">
<div class="product-info">
<span class="category">Phones</span>
<h4 class="title">
<a href="http://store-locator.test/businesses">iphone 6x plus</a>
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
<span>₹400.00</span>
</div> -->
</div>
</div>
</div>
</div>

</div>
<div class="col-lg-12 col-md-12 col-12">

<div class="single-product">
<div class="row align-items-center">
<div class="col-lg-4 col-md-4 col-12">
<div class="product-image">
<img src="{{asset('images/products/product-7.jpg')}}" alt="#">
<!-- <span class="sale-tag">-50%</span> -->
<div class="button">
<a href="http://store-locator.test/details" class="btn">View Details</a>
</div>
</div>
</div>
<div class="col-lg-8 col-md-8 col-12">
<div class="product-info">
<span class="category">Headphones</span>
<h4 class="title">
<a href="http://store-locator.test/businesses">PX7 Wireless Headphones</a>
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
<span>₹100.00</span>
<span class="discount-price">₹200.00</span>
</div> -->
</div>
</div>
</div>
</div>

</div>
</div>
<div class="row">
 <div class="col-12">

<div class="pagination left">
<ul class="pagination-list">
<li><a href="javascript:void(0)">1</a></li>
<li class="active"><a href="javascript:void(0)">2</a></li>
<li><a href="javascript:void(0)">3</a></li>
<li><a href="javascript:void(0)">4</a></li>
<li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a></li>
</ul>
</div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


@include('masterlayout.footer')

<a href="#" class="scroll-top" style="background-color: #292b2c;">
<i class="lni lni-chevron-up"></i>
</a>

<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/tiny-slider.js')}}"></script>
<script src="{{asset('js/glightbox.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>

<!-- Mirrored from demo.graygrids.com/themes/shopgrids/http://store-locator.test/businesses by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Jun 2021 17:17:20 GMT -->
</html>