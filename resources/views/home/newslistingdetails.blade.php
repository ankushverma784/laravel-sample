@extends('layouts.front')
@section('content')
<section class="pageheader">
        <div class="container">
            <h1>News List</h1>
            <ul class="breadcrumb list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">News</a></li>
                <li><a href="#">News Details</a></li>
            </ul>
        </div>
      </section>

      <section id="news-listing-details-01" class="section-padding">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="news-listing-blogs">
                <img src="images/exploritage-img-15.jpg">
                    <div class="blogsdetails">
                      <ul class="tourpackagesummary justify-content-start mb-2">
                        <li><a href="#"><i class="fa fa-user-circle"></i> Admin</a></li>
                        <li class="ml-4"><a href="#"><i class="fa fa-comments"></i> 2 Comments</a></li>
                      </ul>
                      <h3><a href="#">14 Things to see and do when visiting japan</a></h3>
                            <br>
                            <p>Lorem ipsum available isn but the majority have suffered alteratin in some or form injected.
                                Lorem Ipsum. Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum
                                auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. vulputate cursus a sit amet
                                mauris. Morbi accumsan ipsum veliam nec tellus a odio tincidunt auctor.</p>

                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                                alteration in some injected or words which don't look even slightly believable. If you are going
                                to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                                the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined
                                chunks as necessary, making this the first true generator on the Internet. It uses a dictionary
                                of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem
                                Ipsum which looks reasonable. </p>

                            <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has survived not
                                only five centuries, but also the leap into electronic typesetting.</p>

                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                                of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                but also the leap into unchanged. Lorem Ipsum passages publishing.</p>
                                <hr>
                    <div class="more-info d-flex justify-content-between">
                      <div class="tags d-flex">
                        <div class="news-listing-tags">
                          <span>Tags:</span>
                          <a href="#">Tour</a>
                          <a href="#">Travel</a>
                          <a href="#">beach</a>
                        </div>
                      </div>
                      <div class="sociallinks d-flex justify-content-center">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                          <a href="#"><i class="fab fa-twitter"></i></a>
                          <a href="#"><i class="fab fa-instagram"></i></a>
                          <a href="#"><i class="fab fa-dribbble"></i></a>
                      </div>
                    </div>
                        </div>

                    </div>

                  <div class="author-details">
                    <div class="d-flex">
                      <img src="images/exploritage-img-16.jpg">
                      <div class="author-info">
                        <h3>Christine Eve</h3>
                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining unchanged. It was popularised in the sheets containing.</p>
                      </div>
                    </div>
                  </div>

                  <div class="blogs-review mr-top">
                    <h3 class="common-title">2 Comments</h3>
                    <div class="blogs-review-info">
                      <div class="blogs-review-img">
                        <img src="images/exploritage-img-17.jpg">
                      </div>
                      <div class="blogs-review-content">
                        <h3 class="news-listing-subtitle">Kevin Martin</h3>
                        <p class="mb-0">It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It was popularised in the sheets containing lorem ipsum is simply free text available in the martket to use now.</p>
                      <a class="replybtn" href="#">REPLY</a>
                      </div>
                    </div>

                    <div class="blogs-review-info">
                      <div class="blogs-review-img">
                        <img src="images/exploritage-img-17.jpg">
                      </div>
                      <div class="blogs-review-content">
                        <h3 class="news-listing-subtitle">Kevin Martin</h3>
                        <p class="mb-0">It has survived not only five centuries, but also the leap into electronic typesetting unchanged. It was popularised in the sheets containing lorem ipsum is simply free text available in the martket to use now.</p>
                      <a class="replybtn" href="#">REPLY</a>
                      </div>
                    </div>
                  </div>

                  <div class="mr-top">
                    <h3 class="common-title">Leave a Comment</h3>
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
       
            <div class="col-lg-4 md-margin">
              <div class="news-listing-details">
                <div class="news-listing-search blue-bg-color">
                  <form action="#">
                    <input type="search" placeholder="Search" class="form-control">
                    <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>

                <div class="news-listing-posts mr-top">
                  <h3 class="news-listing-subtitle">Recent Posts</h3>
                  <ul class="news-post-listing list-unstyled">
                    <li>
                      <div class="news-listing-posts-img">
                        <img src="images/exploritage-img-14.jpg" alt="">
                      </div>
                      <div class="news-listing-posts-content">
                        <h3><a href="#">14 Things to see and do when visiting japan</a></h3>
                      </div>
                    </li>

                    <li>
                      <div class="news-listing-posts-img">
                        <img src="images/exploritage-img-14.jpg" alt="">
                      </div>
                      <div class="news-listing-posts-content">
                        <h3><a href="#">Journeys are best measured in new friends</a></h3>
                      </div>
                    </li>

                    <li>
                      <div class="news-listing-posts-img">
                        <img src="images/exploritage-img-14.jpg" alt="">
                      </div>
                      <div class="news-listing-posts-content">
                        <h3><a href="#">Travel the most beautiful places in the world</a></h3>
                      </div>
                    </li>
                  </ul>
                </div>


                <div class="news-listing-posts mr-top">
                  <h3 class="news-listing-subtitle">Recent Posts</h3>
                  <ul class="service-icons list-unstyled mb-0">
                    <li><a href="">Trip & Tours</a></li>
                    <li><a href="">Traveling</a></li>
                    <li><a href="">Adventures</a></li>
                    <li><a href="">National Parks</a></li>
                    <li><a href="">Beaches and Sea</a></li>
                  </ul>
                </div>

                <div class="news-listing-posts mr-top">
                  <h3 class="news-listing-subtitle">Recent Posts</h3>
                  <div class="news-listing-tags">
                    <a href="#">Tour</a>
                    <a href="#">Travel</a>
                    <a href="#">beach</a>
                    <a href="#">Mountain</a>
                    <a href="#">Adventures</a>
                    <a href="#">parks</a>
                    <a href="#">Museums</a>
                  </div>
                </div>

                <div class="news-listing-posts blue-bg-color mr-top">
                  <h3 class="news-listing-subtitle color-white">Tweets</h3>
                  <div class="tweetsreview">
                    <div class="news-listing-tweets">
                      <p><a href="#">@Layerdrops</a> Let’s Now You Personalized Service for Your Most Valuable Assets. <a href="#">http://yhdj58.tp8/JK</a></p>
                      <h4><span class="rating"><i class="fab fa-twitter mr-2"></i></span> <a href="#">Exploritage</a> <span>-</span> 16 Jan, 2019</h4>
                    </div>

                    <div class="news-listing-tweets">
                      <p><a href="#">@Layerdrops</a> Let’s Now You Personalized Service for Your Most Valuable Assets. <a href="#">http://yhdj58.tp8/JK</a></p>
                      <h4><span class="rating"><i class="fab fa-twitter mr-2"></i></span> <a href="#">Exploritage</a> <span>-</span> 16 Jan, 2019</h4>
                    </div>

                    <div class="news-listing-tweets">
                      <p><a href="#">@Layerdrops</a> Let’s Now You Personalized Service for Your Most Valuable Assets. <a href="#">http://yhdj58.tp8/JK</a></p>
                      <h4><span class="rating"><i class="fab fa-twitter mr-2"></i></span> <a href="#">Exploritage</a> <span>-</span> 16 Jan, 2019</h4>
                    </div>
                  </div>
                </div>

                <div class="news-listing-posts mr-top">
                  <h3 class="news-listing-subtitle">Follow Us</h3>
                  <div class="sociallinks d-flex justify-content-center">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-dribbble"></i></a>
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