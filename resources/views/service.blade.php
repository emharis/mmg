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

<!-- #service-content -->
<section id="service-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                <h1>12 Tahun Melayani</h1>
                <p>Sejak tahun 2004 Membuka stasiun Pengisian gas Oksigen pertama di Tulungagung, kini Merak Muda Gas bergerak lebih maju dengan membuka beberapa cabang untuk memnuhi kebutuhan konsumen Industri
                    dan Rumah Sakit yang semakin berkembang pesat.</p>

                <button class="bold hvr-bounce-to-right"><i class="fa fa-phone"></i> 0354 7418597</button> <button class="hvr-bounce-to-right"> <i class="fa fa-envelope"></i> info@merakmudagas.com</button>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <div class="img-holder"><img src="img/resources/service.jpg" alt=""></div>
            </div>
        </div>
    </div>
</section> <!-- /#service-content -->

<!-- #service-we-provide -->
<section id="service-we-provide">
    <div class="container">
        <div class="section-title">
            <h1>Layanan yang kami tawarkan</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 wow slideInLeft">
                <div class="service-tab-title">
                    <ul class="clearfix">
                        <li class="active" data-tab-name="gas-industri">Gas & Peralatan Industri</li>
                        <li data-tab-name="gas-medis">Gas & Peralatan Medis</li>
                        <li data-tab-name="suku-cadang">Suku Cadang</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 wow slideInRight">
                <div class="row">
                    <div class="service-tab-content clearfix">
                        <div id="gas-industri">
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <p>Sudah melayani lebih dari 20 tahun serta menjamin Technical Backup <br> dengan perusahaan nasional  dan internasional yang berpengalaman <br> di bidang gas industri antara lain PT Samator, PT United Air Product </br> dan Universal Industrial Gas Corp USA.</p>
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <img src="img/service-we-provide/1.jpg" alt="">
                                    </div>
                                    <div class="col-lg-6 col-md-12 col-sm-6 col-xs-12">
                                        <ul>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Acetylene (C2H2)</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Exygen (O2)</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>METHANE (CH4)</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Nitrogen (N2)</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Carbon Dioxide (CO2)</li>
                                            <li><i class="fa fa-arrow-circle-o-right"></i>Cigweld Tools</li>										
                                        </ul>
                                    </div>
                                </div>
                                <a href="gas-industri" class="read-more" >Baca Selengkapnya <i class="fa fa-angle-double-right" ></i></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src="img/service-we-provide/2.png" alt="">
                            </div>
                        </div>
                        <div id="gas-medis">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <p>Menyediakan gas medis adalah salah satu keahlian kita. Dalam penyediaan gas-gas keperluan medis, kami bekerja sama dengan Balai Pengaman Fasilitas Kesehatan Departemen Kesehatan Provinsi Jawa Timur dan Dinas Tenaga Kerja dalam melakukan pengawasan yang ketat mulai dari pengetesan kelayakan tabung, kebersihan dan higienisnya tabung.
                                    <br/>
                                    <a href="gas-medis" class="read-more" >Baca Selengkapnya <i class="fa fa-angle-double-right" ></i></a>
                                </p>

                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 zoomIn">
                                <img src="img/service-we-provide/3.png" alt="">
                            </div>
                        </div>
                        <div id="suku-cadang">
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <p>Komitmen kami untuk melayani secara total juga kami wujudkan dengan menjadmin bahwa semua produk yang kami distribusikan memiliki suku cadang yang lengkap yang ditunjang dengan tenaga ahli yang siap dan terampil.
                                    <br/>
                                    <a href="suku-cadang" class="read-more" >Baca Selengkapnya <i class="fa fa-angle-double-right" ></i></a>
                                </p>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <img src="img/service-we-provide/5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 zoomIn">
                                <img src="img/service-we-provide/6.png" alt="">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#service-we-provide -->

<!-- #why-choose-us -->
<section id="why-choose-us">
    <div class="container">
        <div class="section-title">
            <h1>Kenapa memilih kami</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="img-wrap wow fadeInDown">
                    <img src="img/why-choose-us/icon/1.png" alt="">
                </div>
                <h4>On Time Delivery</h4>
                <p>Kami menjamin pengiriman permintaan anda sepenuhnya.</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="img-wrap wow fadeInDown" data-wow-delay=".3s">
                    <img src="img/why-choose-us/icon/2.png" alt="">
                </div>
                <h4>Tim Instalasi Sentral</h4>
                <p>yang profesional, ahli dan bertanggung jawab.</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="img-wrap wow fadeInDown" data-wow-delay=".6s">
                    <img src="img/why-choose-us/icon/3.png" alt="">
                </div>
                <h4>Berkualitas</h4>
                <p>Barang dan jasa sesuai dengan spesifikasi dan berkualitas.</p>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="img-wrap wow fadeInDown" data-wow-delay=".9s">
                    <img src="img/why-choose-us/icon/4.png" alt="">
                </div>
                <h4>Harga yang wajar</h4>
                <p>Sesuai dengan kualitas barang dan jasa.</p>
            </div>
        </div>
    </div>
</section><!-- /#why-choose-us -->

@stop