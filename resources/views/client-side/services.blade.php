@extends('client-side.layouts.app')
@section('services', 'active-nav')
@section('header-not-home', 'header-add-class')
 
@section('content')
<!-- Services -->
<section id="services" class="section-form">
    <div class="container">

      <header class="section-header">
        <h3>Services</h3>
        <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
      </header>

      <div class="row">

        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>

    </div>
  </section>
<!-- End Services -->

<!-- Price -->
<section id="pricing" class="wow fadeInUp">
  <div class="container">
    <header class="section-header">
      <h3>Pricing</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
    </header>

    <div class="row flex-items-xs-middle flex-items-xs-center">
  
      <!-- Basic Plan  -->
      <div class="col-xs-12 col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3><span class="currency">$</span>19<span class="period">/month</span></h3>
          </div>
          <div class="card-block">
            <h4 class="card-title"> 
              Basic Plan
            </h4>
            <ul class="list-group">
              <li class="list-group-item">Odio animi voluptates</li>
              <li class="list-group-item">Inventore quisquam et</li>
              <li class="list-group-item">Et perspiciatis suscipit</li>
              <li class="list-group-item">24/7 Support System</li>
            </ul>
            <a href="#" class="btn">Choose Plan</a>
          </div>
        </div>
      </div>
  
      <!-- Regular Plan  -->
      <div class="col-xs-12 col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3><span class="currency">$</span>29<span class="period">/month</span></h3>
          </div>
          <div class="card-block">
            <h4 class="card-title"> 
              Regular Plan
            </h4>
            <ul class="list-group">
              <li class="list-group-item">Odio animi voluptates</li>
              <li class="list-group-item">Inventore quisquam et</li>
              <li class="list-group-item">Et perspiciatis suscipit</li>
              <li class="list-group-item">24/7 Support System</li>
            </ul>
            <a href="#" class="btn">Choose Plan</a>
          </div>
        </div>
      </div>
  
      <!-- Premium Plan  -->
      <div class="col-xs-12 col-lg-4">
        <div class="card">
          <div class="card-header">
            <h3><span class="currency">$</span>39<span class="period">/month</span></h3>
          </div>
          <div class="card-block">
            <h4 class="card-title"> 
              Premium Plan
            </h4>
            <ul class="list-group">
              <li class="list-group-item">Odio animi voluptates</li>
              <li class="list-group-item">Inventore quisquam et</li>
              <li class="list-group-item">Et perspiciatis suscipit</li>
              <li class="list-group-item">24/7 Support System</li>
            </ul>
            <a href="#" class="btn">Choose Plan</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Price -->
@endsection