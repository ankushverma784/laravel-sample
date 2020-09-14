@extends('layouts.front')
@section('content')
<section id="home-01" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 header-heading">
                <h1>Find your <span>next tour</span></h1>
                <p>Where would you like to go?</p>
            </div>
        </div>

        <div class="headerform">
            <form class="e" action="tour-sidebar.html">
                <div class="d-flex justify-content-between">
                    <div class="hforminput">
                        <label>WHERE TO</label>
                        <input type="text" class="form-control" name="where" placeholder="Enter Keywords">
                    </div>
                    <div class="hforminput">
                        <label>WHEN</label>
                        <input type="text" class="form-control" name="where" placeholder="September">
                    </div>
                    <div class="hforminput">
                        <label>TYPE</label>
                        <select class="form-control">
                            <option>Adventure</option>
                            <option>Wildlife</option>
                            <option>Sightseeing</option>
                        </select>
                    </div>
                    <div class="headerformbtn">
                        <button type="button" value="submit">Find Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section id="home-02">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-heading text-center">
                <span class="headingtitle">CALL OUR AGENTS TO BOOK!</span>
                <h2>Tripo Award Winning and Top <br>Rated Tour Operator</h2>
            </div>
        </div>
    </div>
</section>

<section id="home-03">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="servicedetails">
                    <i class="fa fa-tripadvisor"></i>
                    <h3>8000+ Our Local <br>Guides</h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="servicedetails">
                    <i class="fa fa-tripadvisor"></i>
                    <h3>100% Trusted Tour<br> Agency</h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="servicedetails">
                    <i class="fa fa-tripadvisor"></i>
                    <h3>28+ Years of Travel<br>Experience</h3>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="servicedetails">
                    <i class="fa fa-tripadvisor"></i>
                    <h3>98% Our Travelers <br>are Happy</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-04" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-heading text-center">
                <span class="headingtitle">FEATURED TOURS</span>
                <h2>Most Popular Tours</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="tourpackage">
                    <div class="tourpackageimg">
                    <img src="{{asset('front/images/exploritage-img-02.jpg')}}">
                        <a href=""><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="tourpackageinfo">
                        <span class="rating"><i class="fa fa-star mr-2" aria-hidden="true"></i> 8.0 Superb</span>
                        <h3><a href="">National Park 2 Days Tour</a></h3>
                        <p><span>$1870</span> / Per Person</p>

                        <ul class="tourpackagesummary">
                            <li><a href="#"><i class="fa fa-clock-o"></i> 3<br> Days</a></li>
                            <li class="ml-5"><a href="#"><i class="fa fa-user-circle"></i> <br>12+</a></li>
                            <li class="ml-5"><a href="#"><i class="fa fa-map"></i> Los <br>Angeles</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="tourpackage">
                    <div class="tourpackageimg">
                    <img src="{{asset('front/images/exploritage-img-02.jpg')}}">
                        <a href=""><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="tourpackageinfo">
                        <span class="rating"><i class="fa fa-star mr-2" aria-hidden="true"></i> 8.0 Superb</span>
                        <h3><a href="">The Dark Forest Adventure</a></h3>
                        <p><span>$1870</span> / Per Person</p>

                        <ul class="tourpackagesummary">
                            <li><a href="#"><i class="fa fa-clock-o"></i> 3<br> Days</a></li>
                            <li class="ml-5"><a href="#"><i class="fa fa-user-circle"></i> <br>12+</a></li>
                            <li class="ml-5"><a href="#"><i class="fa fa-map"></i> Los <br>Angeles</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="tourpackage">
                    <div class="tourpackageimg">
                    <img src="{{asset('front/images/exploritage-img-02.jpg')}}">
                        <a href=""><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="tourpackageinfo">
                        <span class="rating"><i class="fa fa-star mr-2" aria-hidden="true"></i> 8.0 Superb</span>
                        <h3><a href="">Discover Depth of Beach</a></h3>
                        <p><span>$1870</span> / Per Person</p>

                        <ul class="tourpackagesummary">
                            <li><a href="#"><i class="fa fa-clock-o"></i> 3<br> Days</a></li>
                            <li class="ml-5"><a href="#"><i class="fa fa-user-circle"></i> <br>12+</a></li>
                            <li class="ml-5"><a href="#"><i class="fa fa-map"></i> Los <br>Angeles</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mr-top">
                <div class="tourpackage">
                    <div class="tourpackageimg">
                    <img src="{{asset('front/images/exploritage-img-02.jpg')}}">
                        <a href=""><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="tourpackageinfo">
                        <span class="rating"><i class="fa fa-star mr-2" aria-hidden="true"></i> 8.0 Superb</span>
                        <h3><a href="">National Park 2 Days Tour</a></h3>
                        <p><span>$1870</span> / Per Person</p>

                        <ul class="tourpackagesummary">
                            <li><a href="#"><i class="fa fa-clock-o"></i> 3<br> Days</a></li>
                            <li class="ml-5"><a href="#"><i class="fa fa-user-circle"></i> <br>12+</a></li>
                            <li class="ml-5"><a href="#"><i class="fa fa-map"></i> Los <br>Angeles</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mr-top">
                <div class="tourpackage">
                    <div class="tourpackageimg">
                        <img src="{{asset('front/images/exploritage-img-02.jpg')}}">
                        <a href=""><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="tourpackageinfo">
                        <span class="rating"><i class="fa fa-star mr-2" aria-hidden="true"></i> 8.0 Superb</span>
                        <h3><a href="">National Park 2 Days Tour</a></h3>
                        <p><span>$1870</span> / Per Person</p>

                        <ul class="tourpackagesummary">
                            <li><a href="#"><i class="fa fa-clock-o"></i> 3<br> Days</a></li>
                            <li class="ml-5"><a href="#"><i class="fa fa-user-circle"></i> <br>12+</a></li>
                            <li class="ml-5"><a href="#"><i class="fa fa-map"></i> Los <br>Angeles</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mr-top">
                <div class="tourpackage">
                    <div class="tourpackageimg">
                        <img src="{{asset('front/images/exploritage-img-02.jpg')}}">
                        <a href=""><i class="fa fa-heart"></i></a>
                    </div>
                    <div class="tourpackageinfo">
                        <span class="rating"><i class="fa fa-star mr-2" aria-hidden="true"></i> 8.0 Superb</span>
                        <h3><a href="">National Park 2 Days Tour</a></h3>
                        <p><span>$1870</span> / Per Person</p>

                        <ul class="tourpackagesummary">
                            <li><a href="#"><i class="fa fa-clock-o"></i> 3<br> Days</a></li>
                            <li class="ml-5"><a href="#"><i class="fa fa-user-circle"></i> <br>12+</a></li>
                            <li class="ml-5"><a href="#"><i class="fa fa-map"></i> Los <br>Angeles</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-05">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="#"><i class="fa fa-play"></i></a>
                <p>Love where you're going</span>
                    <h3><span>Tripo</span> is a World Leading<br>
                        Online<span> Tour Booking Platform</span></h3>
            </div>
        </div>
    </div>
