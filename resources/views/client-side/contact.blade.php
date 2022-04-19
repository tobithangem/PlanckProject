@extends('client-side.layouts.app')
@section('contact', 'active-nav')
@section('header-not-home', 'header-add-class') 

@section('content')

<section id="features" class="section-form">
    <div class="container">

      <div class="row feature-item">
        <div class="col-lg-6 wow fadeInUp">
            <div class="form">     
                <h4>Send us a message</h4>
                <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>
                <form action="" method="post" role="form" class="contactForm">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                    <div class="validation"></div>
                  </div>
                  <div id="errormessage"></div>
                  <div class="text-center"><button type="submit" class="btn" title="Send Message">Send Message</button></div>
                </form>
              </div>
        </div>
        <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
          <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
          <p>
            Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
          </p>
          <p>
            Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
          </p>
        </div>
      </div>

      <div class="row feature-item mt-5 pt-5">
        <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.669826796919!2d105.79736971440764!3d21.04589309257024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab3cbb4ca2c1%3A0x3ad9f03e0f43ad17!2zMTQ3IEhvw6BuZyBRdeG7kWMgVmnhu4d0LCBOZ2jEqWEgxJDDtCwgQ-G6p3UgR2nhuqV5LCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1649151571865!5m2!1svi!2s" 
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
          <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
          <p>
           Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt. 
          </p>
          <p>
            Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
          </p>
          <p>
            Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
          </p>
        </div>
        
      </div>

    </div>
</section>

@endsection