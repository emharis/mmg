@extends('layouts.layouts')

@section('styles')
<style>
    #featured .col-lg-8{
        padding: 20px 0 10px;

    }
</style>
@stop

@section('content')
<!-- #page-title -->
<section id="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- .title -->
                <div class="title pull-left">
                    <h1>Visi & Misi</h1>
                </div> <!-- /.title -->
                <!-- .page-breadcumb -->
                <div class="page-breadcumb pull-right">
                    <i class="fa fa-home"></i> <a href="index.html">Home</a> <i class="fa fa-angle-right"></i> <span>About Us</span>
                </div> <!-- /.page-breadcumb -->
            </div>
        </div>
    </div>
</section> <!-- /#page-title -->

<!-- #our-mission -->
<section id="our-mission">
    <div class="container">
        <div class="section-title">
            <h1>Motto</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <p>
                    <i class="fa fa-quote-left"></i> 
                    KAMI BERIKAN LEBIH DARI YANG ANDA BAYANGKAN
                </p>
            </div>
<!--            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="img-holder">
                    <img src="img/about/1.jpg" alt="">
                </div>
            </div>-->
        </div>
    </div>
</section> <!-- /#our-mission -->

<section id="featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 pull-right">
                <div class="col-lg-12 col-md-12" >
                    <h3>VISI</h3>
                    <p>
                        <i class="fa fa-quote-left"></i> 
                        Menjadi perusahaan penyedia gas dan alat-alat penunjang medis dan industri yang paling terpercaya, berkualitas unggul dan mampu bersain di pasar global.
                    </p>
                    <h3>MISI</h3>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="content clearfix">
                        <div class="img-wrap pull-left wow fadeIn" data-wow-offset="3">
                            <img src="img/about/icon/1.png" alt="">
                        </div>
                        <div class="content-wrap pull-right">
                            <h2>Mewujudkan Komitmen</h2>
                            <p>untuk menjadi perusahaan yang terpercayam, aman, jujur dan berdedikasi bagi pelanggan, supplier dan masyarakat sekitar.</p>
                        </div>
                    </div>
                    <div class="content clearfix">
                        <div class="img-wrap pull-left wow fadeIn" data-wow-delay=".3s" data-wow-offset="3">
                            <img src="img/about/icon/2.png" alt="">
                        </div>
                        <div class="content-wrap pull-right">
                            <h2>Belajar dan meningkatkan kemampuan</h2>
                            <p>demi mencapai kinerja layanan yang unggul, kualitas produk yang prima dan selalu membangun kepercayaan pelanggan atas kualitas layanan dan kualitas produk.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 ">
                    <div class="content clearfix">
                        <div class="img-wrap pull-left wow fadeIn" data-wow-delay=".6s" data-wow-offset="3">
                            <img src="img/about/icon/3.png" alt="">
                        </div>
                        <div class="content-wrap pull-right">
                            <h2>Menjaga Kemajuan</h2>
                            <p>minat belajar dan meningkatkan kemampuan terhadap kemajuan teknologi baik dari dalam maupun luar negeri untuk mendukung layanan terhadap pelanggan sampai selamanya.</p>
                        </div>
                    </div>
                    <div class="content clearfix">
                        <div class="img-wrap pull-left wow fadeIn" data-wow-delay=".9s" data-wow-offset="3">
                            <img src="img/about/icon/4.png" alt="">
                        </div>
                        <div class="content-wrap pull-right">
                            <h2>Mengembangkan Lini Produk</h2>
                            <p>yang saling menunjang supaya mitra kerja bisa mendapatkan solusi menyeluruh terkait gas medis, gas industri dan instalasinya.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 about-image pull-left wow slideInLeft" data-wow-offset="10">
                <img src="img/about/2.jpg" alt="">
            </div>
        </div>
    </div>
</section>

<!-- #our-specialist -->
<!--<section id="our-specialist">
    <div class="container">
        <div class="section-title">
            <h1>Meet our specialists</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 wow zoomIn hvr-float-shadow" data-wow-duration=".5s" data-wow-delay="0">
                 .single-member 
                <div class="single-member hvr-bounce-to-bottom">
                    <img src="img/our-specialist/1.png" alt="">
                    <div class="info hvr-bounce-to-top">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <h2>Tim cock</h2>
                        <p class="position">Plumbing Mechanic</p>
                    </div>
                </div>  /.single-member 
            </div>
            <div class="col-lg-3 col-md-3  col-sm-6 wow zoomIn hvr-float-shadow" data-wow-duration=".5s" data-wow-delay=".5s">
                 .single-member 
                <div class="single-member hvr-bounce-to-bottom">
                    <img src="img/our-specialist/2.png" alt="">
                    <div class="info hvr-bounce-to-top">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <h2>Rock Leue</h2>
                        <p class="position">Plumbing Mechanic</p>
                    </div>
                </div>  /.single-member 
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 wow zoomIn hvr-float-shadow" data-wow-duration=".5s" data-wow-delay="1s">
                 .single-member 
                <div class="single-member hvr-bounce-to-bottom">
                    <img src="img/our-specialist/3.png" alt="">
                    <div class="info hvr-bounce-to-top">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <h2>Michale cock</h2>
                        <p class="position">Plumbing Mechanic</p>
                    </div>
                </div>  /.single-member 
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 wow zoomIn hvr-float-shadow" data-wow-duration=".5s" data-wow-delay="1.5s">
                 .single-member 
                <div class="single-member hvr-bounce-to-bottom">
                    <img src="img/our-specialist/4.png" alt="">
                    <div class="info hvr-bounce-to-top">
                        <ul class="social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                        <h2>Rock Leue</h2>
                        <p class="position">Plumbing Mechanic</p>
                    </div>
                </div>  /.single-member 
            </div>
        </div>
    </div>
</section>-->
<!-- /#our-specialist -->
@stop