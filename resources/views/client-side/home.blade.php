@extends('client-side.layouts.app')
@section('home', 'active-nav')
 

@section('extend-header')
<!-- Link Contact -->
<div id="topbar">
    <div class="container">
      <div class="social-links">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </div>
<!-- End Link Contact -->
@endsection

@section('content')
<!-- Intro -->
<section id="intro" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center">
        <div class="col-md-6 intro-info order-md-first order-last">
          <h2>Planck Solution<br>for Our <span>Future!</span></h2>
          <div>
            <a href="{{route('client-side.article_list')}}" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-md-6 intro-img order-md-last order-first">
          <img src="{{asset('template/img/intro-img.svg')}}" alt="" class="img-fluid">
        </div>
    </div>
    </div>
</section>
<!-- End Intro -->

<!-- Articles -->
<section id="articles" class="wow fadeInUp section-form">
  <div class="container" style="padding-bottom: 30px;">
    <header class="section-header" style="padding-top: 30px;">
      <h3>Articles</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error</p>
    </header>

    <div class="row flex-items-xs-middle flex-items-xs-center">
  
      <!-- Left Form  -->
      <div class="col-xs-12 col-lg-8" style="padding-right: 30px;">
        <div class="list-group">
          <a href="{{route('client-side.article_details')}}" class="list-group-item list-group-item-action flex-column align-items-start clear-box-listgroup">
            <img src="{{asset('template/img/team-1.jpg')}}" width="150px" height="auto" alt="">
            <div style="width: calc(100% - 150px); padding-left: 30px;">
              <div class="d-flex w-100 justify-content-between">
                <small>1111 <i class="fa fa-eye"></i></small>
                <small>31/03/2022</small>
              </div>
              <h5 style="margin-bottom: 10px;"> <b>Sed ut perspiciatis unde omnis iste natus error</b> </h5>
              <small> <i>Tag lorem</i> </small>
              <p class="mb-1">Donec id elit non mi porta gravida at eget metus, 
                sed ut perspiciatis unde omnis iste natus error 
              </p>
            </div>
          </a>
          <a href="{{route('client-side.article_details')}}" class="list-group-item list-group-item-action flex-column align-items-start clear-box-listgroup">
            <img src="{{asset('template/img/team-1.jpg')}}" width="150px" height="auto" alt="">
            <div style="width: calc(100% - 150px); padding-left: 30px;">
              <div class="d-flex w-100 justify-content-between">
                <small>1111 <i class="fa fa-eye"></i></small>
                <small>31/03/2022</small>
              </div>
              <h5 style="margin-bottom: 10px;"> <b>Sed ut perspiciatis unde omnis iste natus error</b> </h5>
              <small> <i>Tag lorem</i> </small>
              <p class="mb-1">Donec id elit non mi porta gravida at eget metus, 
                sed ut perspiciatis unde omnis iste natus error 
              </p>
            </div>
          </a>
          <a href="{{route('client-side.article_details')}}" class="list-group-item list-group-item-action flex-column align-items-start clear-box-listgroup">
            <img src="{{asset('template/img/team-1.jpg')}}" width="150px" height="auto" alt="">
            <div style="width: calc(100% - 150px); padding-left: 30px;">
              <div class="d-flex w-100 justify-content-between">
                <small>1111 <i class="fa fa-eye"></i></small>
                <small>31/03/2022</small>
              </div>
              <h5 style="margin-bottom: 10px;"> <b>Sed ut perspiciatis unde omnis iste natus error</b> </h5>
              <small> <i>Tag lorem</i> </small>
              <p class="mb-1">Donec id elit non mi porta gravida at eget metus, 
                sed ut perspiciatis unde omnis iste natus error 
              </p>
            </div>
          </a>
        </div>
      </div>
  
      <!-- Right Form  -->
      <div class="col-xs-12 col-lg-4">
        <div class="form-row">
          <div class="form-group col-md-8">
            <input type="search" class="form-control" style="height: calc(1.5em + .75rem + 4px) !important;" placeholder="Search...">
          </div>
          <div class="form-group col-md-4">
            <button class="btn-search">Search</button>
          </div>
        </div>

        <div class="form-group" style="margin-top: 30px;">
          <h4> <b>Newest Articles</b> </h4>
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" style="border-radius: 0;">
              <p class="mb-1">Donec id elit non mi porta gravida at eget metus</p>
              <div class="d-flex w-100 justify-content-between">
                <small>31/03/2022</small>
                <small> <i>Find it</i> </small>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" style="border-radius: 0;">
              <p class="mb-1">Donec id elit non mi porta gravida at eget metus</p>
              <div class="d-flex w-100 justify-content-between">
                <small>31/03/2022</small>
                <small> <i>Find it</i> </small>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" style="border-radius: 0;">
              <p class="mb-1">Donec id elit non mi porta gravida at eget metus</p>
              <div class="d-flex w-100 justify-content-between">
                <small>31/03/2022</small>
                <small> <i>Find it</i> </small>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Articles -->

@endsection