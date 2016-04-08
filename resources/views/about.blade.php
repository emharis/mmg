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

@foreach($about as $dt)
@if($dt->type == "IR")
<section id="our-mission">
    <div class="container">
        @if($dt->title !="")
        <div class="section-title">
            <h1>{{$dt->title}}</h1>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
                {!! $dt->desc !!}
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="img-holder">
                    <img src="{{$about_img_path . '/' . $dt->img}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@elseif($dt->type == "IL")
<section id="featured">
    <div class="container">
        @if($dt->title !="")
        <div class="section-title">
            <h1>{{$dt->title}}</h1>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-8 col-md-8 pull-right">
                <div class="col-lg-12 col-md-12" >
                    {!! $dt->desc !!}
                </div>
                <div class="col-lg-6 col-md-6">
                </div>
                <div class="col-lg-6 col-md-6 ">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 about-image pull-left wow slideInLeft" data-wow-offset="10">
                <img src="img/about/2.jpg" alt="">
            </div>
        </div>
    </div>
</section>
@elseif($dt->type == "NI")
<section id="our-mission">
    <div class="container">
        @if($dt->title !="")
        <div class="section-title">
            <h1>{{$dt->title}}</h1>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                {!! $dt->desc !!}
            </div>
        </div>
    </div>
</section>
@elseif($dt->type == "LS")
<section id="featured">
    <div class="container">
        @if($dt->title !="")
        <div class="section-title">
            <h1>{{$dt->title}}</h1>
        </div>
        @endif
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <?php $lsnum = 1; ?>
                @foreach($dt->list as $ls)
                <div class="col-lg-6 col-md-6">
                    <div class="content clearfix">
                        <div class="img-wrap pull-left wow fadeIn" data-wow-offset="3">
                            <img src="img/about/icon/{{$lsnum++}}.png" alt="">
                        </div>
                        <div class="content-wrap pull-right">
                            <h2>{{$ls->title}}</h2>
                            <p>{!! $ls->content !!}</p>
                        </div>
                    </div>                    
                </div>
                @if($lsnum>4)
                <?php $lsnum = 1; ?>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
@endforeach

<!-- #our-mission -->
<!--<section id="our-mission">
    <div class="container">
        <div class="section-title">
            <h1>Sejarah</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <p>sebagai wilayah di luar Ring I Jawa Timur yang terus berkembang, kabupaten dan kotamadya di wilayah Trenggalek, Tulungagung, Blitar, Kediri, Nganjuk, Madiun, Jombang dan Mojokerto mengalami peningkatan
                    pembangunan yang pesat pada sektor industri, perikanan dan kesehatan. </p>
                <p>Perkembangan yang pesat harus diimbangi oleh tersedianya secara mudah berbagai sumber daya penunjang, salah satunya oksigen dan gas-gas lain, tahun 2004 Merak Muda Gas membuka stasiun pengisian 
                    gas Oksigen di Tulungagung, dimana diharapkan dapat lebih mempercepat usaha-usaha daerah untuk mengembangkan diri.</p>
                <p>Tahun 2006 Merak Muda Gas mengembangkan keahlian dengan mulai melatih dan membentuk tim Instalasi Sentral dimana pada tahun tersebut melayani pemasangan instalasi sentral dan memberi 
                    service rutin kepada pelanggan khususnya Rumah Sakit supaya distribusi gas oksigen kepada pasien tidak mengganggu oleh adanya kerusakan alat penunjang.</p>

            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="img-holder">
                    <img src="img/about/1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>-->
<!-- /#our-mission -->

<!--<section id="featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 pull-right">
                <div class="col-lg-12 col-md-12" >
                    <p>Tahun 2007 Merak Muda Gas menginvestasikan da untuk memperlengkapi dengan mesin penguji kelayakan tabung dengan sistem Hidrostati Tes sehingga diharapkan seluruh tabung yang beredar
                        di pelanggan benar-benar aman dipakai.</p>
                    <p>Tahun 2008 Merak Muda Gas membuka Cabang Stasiun Pengisian Gas Oksigen di Jombang dengan harapan wilayah yang dapat dijangkau semakin luas dan mengamankan ketersediaan pasokan oksigen bila 
                        sewaktu-waktu terjadi hambatan. Dengan 10.000 tabung yang beredar, 10 kendaraan pengirim, 5 tangki penyimpan Oksigen dan 2 Filling Station memberi rasa aman dan nyamankepada seluruh pelanggan Merak Muda Gas</p>
                    <p>Mulai tahun 200+ bergerak lebih maju dikarenakan Rumah Sakit dan Industri sudah banyak yang berkembang pesat maka sistem distribusi oksigen diubah dari cylinder menjadi Tangki Cryogenic.</p>
                </div>
                <div class="col-lg-6 col-md-6">
                </div>
                <div class="col-lg-6 col-md-6 ">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 about-image pull-left wow slideInLeft" data-wow-offset="10">
                <img src="img/about/2.jpg" alt="">
            </div>
        </div>
    </div>
</section>-->

<!-- #our-motto -->
<!--<section id="our-mission">
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
        </div>
    </div>
</section> -->
<!-- /#our-motto -->

<!-- #our-vison -->
<!--<section id="our-mission">
    <div class="container">
        <div class="section-title">
            <h1>Visi</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <p>
                    <i class="fa fa-quote-left"></i> 
                    Menjadi perusahaan penyedia gas dan alat-alat penunjang medis dan industri yang paling terpercaya, berkualitas unggul dan mampu bersain di pasar global.
                </p>
            </div>

        </div>
    </div>
</section> -->
<!-- /#our-vision -->

<!-- #our-vision -->
<!--<section id="featured">
    <div class="container">
        <div class="section-title">
            <h1>Misi</h1>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12">
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
        </div>
    </div>
</section> -->
<!-- /#our-vison -->

<section id="featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 pull-right">
                <div class="col-lg-12 col-md-12" >

                </div>
                <div class="col-lg-6 col-md-6">
                </div>
                <div class="col-lg-6 col-md-6 ">
                </div>
            </div>
            <div class="col-lg-4 col-md-4 about-image pull-left wow slideInLeft" data-wow-offset="10">

            </div>
        </div>
    </div>
</section>


@stop