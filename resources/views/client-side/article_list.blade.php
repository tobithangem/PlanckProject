@extends('client-side.layouts.app')

@section('header-not-home', 'header-add-class')

@section('content')

<section id="article-list" class="wow fadeInUp section-form">
  <div class="container" style="padding-bottom: 30px; padding-top: 30px;">
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
              <p class="mb-1">
                <i class="fa fa-star" aria-hidden="true"></i>
                Donec id elit non mi porta gravida at eget metus
              </p>
              <div class="d-flex w-100 justify-content-between">
                <small>31/03/2022</small>
                <small> <i>Find it</i> </small>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" style="border-radius: 0;">
              <p class="mb-1">
                <i class="fa fa-star" aria-hidden="true"></i>
                Donec id elit non mi porta gravida at eget metus
              </p>
              <div class="d-flex w-100 justify-content-between">
                <small>31/03/2022</small>
                <small> <i>Find it</i> </small>
              </div>
            </a>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start" style="border-radius: 0;">
              <p class="mb-1">
                <i class="fa fa-star" aria-hidden="true"></i>
                Donec id elit non mi porta gravida at eget metus
              </p>
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