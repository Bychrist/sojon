@extends('layouts.frontmaster')
@section('title', " page")

@section('content')
    <div class="breadcrumb about-breadcrumb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-3">
                    <div class="part-txt">
                        <h1>Search</h1>
                        <ul>
                            <li> Search  Result{{ ($resultData->count() > 1) ? 's' : ''  }} : {{$resultData->count()}}
                            </li>


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
                        <h2 style="color:#4b4b46 !important;">Search Results</h2><br>
                    </div>
                </div>
            </div>

            @if(class_basename($resultData[0]) == "BrandProduct" || class_basename($resultData[1]) == "BrandProduct")
                <div class="row">
                    <div class="heading heading-2"  style="padding-left: 20px;margin-bottom: -1px">
                        <h2 style="color:#4b4b46 !important;font-size: 22px">Product Results</h2><br>
                    </div>
                </div>
               <div class="row ">

               @foreach($resultData as $data)

                   @if(class_basename($data) == "BrandProduct")
                     <div class="col-xl-3 col-lg-3 col-md-5 col-sm-6" style="margin-bottom: 20px">
                            <div class="single-box">
                                <div class="part-img">
                                    <img src="{{asset($data->product_image)}}"
                                         alt="image">
                                </div>
                                <div class="part-txt">
                                    <div class="txt">
                                        @if(strlen($data->product_detail) < 50)
                                            <div class="title" style="margin-top:-65px">
                                        @else
                                               <div class="title" style="margin-top:0px;padding-top:20px;">
                                            @endif

                                            <a href="" style="font-size: 12px;font-weight:
                                            bolder">{{$data->product_name}}</a>
                                            <span>Brand Name here</span>

                                        </div>
                                        <p style="text-align: justify;font-size: 12px;line-height: 11px;">

                                            {{substr($data->product_detail,0,350)}}

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
                </div>
                    @endif
                @endforeach

            </div>
            @endif




        </div>
    </div>

    @if(class_basename($resultData[0]) == "Brand" || class_basename($resultData[1]) == "Brand")
         <div class="contact searchcontact">
        <div class="container">
            <div class="boxes">
                <div class="row">
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="row">
                            <div class="heading heading-2"  style="padding-left: 20px;margin-bottom: -1px">
                                <h2 style="color:#4b4b46 !important;font-size: 22px">Brand Results</h2><br>
                            </div>
                        </div>
                        <div class="row" >

                            @foreach($resultData as $dat)

                                @if(class_basename($dat) == "Brand")
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">

                                        <div class="single-box" >

                                            <div class="part-txt">
                                                <img src="{{asset($dat->brand_image)}}" alt="beta">
                                                <h3 class="brandtitle">{{$dat->brand_name}}</h3>
                                                <p class="brandP">
                                                    {{substr($dat->brand_detail,0,82)}}
                                                    @if(strlen($dat->brand_detail) > 82)
                                                        ...
                                                    @endif
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endif

    <div class="row" style="margin-top:-120px">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <center><span>{!! $resultData->links() !!}</span>
        </div>
        <div class="col-lg-4"></div>
    </div>

    `
@endsection
