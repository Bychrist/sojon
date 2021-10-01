@extends('layouts.frontmaster')

@section('title','Brands we supply')

@section('content')
    <div class="breadcrumb about-breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3">
                    <div class="part-txt">
                        <h1>Our Partners</h1>
                        <ul>
                            <li><a style="color:#ffffff !important;" href="{{url('/')}}">Home</a></li>
                            <li>-</li>
                            <li>Brands</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <div class="container">
       @include('layouts.partials._projectslider')
   </div>
    <div class="container">
        <div class="row ">
         <div class="col-xl-3 col-lg-3 col-md-3">
{{--        keep empty--}}
         </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="part-txt">
                    <div class="heading">

                        <h2>Sojon Company Limited</h2>
                        <br>
                        <h2>All Brands</h2>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="contact" style="margin-top: -120px">
        <div class="container">

            <div class="boxes">
                <div class="row ">
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="row">
                            @foreach($brands as $brand)
                             <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                                <a href="{{url('brandandproduct/')}}/{{$brand->id}}">
                                    <div class="single-box single-boxx">


                                            <div class="part-txt">
                                                <img src="{{asset($brand->brand_image)}}" alt="beta">
                                                <h3 class="brandtitle">{{$brand->brand_name}}</h3>
                                                <p class="brandP">
                                                    {{substr($brand->brand_detail,0,82)}}
                                                    @if(strlen($brand->brand_detail) > 82)
                                                        ...
                                                    @endif
                                                </p>
                                            </div>

                                    </div>
                                </a>
                            </div>
                           @endforeach

                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2">
                        <div class="">
                            <div class="part-txt">
                                <div class="heading" style="background: #7f0202;color:#fff;padding-top:20px;
                                padding-bottom:20px;border-radius: 2px;">

                                    <h4 style="font-size: 15px;font-weight: bold;">Product Category</h4>
                                    <ul style="text-align: left;list-style: circle;color:#fff;font-size: 12px; ">
                                        @foreach($brands as $brand)
                                            <li><a href="{{url('brandandproduct/')}}/{{$brand->id}}"
                                                   style="color:#fff">{{$brand->brand_name}} ({{count
                                            ($brand->BrandProducts)}})</a></li>
                                        @endforeach

                                    </ul>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
@stop
