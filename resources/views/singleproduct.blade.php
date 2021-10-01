@extends('layouts.frontmaster')
@section('title','Product')
@section('css')
	<!-- stylesheet for demo and examples -->
	<link rel="stylesheet" href="{{asset('scroll/style.css')}}">
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<!-- custom scrollbar stylesheet -->
	<link rel="stylesheet" href="{{asset('scroll/jquery.mCustomScrollbar.css')}}">
@stop
@section('content')





<section id="content" style="" class="composer_content">


    <div id="fws_5481cb0e0f758" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el full-width-content section-style    " style="background-color: #f6f6f6; padding-top: 60px !important; padding-bottom: 8px !important; ">
        <div class="col span_12  dark">
            <div class="vc_col-sm-12 wpb_column column_container" style="" data-animation="" data-delay="0">
                <div class="wpb_wrapper">
                    <div class="wpb_content_element dynamic_page_header style_2">
                        <h1 style="font-size:36px; font-family:Bebas Neue; color:#303030">Something more to know about us</h1>
                        <p class="description">To build great expertise through relevant global technical partnership for the purpose of giving the best support and high level maintenance culture to industries across Nigeria and Africa.</p>
                        <div class="line_under_full">
                            <div class="line_full"></div>
                            <div class="full_center"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="fws_5481cb0e0ff64" class="wpb_row animate_onoffset  vc_row-fluid  animate_onoffset row-dynamic-el standard_section    " style="padding-top: 0px !important; padding-bottom: 0px !important; ">
        <div class="container  dark">
            <div class="section_clear">
                <div class="vc_col-sm-6 wpb_column column_container" style="" data-animation="" data-delay="0">
                    <div class="wpb_wrapper">
                        <div class="dynamic_slideshow wpb_content_element">
                            <div class="with_thumbnails_container">
                                <div class="slideshow_container flexslider with_thumbnails slide_layout_fixed" id="contentflex">
                                    <ul class="slides slide_image_thumbnails">
                                        <?php $slide=1; $frame=1; ?>
                                        @foreach ($product->ProductImages as $image )
                                             <li class=' slide_element {{'slide'.$slide++}} {{'frame'.$frame++}}'>
                                                  <img src='{{asset($image->image_path)}}' title='{{$product->product_name}}' alt='' />
                                             </li>
                                        @endforeach
                                       
                                    </ul>
                                </div>
                                 @if ($product->ProductImages->count() > 1)
                                   <div class="slideshow_container flexslider with_thumbnails_carousel slide_layout_fixed" id="carouselflex">
                                    <ul class="slides slide_image_thumbnails">
                                       
                                       <?php $slide2=1;$frame2=1; ?>
                                        @foreach ($product->ProductImages as $image )
                                             <li class=' slide_element {{'slide'.$slide2++}} {{'frame'.$frame2++}}'>
                                                  <img src='{{asset($image->image_path)}}' title='{{$product->product_name}}' alt='' />
                                             </li>
                                        @endforeach
                                    </ul>

                                    
                                </div>
                                     
                                 @endif
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="vc_col-sm-6 wpb_column column_container" style="" data-animation="" data-delay="0">
                    <div class="wpb_wrapper">
                     
                     
                        <div class="wpb_text_column wpb_content_element vision" >
                            <div class="wpb_wrapper">
                                <h2  style="text-align: left !important;padding-bottom:20px;font-size:36px;">Description</h2>
                                <p style="text-align:justify">
                                    {{$product->product_description }}
                                </p>
                              

                            </div>
                        </div>
                      
                      
                        
                    </div>
                </div>
            </div>
        </div>
    </div>






</section>

@stop

 @section('script')
 
	<script src="{{asset('scroll/js/minified/jquery-1.11.0.min.js')}}"></script>
	
	<!-- custom scrollbar plugin -->
	<script src="{{asset('scroll/jquery.mCustomScrollbar.concat.min.js')}}"></script>
	
	<script>
		(function($){
			$(window).on("load",function(){
				
				$("#content-1").mCustomScrollbar({
					autoHideScrollbar:true,
					theme:"rounded"
				});
				
			});
		})(jQuery);
	</script>
@stop 