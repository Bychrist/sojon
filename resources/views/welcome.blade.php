@extends('layouts.frontmaster')
@section('title','Sojon Construction Company Limited')

@section('content')

    <div class="banner-2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="banner-txt">
                        <h4>Welcome To Sojon  Limited</h4>
                        <h1>Whole Sale Products Available</h1>
                        <p>Industrial Brands Supplies, Trusted Brands & Expertise</p>
                        <div class="btn-box">
                            <a href="{{url('about')}}" class="left-btn">About Us</a>
                            <a href="{{url('contact')}}" class="right-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 col-md-6">
                    <div class="part-img">
                        <img src="{{asset('assets/images/banner-img-2.png')}}" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="feature">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <span>
                                <i class="flaticon-technology"></i>
                            </span>
                        </div>
                        <div class="part-txt">
                            <h3>Global Industrial Supplies</h3>
                            <p>Sojon Company Limited is a leading supplier of industrial products for all of your MRO (maintenance repair and
                                operating) replacement parts.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <span>
                                <i class="flaticon-gear"></i>
                            </span>
                        </div>
                        <div class="part-txt">
                            <h3>Worry Free Experience</h3>
                            <p>We provide top-notch service to our customers in the industrial automation industry while understanding
                                their requirements for swift response, fast delivery and best pricing.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <span>
                                <i class="flaticon-bar-chart"></i>
                            </span>
                        </div>
                        <div class="part-txt">
                            <h3>Performance Scale</h3>
                            <p>Efficiency and effectiveness is the emphasis in what we do. We manage to always guarantee timely product availability and delivery at the best prices to our valued customer </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="about about-2">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="part-img">
                        <img src="{{asset('assets/images/about-img.png')}}" alt="image">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="part-txt">
                        <div class="heading">
                            <h5>About Us</h5>
                            <h2>We Believe That Quality Of Services Matters</h2>
                        </div>
                        <p>To build great expertise through relevant global technical partnership for the purpose of giving the best support and
                            high level maintenance culture to industries across Nigeria and Africa.</p>
                        <a href="{{url('about')}}" class="def-btn">Read More</a>
                        @include('layouts.partials._signature')
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="partner partner-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-9">
                    <div class="heading heading-2">
                        <h5>Our Partner</h5>
                        <h2>Competitive price from world class manufacturers.</h2>
                        <p>Do not hesitate to contact us! Receive immediately a full and clear answer to all your requests.We are the go-to-company of repute. That delivers service excellence and prompt solutions to the best of manufacturing
                            industries in Nigeria and beyond.</p>
                    </div>
                </div>
            </div>
           @include('layouts/partials/_sliderproduct')
        </div>
    </div>




   @include('layouts/partials/_projectslider')


    <div class="team" style="margin-top:-100px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="heading">
                        <h5>OUR Team</h5>
                        <h2>Our Creative Team Member</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-box">
                        <div class="part-img">
                            <img src="assets/images/team-1.jpg" alt="image">
                        </div>
                        <div class="part-txt">
                            <div class="txt">
                                <div class="title">
                                    <a href="team-details.html">Sandra Willson</a>
                                    <span>Chief Operating Officer</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum as ailable, but the majority</p>
                                <div class="social">
                                    <a href="#" class="fb"><i class="flaticon-facebook"></i></a>
                                    <a href="#" class="tw"><i class="flaticon-twitter"></i></a>
                                    <a href="#" class="ld"><i class="flaticon-linkedin"></i></a>
                                    <a href="#" class="ggl"><i class="flaticon-google-plus-logo"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-box">
                        <div class="part-img">
                            <img src="assets/images/team-2.jpg" alt="image">
                        </div>
                        <div class="part-txt">
                            <div class="txt">
                                <div class="title">
                                    <a href="team-details.html">Steve Parkar</a>
                                    <span>Graphic Designer</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum as ailable, but the majority</p>
                                <div class="social">
                                    <a href="#" class="fb"><i class="flaticon-facebook"></i></a>
                                    <a href="#" class="tw"><i class="flaticon-twitter"></i></a>
                                    <a href="#" class="ld"><i class="flaticon-linkedin"></i></a>
                                    <a href="#" class="ggl"><i class="flaticon-google-plus-logo"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-box">
                        <div class="part-img">
                            <img src="assets/images/team-3.jpg" alt="image">
                        </div>
                        <div class="part-txt">
                            <div class="txt">
                                <div class="title">
                                    <a href="team-details.html">Vanessa Lucky</a>
                                    <span>HTML Developer</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum as ailable, but the majority</p>
                                <div class="social">
                                    <a href="#" class="fb"><i class="flaticon-facebook"></i></a>
                                    <a href="#" class="tw"><i class="flaticon-twitter"></i></a>
                                    <a href="#" class="ld"><i class="flaticon-linkedin"></i></a>
                                    <a href="#" class="ggl"><i class="flaticon-google-plus-logo"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6">
                    <div class="single-box">
                        <div class="part-img">
                            <img src="assets/images/team-4.jpg" alt="image">
                        </div>
                        <div class="part-txt">
                            <div class="txt">
                                <div class="title">
                                    <a href="team-details.html">Miller Wilson</a>
                                    <span>Chief brand officer</span>
                                </div>
                                <p>There are many variations of passages of Lorem Ipsum as ailable, but the majority</p>
                                <div class="social">
                                    <a href="#" class="fb"><i class="flaticon-facebook"></i></a>
                                    <a href="#" class="tw"><i class="flaticon-twitter"></i></a>
                                    <a href="#" class="ld"><i class="flaticon-linkedin"></i></a>
                                    <a href="#" class="ggl"><i class="flaticon-google-plus-logo"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@stop