</section>

<section id="home-06">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 section-heading">
                <div class="bgafter">
                    <div class="padding-top margin-bottom">
                        <span class="headingtitle">TRUSTED & PROFESSIONAL</span>
                        <h3>We’re Trusted by More Than <span class="counter">84,106</span> Clients</h3>
                    </div>
                    <img class="clientinfoimg" src="{{asset('front/images/exploritage-img-02.jpg')}}">
                    <span class="userquotes">We only chosse the best<br>one for you</span>
                </div>
            </div>
            <div class="col-lg-6 section-heading">
                <div class="padding-top text-end">
                <img src="{{asset('front/images/exploritage-img-05.jpg')}}">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-07" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-heading text-center">
                <span class="headingtitle">CHECKOUT FEATURED</span>
                <h3>Top Destinations</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="destinationinfo">
                    <div class="destinationimg">
                        <img src="{{asset('front/images/exploritage-img-03.jpg')}}">
                        <a href="#"><span class="destinationtitle">Maldives</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="destinationinfo">
                    <div class="destinationimg">
                        <img src="{{asset('front/images/exploritage-img-03.jpg')}}">
                        <a href="#"><span class="destinationtitle">Africa</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="destinationinfo">
                    <div class="destinationimg">
                        <img src="{{asset('front/images/exploritage-img-03.jpg')}}">
                        <a href="#"><span class="destinationtitle">Egypt</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-08" class="section-padding border-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="ourpartners">
                    <img src="{{asset('front/images/exploritage-img-06.png')}}">
                    <img src="{{asset('front/images/exploritage-img-06.png')}}">
                    <img src="{{asset('front/images/exploritage-img-06.png')}}">
                    <img src="{{asset('front/images/exploritage-img-06.png')}}">
                    <img src="{{asset('front/images/exploritage-img-06.png')}}">
                    <img src="{{asset('front/images/exploritage-img-06.png')}}">
                    <img src="{{asset('front/images/exploritage-img-06.png')}}">
                    <img src="{{asset('front/images/exploritage-img-06.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-09" class="section-padding bg-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-heading text-center">
                <span class="headingtitle">CHECKOUT OUR</span>
                <h3>Top Tour Reviews</h3>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <div class="clientreview">
                <div class="clienttestimonial">
                    <div class="testimonialdetails">
                        <p class="rating"><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i> </p>
                        <p>There are many variations of passages of lorem ipsum but the majority have alteration in some
                            form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                    </div>
                    <div class="clientdetails text-center">
                        <img src="{{asset('front/images/exploritage-img-07.png')}}">
                        <h3>Mike Hardson</h3>
                    </div>
                </div>

                <div class="clienttestimonial">
                    <div class="testimonialdetails">
                        <p class="rating"><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i> </p>
                        <p>There are many variations of passages of lorem ipsum but the majority have alteration in some
                            form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                    </div>
                    <div class="clientdetails text-center">
                        <img src="{{asset('front/images/exploritage-img-07.png')}}">
                        <h3>Mike Hardson</h3>
                    </div>
                </div>

                <div class="clienttestimonial">
                    <div class="testimonialdetails">
                        <p class="rating"><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i> </p>
                        <p>There are many variations of passages of lorem ipsum but the majority have alteration in some
                            form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                    </div>
                    <div class="clientdetails text-center">
                        <img src="{{asset('front/images/exploritage-img-07.png')}}">
                        <h3>Mike Hardson</h3>
                    </div>
                </div>

                <div class="clienttestimonial">
                    <div class="testimonialdetails">
                        <p class="rating"><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i> </p>
                        <p>There are many variations of passages of lorem ipsum but the majority have alteration in some
                            form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                    </div>
                    <div class="clientdetails text-center">
                        <img src="{{asset('front/images/exploritage-img-07.png')}}">
                        <h3>Mike Hardson</h3>
                    </div>
                </div>

                <div class="clienttestimonial">
                    <div class="testimonialdetails">
                        <p class="rating"><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i><i class="fa fa-star mr-2"></i> </p>
                        <p>There are many variations of passages of lorem ipsum but the majority have alteration in some
                            form, by randomised words look. Aene an commodo ligula eget dolorm sociis.</p>
                    </div>
                    <div class="clientdetails text-center">
                        <img src="{{asset('front/images/exploritage-img-07.png')}}">
                        <h3>Mike Hardson</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="home-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="moreabout">
                    <h3><span class="counter">22</span>+</h3>
                    <p>Professional Tour Guides</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="moreabout">
                    <h3><span class="counter">84</span>K</h3>
                    <p>Tours are <br>Completed</p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="moreabout">
                    <h3><span class="counter">17</span>+</h3>
                    <p>Traveling <br>Experience</p>
                </div>
            </div>
            <div class="col-lg-3 text-end">
                <div class="moreabout">
                    <h3><span class="counter">88</span>+</h3>
                    <p>Happy Customers</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section id="home-011" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-heading text-center">
                <span class="headingtitle">CHECK OUT OUR</span>
                <h3>Latest News & Articles</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="ourblogs">
                    <div class="blogsimg">
                        <img src="{{asset('front/images/exploritage-img-02.jpg')}}">
                    </div>
                    <div class="blogsdetails">
                        <ul class="tourpackagesummary">
                            <li><a href="#"><i class="fa fa-user-circle"></i> Admin</a></li>
                            <li class="ml-4"><a href="#"><i class="fa fa-comments"></i> 2 Comments</a></li>
                        </ul>
                        <h3><a href="#">14 Things to see and do when visiting japan</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="ourblogs">
                    <div class="blogsimg">
                        <img src="{{asset('front/images/exploritage-img-02.jpg')}}">
                    </div>
                    <div class="blogsdetails">
                        <ul class="tourpackagesummary">
                            <li><a href="#"><i class="fa fa-user-circle"></i> Admin</a></li>
                            <li class="ml-4"><a href="#"><i class="fa fa-comments"></i> 2 Comments</a></li>
                        </ul>
                        <h3><a href="#">Journeys are best measured in new friends</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="ourblogs">
                    <div class="blogsimg">
                        <img src="{{asset('front/images/exploritage-img-02.jpg')}}">
                    </div>
                    <div class="blogsdetails">
                        <ul class="tourpackagesummary">
                            <li><a href="#"><i class="fa fa-user-circle"></i> Admin</a></li>
                            <li class="ml-4"><a href="#"><i class="fa fa-comments"></i> 2 Comments</a></li>
                        </ul>
                        <h3><a href="#">Travel the most beautiful places in the world</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('scripts')
@endsection