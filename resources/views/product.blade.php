@extends('layouts.layouts')

@section('styles')
<style>
    /*    #featured .col-lg-8{
            padding: 20px 0 10px;
    
        }*/
</style>
@stop

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
                        <li><a class="active" href="#"><i class="fa fa-angle-right"></i> Gas & Cairan Cryogenic</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Alat Kesehatan non Elektro Medik non Steril</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Alat Industri</a></li>
                        <li><a href="#"><i class="fa fa-angle-right"></i> Jasa & Penjualan</a></li>
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
                    <h1>Gas & Cairan Cryogenic</h1>
                </div>				
                <div class="row">
                    <div class="col-lg-4 single-shop-item">
                        <img src="img/product-details/shop-item-1.jpg" alt="">
                        <div class="meta">
                            <h4>Acetylene (C<sub>2</sub>H<sub>2</sub>)</h4>
                            <p>Struktur kimia yang tidak stabil, dapat terbakar ataupun meledak.</p>
                            <span>Price: <b>Rp.xxx.xxx</b></span>
                            <a href="#" class="add-to-cart hvr-bounce-to-right">Detail</a>
                        </div>
                    </div>
                    <div class="col-lg-4 single-shop-item">
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
                    </div>
                </div>		
                <div class="row">
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
                </div>
            </div> <!-- /.shop-page-content -->


        </div>
    </div>
</section> <!-- /#blog-post -->

@stop