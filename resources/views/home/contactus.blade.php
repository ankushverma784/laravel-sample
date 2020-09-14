
@extends('layouts.front')
@section('content')


    <section class="pageheader">
      	<div class="container">
      		<h1>Contact Us</h1>
      		<ul class="breadcrumb list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
      	</div>
      </section>

      <section id="contact_us-02">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 section-heading">
              <span class="headingtitle">CONTACT WITH US</span>
              <h3>HELP IS JUST A FEW TAPS AWAY</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 contactform_details">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27549.155196968557!2d78.02289399340353!3d30.332631052264166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390929c356c888af%3A0x4c3562c032518799!2sDehradun%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1598418574588!5m2!1sen!2sin" width="100%" height="480" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-lg-6">
                  <div class="contact-info mb-3">
                    <a href="#"><i class="fas fa-map-marked-alt color1"></i></a>
                    <div class="contactdetail">
                      <p>77 Broklyn Street, D Capital Road New York. USA 6666</p>
                    </div>
                  </div>

                  <div class="contact-info">
                    <a href="#"><i class="fas fa-phone-volume color2"></i></a>
                    <div class="contactdetail">
                      <p>Local: <a href="tel:666 999 0000"> 666 999 0000</a></p>
                      <p>Mobile: <a href="tel:+ 123 456">  + 123 456 hello</a></p>
                    </div>
                  </div>

                  <div class="contact-info mt-3">
                    <a href="#"><i class="fas fa-envelope-open-text color3"></i></a>
                    <div class="contactdetail">
                      <p><a href="mailto:connect@exploritage.com">connect@exploritage.com</a></p>
                      <p><a href="mailto:info@exploritage.com">info@exploritage.com</a></p>
                    </div>
                  </div>
                  <div class="contact-type mt-4">
                    <h4>Follow Us On </h4>
                  <div class="sociallinks d-flex">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-dribbble"></i></a>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact_us-03" class="section-padding bg-color">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 section-heading">
              <span class="headingtitle">CONTACT WITH US</span>
              <h3>Get In Touch With Us</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="contactform">
               <form method="post">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <input name="uname" type="text" class="form-control" placeholder="Your Name" required="required">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <input name="uemail" type="Email" class="form-control" placeholder="Email Address" required="required">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <input name="phone" type="number" class="form-control" placeholder="Phone Number" required="required">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <input name="subject" type="text" class="form-control" placeholder="Subject" required="required">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <textarea name="msg" class="form-control" rows="6" placeholder="Write Message" required="required"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <button name="submit" type="submit" id="submit" value="Send" class="all-button">Send Enquiry</button>
                                 </div>
                              </div>
                           </form>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection
@section('scripts')
@endsection