@extends('layouts.frontmaster')
@section('title','contact us')

@section('content')
    <div class="breadcrumb about-breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4">
                    <div class="part-txt">
                        <h1>contact Us</h1>
                        <ul>
                            <li><a style="color:#ffffff !important;" href="{{url('/')}}">Home</a></li>
                            <li>-</li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact">
        <div class="container">
            <div class="boxes">
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-7">
                        <div class="single-box">
                            <div class="part-icon">
                                <span><i class="flaticon-phone-call"></i></span>
                            </div>
                            <div class="part-txt">
                                <h3>Phone</h3>
                                <span> +2348033033397</span>
                                <span>+2348052890114</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-7">
                        <div class="single-box">
                            <div class="part-icon">
                                <span><i class="flaticon-message"></i></span>
                            </div>
                            <div class="part-txt">
                                <h3>Email Us</h3>
                                <span><a style="color:#4b4b46" href="mailto:info@sojon.com.ng"
                                     >info@sojon.com.ng</a></span>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-7">
                        <div class="single-box">
                            <div class="part-icon">
                                <span><i class="flaticon-pin"></i></span>
                            </div>
                            <div class="part-txt">
                                <h3>Our Address</h3>
                                <span>5 Adekunle Deen, Sari Iganmu, Lagos.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <form class="form" method="post" action="{{route('email.send')}}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-xl-5 col-lg-5 col-md-6">
                                <input type="text" name="firstname"
                                       placeholder="First Name*"
                                       required>
                            </div>
                            <div class="col-xl-5 col-lg-5 col-md-6">
                                <input type="text" name="lastname"
                                       placeholder="Last Name*"
                                       required>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <input type="email" name="email"
                                       placeholder="Email*"
                                       required>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <input type="text" name="subject"
                                       placeholder="Subject*"
                                       required>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                        <textarea placeholder="Message" name="message"
                                  required></textarea>
                                <button type="submit" class="def-btn def-btn-2">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 col-lg-6 pt-lg-5 pt-md-5" >

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.3669189261045!2d3.3399202140939597!3d6.475123525521912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8bfc463f71df%3A0x89890685ba4ddbc6!2s5%20Adekunle%20Deen%20St%2C%20Amukoko%20102272%2C%20Lagos!5e0!3m2!1sen!2sng!4v1633098133479!5m2!1sen!2sng" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    {{-- <div class="part-img">
                        <img src="assets/images/service-img-1.png"
                             alt="image">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@stop
