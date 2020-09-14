@extends('layouts.front')
@section('content')

<section class="pageheader">
         <div class="container">
            <h1>Tours with Sidebar</h1>
            <ul class="breadcrumb list-unstyled">
               <li><a href="#">Home</a></li>
               <li><a href="#">Tour</a></li>
               <li><a href="#">Tour Details</a></li>
            </ul>
         </div>
      </section>

      <section id="tour-details-01" class="section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8">
                  <div class="tour-details-info">
                     <div class="tour-details-title ">
                        <div class="d-flex justify-content-between">
                           <div>
                              <h2><a href="tour-details.html">The Dark Forest Adventure</a></h2>
                              <span class="rating"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i> 2 Reviews</span>
                           </div>
                           <div class="tour-price">
                              <p class="mb-0"><span>$2600</span><br> Per Person</p>
                           </div>
                        </div>
                        <hr>
                        <ul class="tourpackagesummary justify-content-start">
                           <li><a href="#"><i class="fa fa-clock mr-2"></i> 3 Days</a></li>
                           <li class="ml-5"><a href="#"><i class="fa fa-user-circle mr-2"></i>12+</a></li>
                           <li class="ml-5"><a href="#"><i class="fa fa-bookmark mr-2"></i> </a></li>
                           <li class="ml-4">
                                    <div class="tourType">
                                    <a href="javascript:void(0)"><i class="fas fa-campground"></i> View Details</a>
                                     <div class="tourfor show-tourtype">
                                        <i class="far fa-smile-beam" title="Smile"></i>
                                        <i class="far fa-grin-squint" title="happy"></i>
                                        <i class="far fa-surprise" title="surprise"></i>
                                        <i class="far fa-grin-beam-sweat" title="not happy"></i>
                                        <i class="far fa-grin-wink" title="happy"></i>
                                      </div>
                                    </div>
                                  </li>
                        </ul>
                     </div>
                     <div class="tourpackage-slider mt-4">
                        <div class="tourpackage-img">
                           <img src="images/exploritage-img-02.jpg">
                           <a href=""><i class="fa fa-heart"></i></a>
                           <a href="" class="right-fix"><i class="fab fa-youtube"></i></i></a>
                        </div>
                        <div class="tourpackage-img">
                           <img src="images/exploritage-img-03.jpg">
                           <a href=""><i class="fa fa-heart"></i></a>
                           <a href="" class="right-fix"><i class="fab fa-youtube"></i></i></a>
                        </div>
                        <div class="tourpackage-img">
                           <img src="images/exploritage-img-02.jpg">
                           <a href=""><i class="fa fa-heart"></i></a>
                           <a href="" class="right-fix"><i class="fab fa-youtube"></i></i></a>
                        </div>
                        <div class="tourpackage-img">
                           <img src="images/exploritage-img-03.jpg">
                           <a href=""><i class="fa fa-heart"></i></a>
                           <a href="" class="right-fix"><i class="fab fa-youtube"></i></i></a>
                        </div>
                     </div>
                     <div class="tourpackage-nav">
                        <img src="images/exploritage-img-02.jpg">
                        <img src="images/exploritage-img-03.jpg">
                        <img src="images/exploritage-img-02.jpg">
                        <img src="images/exploritage-img-03.jpg">
                     </div>
                     <h3 class="tourpackage-title">Overview</h3>
                     <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form injected. Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros.</p>
                    <div class="my-5">
                     <h3 class="tourpackage-subtitle">Included/Exclude</h3>
                     <div class="row">
                        <div class="col-md-6">
                           <ul class="available list-unstyled">
                              <li>
                                 <i class="fa fa-check mr-2"></i>
                                 Pick and Drop Services
                              </li>
                              <li>
                                 <i class="fa fa-check mr-2"></i>
                                 1 Meal Per Day
                              </li>
                              <li>
                                 <i class="fa fa-check mr-2"></i>
                                 Cruise Dinner &amp; Music Event
                              </li>
                              <li>
                                 <i class="fa fa-check mr-2"></i>
                                 Visit 7 Best Places in the City With Group
                              </li>
                           </ul>
                        </div>
                        <div class="col-md-6">
                           <ul class="unavailable list-unstyled">
                              <li>
                                 <i class="fa fa-times mr-2"></i>
                                 Additional Services
                              </li>
                              <li>
                                 <i class="fa fa-times mr-2"></i>
                                 1 Meal Per Day
                              </li>
                              <li>
                                 <i class="fa fa-times mr-2"></i>
                                 Insurance
                              </li>
                              <li>
                                 <i class="fa fa-times mr-2"></i>
                                 Food &amp; Drinks
                              </li>
                           </ul>
                        </div>
                     </div>
                    </div>
                    <hr>
                    <div class="my-5"> 
                     <h3 class="tourpackage-title">Tour Plan</h3>
                     <div class="tourpackage-plans">
                        <div class="tourpackage-plans-count">
                          <span>01</span>
                        </div>
                        <div class="tourpackage-plans-txt">
                          <h3>Day 1: Arrive South Africa Forest</h3>
                            <span>8:00 am to 10:00 am</span>
                            <p class="my-4">Lorem ipsum available isn but the majority have suffered alteratin in some or form injected. Lorem ipsum is simply free text used by copytyping refreshing. Neque porroest qui dolorem ipsum quia quaed inventore veritatis et quasi dicta sunt explicabo.</p>
                              <ul class="list-unstyled mb-0">
                                <li>Free Drinks</li>
                                <li>Awesome Breakfast</li>
                                <li>5 Star Accommodation</li>
                              </ul>
                            </div>
                        </div>

                        <div class="tourpackage-plans">
                        <div class="tourpackage-plans-count">
                          <span>02</span>
                        </div>
                        <div class="tourpackage-plans-txt">
                          <h3>Day 2: Arrive South Africa Forest</h3>
                            <span>8:00 am to 10:00 am</span>
                            <p class="my-4">Lorem ipsum available isn but the majority have suffered alteratin in some or form injected. Lorem ipsum is simply free text used by copytyping refreshing. Neque porroest qui dolorem ipsum quia quaed inventore veritatis et quasi dicta sunt explicabo.</p>
                              <ul class="list-unstyled mb-0">
                                <li>Free Drinks</li>
                                <li>Awesome Breakfast</li>
                                <li>5 Star Accommodation</li>
                              </ul>
                            </div>
                        </div>

                        <div class="tourpackage-plans">
                        <div class="tourpackage-plans-count">
                          <span>03</span>
                        </div>
                        <div class="tourpackage-plans-txt">
                          <h3>Day 3: Arrive South Africa Forest</h3>
                            <span>8:00 am to 10:00 am</span>
                            <p class="my-4">Lorem ipsum available isn but the majority have suffered alteratin in some or form injected. Lorem ipsum is simply free text used by copytyping refreshing. Neque porroest qui dolorem ipsum quia quaed inventore veritatis et quasi dicta sunt explicabo.</p>
                              <ul class="list-unstyled mb-0">
                                <li>Free Drinks</li>
                                <li>Awesome Breakfast</li>
                                <li>5 Star Accommodation</li>
                              </ul>
                            </div>
                        </div>

                     </div>
                    </div>
                     <hr>
                    <div class="my-5"> 
                     <h3 class="tourpackage-title">Tour Location</h3>
                     <div class="map-location">
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27549.155196968557!2d78.02289399340353!3d30.332631052264166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390929c356c888af%3A0x4c3562c032518799!2sDehradun%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1598418574588!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                     </div>
                    </div>

                    <hr>

                    <div class="my-5"> 
                     <h3 class="tourpackage-title">FAQs</h3>
                     <div class="faq-answer">
                       <div id="faq-answers">
                        <div class="faq-tab">
                           <div class="faq-title" id="headingOne">
                              <h4 class="mb-0">
                                 <a class="d-flex align-items-center" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                  <span class="questions">Why are your tours so expensive?</span>
                                    <span class="plus-icon"> 
                                      <i class="fa fa-plus"></i>
                                    </span>
                                    </a>
                              </h4>
                           </div>
                           
                           <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faq-answers" style="">
                              <div class="pt-4">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                              </div>
                           </div>
                        </div>

                        <div class="faq-tab">
                           <div class="faq-title" id="headingTwo">
                              <h4 class="mb-0">
                                 <a class="d-flex align-items-center" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="questions">Which payment methods are acceptable?</span> 
                                    <span class="plus-icon">
                                      <i class="fa fa-plus"></i>
                                    </span>
                                    </a>
                              </h4>
                           </div>
                           <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faq-answers">
                              <div class="pt-4">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                              </div>
                           </div>
                        </div>
                        <div class="faq-tab">
                           <div class="faq-title" id="headingThree">
                              <h4 class="mb-0">
                                 <a class="d-flex align-items-center" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="questions">How to book the new tour for 2 persons?</span>  
                                    <span class="plus-icon"> 
                                      <i class="fa fa-plus"></i>
                                    </span>
                                    </a>
                              </h4>
                           </div>
                           <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq-answers">
                              <div class="pt-4">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate</p>
                              </div>
                           </div>
                        </div>
                     </div>
                    </div>
                  </div>

                  <div class="my-5"> 
                    <h3 class="tourpackage-title">Reviews Scores</h3>
                    <div class="reviewscore">
                      <div class="reviewscore-info">
                        <div class="reviewscore-title text-center">
                          <h4>7.0</h4>
                          <span class="rating"><i class="fa fa-star active mr-2" aria-hidden="true"></i> Super</span>
                        </div>
                      </div>
                      <div class="reviewscore-01">
                        <div class="reviewscore-bar">
                          <div class="review-score-top d-flex justify-content-between">
                            <h4>Services</h4>
                            <p>50%</p>
                          </div>
                          <div class="reviewscore-bar-line">
                            <span class="bar-percentage" style="width: 50%"></span>
                          </div>
                        </div>

                        <div class="reviewscore-bar mt-4">
                          <div class="review-score-top d-flex justify-content-between">
                            <h4>Comfort</h4>
                            <p>87%</p>
                          </div>
                          <div class="reviewscore-bar-line">
                            <span class="bar-percentage" style="width: 87%"></span>
                          </div>
                        </div>

                        <div class="reviewscore-bar mt-4">
                          <div class="review-score-top d-flex justify-content-between">
                            <h4>Hospitality</h4>
                            <p>63%</p>
                          </div>
                          <div class="reviewscore-bar-line">
                            <span class="bar-percentage" style="width: 63%"></span>
                          </div>
                        </div>

                        <div class="reviewscore-bar mt-4">
                          <div class="review-score-top d-flex justify-content-between">
                            <h4>Food</h4>
                            <p>34%</p>
                          </div>
                          <div class="reviewscore-bar-line">
                            <span class="bar-percentage" style="width: 34%"></span>
                          </div>
                        </div>

                        <div class="reviewscore-bar mt-4">
                          <div class="review-score-top d-flex justify-content-between">
                            <h4>Location</h4>
                            <p>22%</p>
                          </div>
                          <div class="reviewscore-bar-line">
                            <span class="bar-percentage" style="width: 22%"></span>
                          </div>
                        </div>

                        <div class="reviewscore-bar mt-4">
                          <div class="review-score-top d-flex justify-content-between">
                            <h4>Rating</h4>
                            <p>70%</p>
                          </div>
                          <div class="reviewscore-bar-line">
                            <span class="bar-percentage" style="width: 70%"></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="my-5">
                    <div class="clientreview-details">
                      <div class="clientreview-info">
                          <img src="images/exploritage-img-12.jpg">
                          <h4 class="mb-0">Mike Hardson</h4>
                          <p class="mb-0">06 Dec, 2019</p>
                      </div>
                      <h4>Fun Was To Discover This</h4>
                      <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo var lla sed sit amet finibus eros.</p>
                    
                    <div class="row">
                      <div class="col-lg-4 col-sm-4 client-rating">
                        <p>Services<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                        <p class="mb-0">Comfort<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                      </div>
                      <div class="col-lg-4 col-sm-4 client-rating">
                        <p>Services<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                        <p>Comfort<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                      </div>
                      <div class="col-lg-4 col-sm-4 client-rating">
                        <p>Services<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                        <p class="mb-0">Comfort<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="my-5">
                    <div class="clientreview-details">
                      <div class="clientreview-info">
                          <img src="images/exploritage-img-12.jpg">
                          <h4 class="mb-0">Mike Hardson</h4>
                          <p class="mb-0">06 Dec, 2019</p>
                      </div>
                      <h4>Fun Was To Discover This</h4>
                      <p>Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo var lla sed sit amet finibus eros.</p>
                    
                    <div class="row">
                      <div class="col-lg-4 col-sm-4 client-rating">
                        <p>Services<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                        <p class="mb-0">Comfort<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                      </div>
                      <div class="col-lg-4 col-sm-4 client-rating">
                        <p>Services<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                        <p>Comfort<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                      </div>
                      <div class="col-lg-4 col-sm-4 client-rating">
                        <p>Services<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                        <p class="mb-0">Comfort<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                      </div>
                    </div>
                  </div>
                </div>

                <hr>
                <div class="my-5">
                  <h3 class="tourpackage-title">Write a Review</h3>
                <div class="review-form">
                  <div class="contactform">
                    <div class="row">
                      <div class="col-lg-4 col-sm-4 client-rating">
                        <p>Services<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                        <p class="mb-0">Comfort<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                      </div>
                      <div class="col-lg-4 col-sm-4 client-rating">
                        <p>Services<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                        <p>Comfort<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                      </div>
                      <div class="col-lg-4 col-sm-4 client-rating">
                        <p>Services<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                        <p class="mb-0">Comfort<span class="rating ml-3"><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star active mr-2" aria-hidden="true"></i><i class="fa fa-star mr-2" aria-hidden="true"></i></span></p>
                      </div>
                    </div>
                    <form method="post" class="mt-4">
                              <div class="row">
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <input name="uname" type="text" class="form-control" placeholder="Enter Name" required="required">
                                    </div>
                                 </div>
                                 <div class="col-lg-6">
                                    <div class="form-group">
                                       <input name="uemail" type="Email" class="form-control" placeholder="Email Address" required="required">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <input name="phone" type="text" class="form-control" placeholder="Review Title" required="required">
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <div class="form-group">
                                       <textarea name="msg" class="form-control" rows="6" placeholder="Write Message" required="required"></textarea>
                                    </div>
                                 </div>
                                 <div class="col-lg-12">
                                    <button name="submit" type="submit" id="submit" value="Send" class="all-button">Submit A Review</button>
                                 </div>
                              </div>
                           </form>
              </div>
                </div>


                </div>
              </div>

               <div class="col-lg-4">
                  <div class="tour-search">
                     <h3>Book This Tour</h3>
                     <form action="#">
                        <div class="form-group">
                           <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                           <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                           <input type="number" class="form-control" placeholder="Phone">
                        </div>
                        <div class="form-group">
                           <input type="date" class="form-control" placeholder="dd/mm/yy">
                        </div>
                        <div class="form-group">
                           <select class="form-control">
                              <option value="Type">Tickets</option>
                              <option value="Adventure">Adult</option>
                              <option value="Wildlife">Children</option>
                           </select>
                        </div>
                        <div class="form-group">
                           <textarea type="text" class="form-control" placeholder="Message" rows="3"></textarea>
                        </div>
                        <div class="submitbtn">
                           <button type="submit" class="submit-btn">Book Now</button>
                        </div>
                     </form>
                  </div>
                  <div class="tour-sorting-package mr-top">
                     <div class="client-reviews">
                        <h3>Organized By</h3>
                        <div class="client-tour-review mt-4">
                           <img src="images/exploritage-img-11.jpg">
                           <span class="rating"><i class="fa fa-star mr-1" aria-hidden="true"></i> 9.0 Superb</span>
                           <h4 class="mb-0">Mike Hardson</h4>
                           <p class="mb-0">Member Since 2019</p>
                           <h3></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

@endsection
@section('scripts')
@endsection