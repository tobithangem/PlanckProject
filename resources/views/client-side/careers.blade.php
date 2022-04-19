@extends('client-side.layouts.app')
@section('careers', 'active-nav')
@section('header-not-home', 'header-add-class')
 
@section('content')

<!-- Submit Resume -->
<section id="features" class="section-form">
  <div class="container">
    <div class="row feature-item">
      <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
        <h4>Careers</h4>
        <p>
          Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
        </p>
        <p>
          Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
        </p>
        <h4>Offers</h4>
        <p>
          Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
        </p>
        <p>
          Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
        </p>
      </div>
      <div class="col-lg-6 wow fadeInUp">
          <div class="form">     
              <h4>Submit Your Resume</h4>
              <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Full Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Contact Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Contact Phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Tell us something fun about yourself"></textarea>
                  <div class="validation"></div>
                </div>
                <div id="errormessage"></div>
                <form class="form-group">
                  <div class="custom-file">
                    <label class="custom-file-label" for="customFile">Choose your resume file</label>
                    <input type="file" class="custom-file-input" id="customFile">
                    
                  </div>
                </form>
                <div class="text-center" style="margin-top: 20px;"><button type="submit" class="btn" title="Send Message">Send Your Resume</button></div>
              </form>
            </div>
      </div>
    </div>
  </div>
</section>
<!-- End Submit Resume -->

<!-- Available Position -->
<section id="faq">
    <div class="container">
      <header class="section-header">
        <h3>Available Position</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </header>

      <ul id="faq-list" class="wow fadeInUp">
        <li>
          <a data-toggle="collapse" class="collapsed" href="#faq1">Electrical Engineer<i class="ion-android-remove"></i></a>
          <div id="faq1" class="collapse" data-parent="#faq-list">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq2" class="collapsed">Civil Engineer (dams/Water Expert)<i class="ion-android-remove"></i></a>
          <div id="faq2" class="collapse" data-parent="#faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq3" class="collapsed">Mechanical Engineer<i class="ion-android-remove"></i></a>
          <div id="faq3" class="collapse" data-parent="#faq-list">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq4" class="collapsed">Environmental Engineer, Sr.<i class="ion-android-remove"></i></a>
          <div id="faq4" class="collapse" data-parent="#faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq5" class="collapsed">Design Engineer (Electrical – Fire/Protective Systems)<i class="ion-android-remove"></i></a>
          <div id="faq5" class="collapse" data-parent="#faq-list">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq6" class="collapsed">Project Manager<i class="ion-android-remove"></i></a>
          <div id="faq6" class="collapse" data-parent="#faq-list">
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
            </p>
          </div>
        </li>
      </ul>
    </div>
</section>
<!-- End Available Position -->

@endsection
