@extends('layouts.frontmaster')
@section('title', "{$brands[0]->brand_name} page")

@section('content')
    <div class="breadcrumb about-breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3">
                    <div class="part-txt">
                        <h1>{{$brands[0]->brand_name}}</h1>
                        <ul>
                            <li><a style="color:#ffffff !important;" href="{{url('/brands')}}">Brands</a></li>
                            <li>-</li>
                            <li>{{$brands[0]->brand_name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.partials._projectslider')


    <div class="team team-inner" style="background: #fff;margin-top: -120px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="heading heading-2" >
                        <h2 style="color:#4b4b46 !important;">Sojon Company Limited</h2><br>
                        <h2 style="color:#4b4b46 !important;">{{$brands[0]->brand_name}} Brand</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">

               @foreach($brands[1] as $product)
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6" style="margin-bottom: 20px">
                        <div class="single-box">
                                <div class="">
                                    <img src="{{asset($product->product_image)}}"
                                        alt="image" style="width:350px;height:350px">
                                </div>
                            <div class="part-txt">
                                <div class="txt">
                                        @if(strlen($product->product_detail) < 50)
                                             <div class="title" style="margin-top:-65px">
                                          @else
                                    <div class="title" style="margin-top:0px;padding-top:20px;">
                                     @endif

                                        <a href="" style="font-weight:
                                        bolder">{{$product->product_name}}</a>
                                        <span>{{$product->brand->brand_name}}</span>

                                    </div>
                                    <p style="text-align: justify;font-size: 12px;line-height: 11px;">

                                        {{substr($product->product_detail,0,350)}}

                                    </p>
                                    <div class="social"  style="visibility: hidden;">
                                        <a href="#" class="fb"><i class="flaticon-facebook"></i></a>
                                        <a href="#" class="tw"><i class="flaticon-twitter"></i></a>
                                        <a href="#" class="ld"><i class="flaticon-linkedin"></i></a>
                                        <a href="#" class="ggl"><i class="flaticon-google-plus-logo"></i></a>
                                    </div>
                                </div>

                              
                            </div>
                    
                        </div>
                    </div>
               @endforeach

            </div>
            <div class="row" style="padding-top:100px">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <center><span>{!! $brands[1]->links() !!}</span>
                    </center>
                </div>
                <div class="col-lg-4"></div>
            </div>
               <div class="row">
                   <div class="container">
                       <div class="row justify-content-center">
                           <div class="col-xl-5 col-lg-6">
                               <div class="heading heading-2" >
                                   <h2 style="color:#4b4b46 !important;">Sojon Company Limited</h2><br>
                                   <h2 style="color:#4b4b46 !important;">Our Partners</h2>
                               </div>
                           </div>
                       </div>
                       <div class="brand-slider owl-carousel">
                           <div class="single-imgg">
                               <img src="{{asset('assets/images/grundfos_logo.png')}}" alt="logo">
                           </div>
                           <div class="single-imgg">
                               <img src="{{asset('assets/images/logo_siemens.png')}}" alt="logo">
                           </div>
                           <div class="single-imgg">
                               <img src="{{asset('assets/images/logo_abb.png')}}" alt="logo">
                           </div>
                           <div class="single-imgg">
                               <img src="{{asset('assets/images/logo_motovario.png')}}" alt="logo">
                           </div>
                           <div class="single-imgg">
                               <img src="{{asset('assets/images/mitsubishi_electric-01.png')}}" alt="logo">
                           </div>
                           <div class="single-imgg">
                               <img src="{{asset('assets/images/spirax_sarco-01.png')}}" alt="logo">
                           </div>
                           <div class="single-imgg">
                               <img src="{{asset('assets/images/skf-01.png')}}" alt="logo">
                           </div>
                           <div class="single-imgg">
                               <img src="{{asset('assets/images/logo_brevini.png')}}" alt="logo">
                           </div>
                           <div class="single-imgg">
                               <img src="{{asset('assets/images/beta.png')}}"
                                    alt="logo">
                           </div>
                           <div class="single-imgg">
                               <img src="{{asset('assets/images/lavormek-01.png')}}"
                                    alt="logo">
                           </div>
                           <div class="single-imgg">
                               <img src="{{asset('assets/images/koyo_logo-01.png')}}"
                                    alt="logo">
                           </div>
                           <div class="single-imgg">
                               <img src="{{asset('assets/images/Logo-DECA.png')}}"
                                    alt="logo">
                           </div>
                       </div>
                   </div>
               </div>
        </div>
    </div>




    `
@endsection
