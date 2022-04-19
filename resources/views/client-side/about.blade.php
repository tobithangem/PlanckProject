@extends('client-side.layouts.app')
@section('about', 'active-nav')
@section('header-not-home', 'header-add-class')

@section('content')

<!-- About -->
<section id="about" class="section-form">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-6">
        <div class="about-img">
          <img src="{{asset('template/img/features-1.svg')}}" height="500px;" alt="">
        </div>
      </div>
      <div class="col-lg-7 col-md-6">
        <div class="about-content">
          <h2>About Our Company</h2>
          <h3>Odio sed id eos et laboriosam consequatur eos earum soluta.</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <p>Aut dolor id. Sint aliquam consequatur ex ex labore. Et quis qui dolor nulla dolores neque. Aspernatur consectetur omnis numquam quaerat. Sed fugiat nisi. Officiis veniam molestiae. Et vel ut quidem alias veritatis repudiandae ut fugit. Est ut eligendi aspernatur nulla voluptates veniam iusto vel quisquam. Fugit ut maxime incidunt accusantium totam repellendus eum error. Et repudiandae eum iste qui et ut ab alias.</p>
          <ul>
            <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
            <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About -->

<!-- Team -->
<section id="team" class="section-bg">
  <div class="container">
    <div class="section-header">
      <h3>Team</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
    </div>
    <div class="row">

      <div class="col-lg-3 col-md-6 wow fadeInUp">
        <div class="member">
          <img src="{{asset('template/img/team-1.jpg')}}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Walter White</h4>
              <span>Chief Executive Officer</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="member">
          <img src="{{asset('template/img/team-2.jpg')}}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Sarah Jhonson</h4>
              <span>Product Manager</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
        <div class="member">
          <img src="{{asset('template/img/team-3.jpg')}}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>William Anderson</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
        <div class="member">
          <img src="{{asset('template/img/team-4.jpg')}}" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Team -->

<!-- Growth Timeline -->
<section class="section-grtl">
  <div class="container">
    <h2 class="pb-3 pt-2 border-bottom mb-5 grtl">Growth Timeline</h2>
    <!--first section-->
    <div class="row align-items-center how-it-works d-flex wow fadeInUp" data-wow-delay="0.3s">
      <div class="col-2 text-center bottom d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">1</div>
      </div>
      <div class="col-6 wow fadeInUp" data-wow-delay="0.3s">
        <h5>Chapter One</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
      </div>
    </div>
    <!--path between 1-2-->
    <div class="row timeline wow fadeInUp" data-wow-delay="0.3s">
      <div class="col-2">
        <div class="corner top-right"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner left-bottom"></div>
      </div>
    </div>
    <!--second section-->
    <div class="row align-items-center justify-content-end how-it-works d-flex wow fadeInUp" data-wow-delay="0.3s">
      <div class="col-6 text-right">
        <h5>Chapter Two</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
      </div>
      <div class="col-2 text-center full d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">2</div>
      </div>
    </div>
    <!--path between 2-3-->
    <div class="row timeline wow fadeInUp" data-wow-delay="0.3s">
      <div class="col-2">
        <div class="corner right-bottom"></div>
      </div>
      <div class="col-8">
        <hr/>
      </div>
      <div class="col-2">
        <div class="corner top-left"></div>
      </div>
    </div>
    <!--third section-->
    <div class="row align-items-center how-it-works d-flex wow fadeInUp" data-wow-delay="0.3s">
      <div class="col-2 text-center top d-inline-flex justify-content-center align-items-center">
        <div class="circle font-weight-bold">3</div>
      </div>
      <div class="col-6">
        <h5>Chapter Three</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor gravida aliquam. Morbi orci urna, iaculis in ligula et, posuere interdum lectus.</p>
      </div>
    </div>
  </div>
</section>
<!-- End Growth Timeline -->

@endsection