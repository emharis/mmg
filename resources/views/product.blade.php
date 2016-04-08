@extends('layouts.layouts')

@section('styles')
@append

@section('content')

@include('layouts.pagetitle')

<!-- #blog-post -->
<section id="blog-post">
    <div class="container">
        <div class="row">

            <!-- .sidebar -->
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-push-0 col-md-push-0 col-sm-push-3 col-xs-push-0 sidebar blog-left">

                <!-- .sidebar-widget -->
                <div class="sidebar-widget">
                    <h4>Kategori</h4>
                    <ul class="category-list">
                        <?php $katnum = 1; ?>
                        @foreach($kategori as $dt)
                        <li><a class="{{$dt->id == $current_kategori->id ?'active':''}}"  href="products/category/{{$dt->id}}"><i class="fa fa-angle-right"></i> {{$dt->nama}}</a></li>
                        @endforeach
                    </ul>
                </div> <!-- /.sidebar-widget -->

                <!--                 .sidebar-widget 
                                <div class="sidebar-widget">
                                    <h4>Popular Posts</h4>
                                    <ul class="popular-post">
                                        <li class="clearfix">
                                            <img src="img/product-details/1.jpg" alt="">
                                            <div class="content-wrap">
                                                <h5>Neque porro quisqua mest qui dolorem.</h5>
                                                <span>20 June</span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="img/product-details/2.jpg" alt="">
                                            <div class="content-wrap">
                                                <h5>Neque porro quisqua mest qui dolorem.</h5>
                                                <span>20 June</span>
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="img/product-details/3.jpg" alt="">
                                            <div class="content-wrap">
                                                <h5>Neque porro quisqua mest qui dolorem.</h5>
                                                <span>20 June</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>  /.sidebar-widget 
                
                                 .sidebar-widget 
                                <div class="sidebar-widget text-widget">
                                    <h4>Text Widget</h4>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore que laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arch itecto beatae vitae dict eaque ipsa quae.</p>
                                </div>  /.sidebar-widget 
                
                                 .sidebar-widget 
                                <div class="sidebar-widget">
                                    <h4>Tags Clouds</h4>
                                    <div class="tag-cloud">
                                        <a href="#">Kitchen Plumbing </a>
                                        <a href="#">Pipe fixes</a>
                                        <a href="#">Drain Cleaning</a>
                                        <a href="#">tips</a>
                                        <a href="#">Pipe leakages</a>
                                        <a href="#">outside Plumbing </a>
                                    </div>
                                </div>  /.sidebar-widget 
                
                                 .sidebar-widget 
                                <div class="sidebar-widget text-widget">
                                    <img src="img/product-details/add_1.jpg" alt="">
                                </div>  /.sidebar-widget 
                                 .sidebar-widget 
                                <div class="sidebar-widget text-widget">
                                    <img src="img/product-details/add_2.jpg" alt="">
                                </div>  /.sidebar-widget -->

            </div> <!-- /.sidebar -->

            <!-- .shop-page-content -->
            <div class="col-lg-8 col-md-8 shop-page-content">
                <div class="section-title-style-2">
                    <h1>{{$current_kategori->nama}}</h1>
                </div>				
                <div class="row">
                    @foreach($products as $dt)
                    <div class="col-lg-4 single-shop-item">
                        <div class="img-nailthumb" >
                            <?php $img_src = $dt->img != "" ? $product_img_path . "/" . $dt->img : "backend/img/product_page/main-item.jpg"; ?>
                            <img  src="{{$img_src}}" alt="">
                        </div>
                        <div class="meta">
                            <h4>{!! $dt->nama !!}</h4>
                            <p>{!! $dt->sub_desc !!}</p>
                            @if($show_price == 'Y')
                            <span>Price: <b>Rp.{{number_format($dt->price,0,',','.')}}</b></span>
                            @endif
                            <a href="#" class="add-to-cart hvr-bounce-to-right">Detail</a>
                        </div>
                    </div>
                    @endforeach
                    
                     <!--<div class="col-lg-4 single-shop-item">
                                            <img src="img/product-details/shop-item-2.jpg" alt="">
                                            <div class="meta">
                                                <h4>Argon (Ar)</h4>
                                                <p>adalah suatu unsur yang pada suhu dan tekanan atmosfir berbentuk gas. </p>
                                                <a href="#" class="add-to-cart hvr-bounce-to-right">Detail</a>
                                            </div>
                                        </div>-->

                    <!--                    <div class="col-lg-4 single-shop-item">
                                            <img src="img/product-details/shop-item-2.jpg" alt="">
                                            <div class="meta">
                                                <h4>Argon (Ar)</h4>
                                                <p>adalah suatu unsur yang pada suhu dan tekanan atmosfir berbentuk gas. </p>
                                                <span>Price: <b>Rp.xxx.xxx</b></span>
                                                <a href="#" class="add-to-cart hvr-bounce-to-right">Detail</a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 single-shop-item">
                                            <img src="img/product-details/shop-item-3.jpg" alt="">
                                            <div class="meta">
                                                <h4>Helium (He)</h4>
                                                <p>Helium adalah unsur yang paling ringan setelah hidrogen dan merupakan unsur umum kedua di alam semesta.</p>
                                                <span>Price: <b>Rp. xxx.xxx</b></span>
                                                <a href="#" class="add-to-cart hvr-bounce-to-right">Detail</a>
                                            </div>
                                        </div>-->
                </div>		
                <!--                <div class="row">
                                    <div class="col-lg-4 single-shop-item">
                                        <img src="img/product-details/shop-item-4.jpg" alt="">
                                        <div class="meta">
                                            <h4>Karbondioksida (CO<sub>2</sub>)</h4>
                                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit,</p>
                                            <span>Price: <b>Rp. xxx.xxx</b></span>
                                            <a href="#" class="add-to-cart hvr-bounce-to-right">Detail</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 single-shop-item">
                                        <img src="img/product-details/shop-item-5.jpg" alt="">
                                        <div class="meta">
                                            <h4>Nitrogen (N<sub>2</sub>)</h4>
                                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit,</p>
                                            <span>Price: <b>Rp. xxx.xxx</b></span>
                                            <a href="#" class="add-to-cart hvr-bounce-to-right">Detail</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 single-shop-item">
                                        <img src="img/product-details/shop-item-6.jpg" alt="">
                                        <div class="meta">
                                            <h4>Oxygen (O<sub>2</sub>)</h4>
                                            <p>Lorem ipsum dolor sit amet, con sectetur adipiscing elit,</p>
                                            <span>Price: <b>Rp. xxx.xxx</b></span>
                                            <a href="#" class="add-to-cart hvr-bounce-to-right">Detail</a>
                                        </div>
                                    </div>
                                </div>-->
            </div> <!-- /.shop-page-content -->


        </div>
    </div>
</section> <!-- /#blog-post -->

@stop

@section('scripts')
<!-- jquery nailthumb -->
<script src="https://cdn.jsdelivr.net/jquery.nailthumb/1.1/jquery.nailthumb.min.js"></script>

<script>
    (function ($) {
         jQuery('.img-nailthumb').nailthumb({width:244,height:180});
    })(jQuery);
</script>
@append