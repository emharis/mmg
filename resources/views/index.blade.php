@extends('layouts.layouts')

@section('content')
<!-- #banner -->
<section id="banner">
    <div class="banner-container">
        <div class="banner home-v1">            
            @include('slider')
        </div>
    </div>
</section> <!-- /#banner -->

<!-- #promotional-text -->
<!--	<section id="promotional-text">
                <div class="container">
                        <div class="row">
                                <div class="col-lg-12 col-md-12">
                                        <p>We're on call 24/7 to react promptly to your <b>plumbing emergencies.</b></p>
                                </div>
                        </div>
                </div>
        </section>  /#promotional-text -->

<!-- #who-we-are -->
<section id="who-we-are">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 large-box col-sm-12 col-xs-12 wow zoomIn hvr-float-shadow" data-wow-duration=".5s">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 img-holder">
                    <img src="{{$midcontent_img_path . '/' . $midcontent_left->img}}" alt="">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 hvr-bounce-to-left">
                    <h2>{{$midcontent_left->title}}</h2>
                    <p>{!! $midcontent_left->content !!} </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 single-box wow zoomIn" data-wow-duration=".5s" data-wow-delay=".5s">
                <div class="img-holder">
                    <img src="{{$midcontent_img_path . '/' . $midcontent_mid->img}}" alt="">
                </div>
                <h2>{{$midcontent_mid->title}}</h2>
                <p>{!! $midcontent_mid->content !!} </p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 single-box wow zoomIn" data-wow-duration=".5s" data-wow-delay="1s">
                <div class="img-holder">
                    <img src="{{$midcontent_img_path . '/' . $midcontent_right->img}}" alt="">
                </div>
                <h2>{{$midcontent_right->title}}</h2>
                <p>{!! $midcontent_right->content !!} </p>
            </div>
        </div>
    </div>
</section> <!-- /#who-we-are -->

<!-- #service-we-provide -->
<section id="service-we-provide">
    <div class="container">
        <div class="section-title">
            <h1>{{$layanan_title}}</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 wow slideInLeft">
                <div class="service-tab-title">
                    <ul class="clearfix">
                        <?php $layanan_tab_counter = 1; ?>
                        @foreach($layanan as $dt)
                        <li class="{{$layanan_tab_counter == 1 ? 'active':''}}" data-tab-name="layanan-tab-{{$layanan_tab_counter++}}">{{$dt->title}}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 wow slideInRight">
                <div class="row">
                    <div class="service-tab-content clearfix">
                        <?php $layanan_cont_counter = 1; ?>
                        @foreach($layanan as $dt)
                        @if($dt->type == 1)
                        <div id="layanan-tab-{{$layanan_cont_counter++}}">
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <p>{!!$dt->content!!}</p>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <img src="{{$layanan_img_path . '/'.$dt->img_bottom}}" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src="{{$layanan_img_path . '/'.$dt->img_side}}" alt="">
                            </div>
                        </div>
                        @else
                        <div id="layanan-tab-{{$layanan_cont_counter++}}">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p>{!!$dt->content!!}</p>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zoomIn">
                                <img src="{{$layanan_img_path . '/'.$dt->img_bottom}}" alt="">
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#service-we-provide -->

<!-- #our-projects -->
<section id="our-projects">
    <div class="container">
        <div class="section-title">
            <h1>{{$aktifitas_title}}</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 masonary-gallery">
                <div class="masonary-item width-1">
                    <a class="fancybox" href="{{$gallery[1]}}"><div class="img-wrap">
                            <img src="{{$gallery[1]}}" alt="">
                            <div class="content-wrap">
                                <div class="border">
                                    <div class="content">
                                        <h4>{{$gallery['1_title']}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                </div>
                <div class="masonary-item width-1">
                    <a class="fancybox" href="{{$gallery[2]}}"><div class="img-wrap">
                            <img src="{{$gallery[2]}}" alt="">
                            <div class="content-wrap">
                                <div class="border">
                                    <div class="content">
                                        <h4>{{$gallery['2_title']}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                </div>		
                <div class="masonary-item width-1 height-1">
                    <a class="fancybox" href="{{$gallery[3]}}"><div class="img-wrap">
                            <img src="{{$gallery[3]}}" alt="">
                            <div class="content-wrap">
                                <div class="border">
                                    <div class="content">
                                        <h4>{{$gallery['3_title']}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                </div>		
                <div class="masonary-item width-1">
                    <a class="fancybox" href="{{$gallery[4]}}"><div class="img-wrap">
                            <img src="{{$gallery[4]}}" alt="">
                            <div class="content-wrap">
                                <div class="border">
                                    <div class="content">
                                        <h4>{{$gallery['4_title']}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                </div>		
                <div class="masonary-item width-2">
                    <a class="fancybox" href="{{$gallery[5]}}"><div class="img-wrap">
                            <img src="{{$gallery[5]}}" alt="">
                            <div class="content-wrap">
                                <div class="border">
                                    <div class="content">
                                        <h4>{{$gallery['5_title']}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                </div>					
                <div class="masonary-item width-1">
                    <a class="fancybox" href="{{$gallery[6]}}"><div class="img-wrap">
                            <img src="{{$gallery[6]}}" alt="">
                            <div class="content-wrap">
                                <div class="border">
                                    <div class="content">
                                       <h4>{{$gallery['6_title']}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div></a>
                </div>

            </div>

        </div>
        <div class="view-all-btn"><a href="gallery" class="view-all hvr-bounce-to-right">view all</a></div>
    </div>
</section> <!-- /#our-projects -->

<!-- #blog -->
<section id="blog">
    <div class="container">
        <div class="section-title">
            <h1>Blogs</h1>
        </div>
        <div class="row">
            <!-- .blog-wrap -->
            <div class="col-lg-6 col-md-6 col-sm-6 blog-wrap hvr-float-shadow">
                <div class="col-lg-6 col-md-12 img-wrap">
                    <img src="img/blog/1.jpg" alt="">
                    <h2>19 May</h2>
                </div>
                <div class="col-lg-6 col-md-12 content-wrap">
                    <h2>Heading of Blog</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium doloremque laudantium totam rem aperiam, eaque ipsa.</p>
                    <ul>
                        <li><span><b>By:</b> Anjori Meyami</span></li>
                        <li><a href="#">Read more</a></li>
                    </ul>
                </div>
            </div> <!-- /.blog-wrap -->
            <!-- .blog-wrap -->
            <div class="col-lg-6 col-md-6 col-sm-6 blog-wrap hvr-float-shadow">
                <div class="col-lg-6 col-md-12 img-wrap">
                    <img src="img/blog/2.jpg" alt="">
                    <h2>17 May</h2>
                </div>
                <div class="col-lg-6 col-md-12 content-wrap">
                    <h2>Heading of Blog</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium doloremque laudantium totam rem aperiam, eaque ipsa.</p>
                    <ul>
                        <li><span><b>By:</b> Anjori Meyami</span></li>
                        <li><a href="#">Read more</a></li>
                    </ul>
                </div>
            </div> <!-- /.blog-wrap -->
        </div>
    </div>
</section> <!-- /#blog -->
@stop