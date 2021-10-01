<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('assets/css/animate-2.css')}}">

    <link rel="stylesheet" href="{{asset('assets/flaticon/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/flags.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/odometer.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

<div class="preloader">
    <div class="loader"><img src="{{asset('assets/images/spinner.gif')}}" alt="image"></div>
</div>


<div class="header">
    <div class="top-header">
        <div class="container">
            <div class="row no-gutters justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-5 col-sm-8">
                    <div class="top-left">
                        <ul>
                            <li><i class="flaticon-message white" style="color: #fff;"></i><span><a
                                        href="mailto:info@sojon.com.ng" class="__cf_email__" style="color: #fff;"
                                    >info@sojon.com.ng</a></span>
                            </li>
                            <li><i class="flaticon-phone-call white" style="color: #fff;"></i><span>+2348052890114, +2348033033397</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-4 d-flex justify-content-sm-end justify-content-center">
                    <div class="top-right">
                        <a target="_blank" href="https://web.facebook.com/itssojonofficial" class="fb"><i class="flaticon-facebook"></i></a>
                        <a target="_blank" href="https://twitter.com/itssojonofficia" class="tw"><i class="flaticon-twitter"></i></a>
                        <a target="_blank" href="https://www.instagram.com/itssojonofficial" class="pin"><i class="flaticon-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="bg">
            <div class="container">
                <div class="bg-2">
                    <div class="bg-3">
                        <div class="row">
                            <div class="d-xl-none d-lg-none col-4">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="flaticon-menu-button-of-three-horizontal-lines"></i>
                                </button>
                            </div>
                            <div class="col-xl-2 col-lg-1 col-4 d-flex align-items-center">
                                <div class="logo">
                                    <a href="#">
                                        <img src="{{asset('assets/images/log.png')}}" style="width: 64px;height: 65px;"
                                             alt="LOGO">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-9 next">
                                <nav class="navbar navbar-expand-lg navbar-light">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item dropdown active">
                                                <a class="nav-link" href="{{url('/')}}">
                                                    HOME
                                                </a>

                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/about')}}" class="nav-link">ABOUT US</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('/brands')}}" class="nav-link">BRANDS</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('all/products')}}" class="nav-link">PRODUCTS</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{url('contact')}}">CONTACTS</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-4">
                                <div class="bottom-right">
                                    <a href="#" class="follow">Follow Us</a>
                                    <form class="nav-form" method="get" action="{{route('search')}}">
                                        @csrf
                                        <input type="search" name="search" title="you can search multple product and
                                        category by spacing words" placeholder="Search......" required>
                                        <button><i class="flaticon-magnifying-glass-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   @yield('content')




<div class="footer">
    <div class="container">
        <div class="main-footer">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="about-txt">
                        <h3>About Us </h3>
                        <p>To build great expertise through relevant global technical partnership for the purpose of giving the best support and
                            high level maintenance culture to industries across Nigeria and Africa.</p>
                        <ul>
                            <li><span><i class="flaticon-pin"></i></span>5 Adekunle Deen, Sari Iganmu, Lagos.</li>
                            <li><span><i class="flaticon-phone-call"></i></span>+2348052890114, +2348033033397 (24/7 Support Line)</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="link">
                        <h3>Our Services</h3>
                        <ul>
                            <li><a href="javascript:void(0);">Business</a></li>
                            <li><a href="javascript:void(0);">Marketing</a></li>
                            <li><a href="javascript:void(0);">Shipping</a></li>
                            <li><a href="javascript:void(0);">Consulting</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-sm-6">
                    <div class="link">
                        <h3> Links</h3>
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li><a href="{{url('about')}}">About</a></li>
                            <li><a href="{{url('brands')}}">Brands</a></li>
                            <li><a href="{{url('contact')}}">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="newsletter">
                        <h3>Newsletter</h3>
                        <p>Subscribe our newsletter to get our latest update </p>
                        <form>
                            <input type="email" placeholder="Your Email Address" required>
                            <button><i class="flaticon-send"></i></button>
                        </form>
                        <div class="social" style="padding-bottom:4px">
                            <a target="_blank"
                               href="https://web.facebook.com/itssojonofficial"
                               class="fb"><i class="flaticon-facebook"></i></a>
                            <a target="_blank"
                               href="https://twitter.com/itssojonofficia"
                               class="tw"><i class="flaticon-twitter"></i></a>
                            <a target="_blank"
                               href="https://www.instagram.com/itssojonofficial"
                               class="pin"><i class="flaticon-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
            <div class="row" style="padding-left:15px;padding-right:15px;">

                   <div class="col-xl-4 col-lg-4">
                       <p id="year"></p>
                   </div>
                   <div class="col-xl-8 col-lg-8" style="padding-left: 0px;margin-left: -10px">
                       <div class="link">
                           <a href="{{url('/')}}" >Home</a>
                           <a href="{{asset('about')}}">About</a>
                           <li><a href="{{url('brands')}}">Brands</a></li>
                           <a href="{{url('contact')}}">| Contact</a>
                       </div>
                   </div>

            </div>
        </div>
    </div>
</div>



<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.flagstrap.min.js')}}"></script>

<script src="{{asset('assets/js/jquery.appear.min.js')}}"></script>

<script src="{{asset('assets/js/odometer.min.js')}}"></script>

<script src="{{asset('assets/js/odometer.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('assets/js/slick.min.js')}}"></script>

<script src="{{asset('assets/js/video.popup.js')}}"></script>

<script src="{{asset('assets/js/popper.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Custom scripts for all pages-->
<script>
    @if(Session::has('success'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.success("{{ session('success') }}");
    @endif

        @if(Session::has('failure'))
        toastr.options =
        {
            "closeButton" : true,
            "progressBar" : true
        }
    toastr.error("{{ session('failure') }}");
    @endif


</script>


<script>
    var d = new Date();
    var n = d.getFullYear();
    document.getElementById('year').innerHTML=`Copyright &copy  ${n}  All Rights Reserved`;
</script>
</body>



</html>
