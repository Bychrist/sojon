@extends('layouts.frontmaster')
@section('title','Product page')

@section('content')








<section id="content" class="content_portfolio layout-fullsize items-layout-boxed" style="background:;">

    <h1 class="portfolio_big_title" style="letter-spacing: 2px">
       {{$products[0]->Category->category_name}} &nbsp;&nbsp; Showcase
    </h1>

    <!-- Portfolio Filter -->
   

      <div class="container">

            <div class="row-fluid">
                <section id="portfolio-preview-items" class="four-cols span12" data-nr="3">

                    <div class="row filterable isotope" style="position: relative; overflow: hidden; height: 876px;">


                        <!-- Portfolio Normal Mode -->

                        <!-- item -->
                        @foreach($products as $product)
                            
                                <div class="portfolio-item {{$product->Category->category_name}}  v2 isotope-item" data-id="1925" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px);">
                                    <div class="he-wrap tpl2">
                                    @for($i=0; $i < 1; $i++)
                                            <img src="{{asset($product->ProductImages[0]->image_path)}}" alt="" class="start_animation">
                                            <div class="overlay he-view">
                                                <div class="bg a0" data-animate="fadeIn">
                                                    <div class="center-bar v1">
                                                        <div class="centered">
                                                            <a href="{{asset($product->ProductImages[0]->image_path)}}" class="btn-system a1 lightbox-gallery lightbox" data-animate="fadeInUp">View Large</a>
                                                            <a href="{{url('products/'.$product->id)}}" class="btn-system second a2" data-animate="fadeInUp">Read More</a>
                                                        </div>
                                                        <a href="" class="title a3 lightbox-gallery lightbox" data-animate="fadeInUp">{{$product->product_name}}</a>
                                                        <a href="#" class="categories a4" data-animate="fadeInUp">{{$product->Category->category_name}} </a>
                                                    </div>
                                                </div>

                                            </div>
                                        
                                    @endfor
                                        
                                    </div>



                                </div>
                        @endforeach

                     
                       

                        <!-- Portfolio Normal Mode End -->

                       

                        <div class="p_pagination">

                            <div class="pagi">
                                {{$products->links()}}
                            </div>

                        </div> 
                    </div>
                </section>

            </div>
        </div>




       
</section>
<a href="#" class="scrollup">Scroll</a>
<!-- Social Profiles -->


@stop
