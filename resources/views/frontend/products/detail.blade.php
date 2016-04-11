@extends('layouts.layouts')

@section('styles')
@append

@section('content')

@include('layouts.pagetitle')
	
	<!-- #product-details -->
	<section id="blog-post">
		<div class="container">
			<div class="row">

				<!-- .sidebar -->
				<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-push-0 col-md-push-0 col-sm-push-3 col-xs-push-0 sidebar blog-left">

					<!-- .sidebar-widget -->
					<div class="sidebar-widget">
						<h4>Kategori</h4>
						<ul class="category-list">
							@foreach($kategori as $dt)
                                <li><a class="{{$dt->id == $current_kategori->id ?'active':''}}"  href="products/category/{{$dt->id}}"><i class="fa fa-angle-right"></i> {{$dt->nama}}</a></li>
                            @endforeach
						</ul>
					</div> <!-- /.sidebar-widget -->


					<!-- .sidebar-widget -->
					<div class="sidebar-widget">
						<h4>Search</h4>
						<form action="#" class="search-form">
							<input type="text" placeholder="Enter Search Keywords">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div> <!-- /.sidebar-widget -->

					 <!-- .sidebar-widget -->
					@if($is_show_new_product == 'Y')
						<div class="sidebar-widget">
							<h4>{{$new_product_text}}</h4>
							<ul class="popular-post">
								@foreach($new_product as $dt)
								<li class="clearfix \">
									<?php $img_src = ($dt->img != "" ? $product_img_path . '/' . $dt->img : 'img/product-details/1.jpg'); ?>
									<div class="new-product-nailthumb" >
										<a href="products/detail/{{$dt->id}}" ><img src="{{$img_src}}" alt=""></a>
									</div>
									<div class="content-wrap">
										<a href="products/detail/{{$dt->id}}"><h5>{{$dt->nama}}</h5></a>
									</div>
								</li>
								@endforeach
							</ul>
						</div> <!-- /.sidebar-widget -->
					@endif

					<!-- .sidebar-widget -->
					<!--<div class="sidebar-widget text-widget">
						<img src="img/product-details/add_1.jpg" alt="">
					</div> -->
					<!-- /.sidebar-widget -->
					<!-- .sidebar-widget -->
					<!--<div class="sidebar-widget text-widget">
						<img src="img/product-details/add_2.jpg" alt="">
					</div> -->
					<!-- /.sidebar-widget -->
					
				</div> <!-- /.sidebar -->
				
				<!-- .product-details-page-content -->
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 product-details-page-content">
					
					<div class="row product-details-box">
						<div class="col-lg-6 img-holder">
                            <?php $img_src = $product->img != "" ? $product_img_path . "/" . $product->img : "backend/img/product_page/main-item.jpg"; ?>
                            <img  src="{{$img_src}}" alt="">
						</div>
						<div class="col-lg-6">
							<h3>{!! $product->nama !!}</h3>
							<p>{!! $product->sub_desc !!}, </p>
                            @if($show_price == 'Y')
							<span>Price : <b>Rp.{{number_format($product->price,0,',','.')}}</b></span>
							@endif
							<a href="#" class="add-to-cart hvr-bounce-to-right">order</a>
						</div>
					</div>
					
					<div class="product-details-tab-title row">
						<div class="col-lg-12">
							<ul>
								<li data-tab-name="description" class="active"><span>Descripton</span></li>
							</ul>
						</div>
					</div>
					<div class="product-details-tab-content row">
						<div class="col-lg-12" id="description">
							<p>{!! $product->desc !!}</p>
						</div>
					</div>

                    @if($show_related == 'Y')
					<div class="row best-seller">
						<div class="section-title">
							<h1>{{$related_product_text}}</h1>
						</div>
					</div>
					<div class="row shop-page-content">
                        @foreach($related_products as $dt)
                            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12 single-shop-item">
                                <?php $img_src = $dt->img != "" ? $product_img_path . "/" . $dt->img : "backend/img/product_page/main-item.jpg"; ?>
                                <div class="img-nailthumb" ><img  src="{{$img_src}}" alt=""></div>                                
                                <div class="meta">
                                    <h4>{!! $dt->nama !!}</h4>
                                    <a href="products/detail/{{$dt->id}}" class="add-to-cart hvr-bounce-to-right">Detail</a>
                                </div>
                            </div>
                        @endforeach
						
					</div>
                    @endif

				</div> <!-- /.product-details-page-content -->

			</div>
		</div>
	</section> <!-- /#product-details -->

@stop

@section('scripts')
<!-- jquery nailthumb -->
<script src="https://cdn.jsdelivr.net/jquery.nailthumb/1.1/jquery.nailthumb.min.js"></script>

<script>
    (function ($) {
         jQuery('.img-nailthumb').nailthumb({width:244,height:180});
		 jQuery('.new-product-nailthumb').nailthumb({width:120,height:82});
         $('.new-product-nailthumb').css("float",'left');
    })(jQuery);
</script>
@append