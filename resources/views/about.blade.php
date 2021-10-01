@extends('layouts.frontmaster')
@section('title','About Sojon Construction Company')

@section('content')

  `  <div class="breadcrumb about-breadcrumb" style="margin-top:-25px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3">
                    <div class="part-txt">
                        <h1>About Us</h1>
                        <ul>
                            <li><a style="color:#ffffff !important;" href="{{url('/')}}">Home</a></li>
                            <li>-</li>
                            <li>About us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
`
    <div class="about about-inner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-9">
                    <div class="image-box">
                        <div class="part-img">
                            <img src="{{asset('assets/images/about-img.jpg')}}"
                                 alt="image">
                        </div>
                        <div class="fun-fact-inner">
                            <div class="single-box">
                                <h4><span class="odometer"
                                          data-count="4.8">0</span>+</h4>
                                <p style="color: #fff">
                                    <span>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                        <i class="flaticon-star"></i>
                                    </span>
                                    Well Rated
                                </p>
                            </div>
                            <div class="single-box">
                                <h4 style="color: #fff"><span class="odometer"
                                          data-count="7">0</span>K+</h4>
                                <p style="color: #fff">Successfully Completed Supplies</p>
                            </div>
                            <div class="single-box">
                                <h4 style="color: #fff"><span class="odometer"
                                          data-count="17">0</span>+</h4>
                                <p style="color: #fff">Expert Team Members</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-9">
                    <div class="part-txt">
                        <div class="heading">
                            <h5>About Us</h5>
                            <h2>We Believe That Quality Of Services Matters</h2>
                        </div>
                        <p class="text-justify">
                            SCCNL was founded by Engr. James O. Nwachukwu and was incorporated on the 5th of December, 1990. SCCNL created a niche in the manufacturing industrial supply business since 1995 and have continued to wax greatly up till date.

                            The company has shown great expertise in the area of industrial installations, servicing, repair, maintenance and supply of essential parts for food and beverage industries across the country.

                            In order to deliver exceptional services, SCCNL has invested in several technical partnerships and franchise across reputable companies in Europe, as we also stock mechanical and automation products, converyor parts which include industrial stainless stell pipes for oil and gas as well as food and beverages industry.

                            We derive so much pleasure in ensuring that our stakeholders are fully satisfied in all ramifications of our services, especially in the area of procuring and supply of genuine products from world class manufacturing companies. These products are engineered to meet the needs and expectations of our highly esteemed customers.


                        </p>

                          @include('layouts.partials._signature')
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="process-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5">
                    <div class="heading heading-2">
                        <h5>How It Works</h5>
                        <h2>Our Working Process</h2>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <span class="icon"><i class="flaticon-thinking"></i></span>
                            <span class="no">01</span>
                        </div>
                        <div class="part-txt">
                            <h3>Thinking</h3>
                            <p>We offer well thought out highest quality products, from the world’s leading
                                manufacturers, at the most competitive prices in the market.</p>
                        </div>
                        <div class="arrow">
                            <img src="assets/images/arrow.png"
                                 alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <span class="icon"><i class="flaticon-analysis"></i></span>
                            <span class="no">02</span>
                        </div>
                        <div class="part-txt">
                            <h3>Store </h3>
                            <p>
                                Sojon Store is a working space created to leverage unsold products in our distributors’
                                inventories and timely meet the most urgent needs for specific items at competitive prices.
                            </p>
                        </div>
                        <div class="arrow rotate">
                            <img src="assets/images/arrow.png"
                                 alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <span class="icon"><i class="flaticon-wireframe"></i></span>
                            <span class="no">03</span>
                        </div>
                        <div class="part-txt">
                            <h3>Marketing</h3>
                            <p>
                                Our team of sales agents are looking forward to answering
                                any inquiry regarding the wide range of industrial automation products and brands we deal with.
                            </p>
                        </div>
                        <div class="arrow">
                            <img src="assets/images/arrow.png"
                                 alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-6">
                    <div class="single-box">
                        <div class="part-icon">
                            <span class="icon"><i class="flaticon-vector"></i></span>
                            <span class="no">04</span>
                        </div>
                        <div class="part-txt">
                            <h3>Supply</h3>
                            <p>
                                Sojon company  respond quickly
                                and efficiently to every need. We help customers save time and money
                                by supplying them the right products to keep their facilities up and running.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts/partials/_projectslider')

@stop

