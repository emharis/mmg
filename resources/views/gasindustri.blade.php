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

<!-- #our-mission -->
<section id="our-mission">
    <div class="container">
        <div class="section-title">
            <h1>Gas Industri & Peralatan Industri</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12">
                <p>
                    Sudah melayani lebih dari 20 tahun serta menjalin Technical backup dengan perusahaan nasional dan internasional yang berpengalaman di bidan gas industi
                    antara lain PT Samator, PT United Air Product dan Universal Industrial Gas Crop. USA membuat kami sangat memahami seluruh aspek penyediaan gas bagi 
                    industri baik aspek kualitas produk, distribusi yang tepat waktu, layanan yang murah senyum dan fleksibel sampai dengan layanan purna jual. Dedikasi selama itu membuat kami tumbuh menjadi perusahaan yang dipercaya sebagai mitra kerja yang jujur dan dapat diandalkan.
                </p>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="img-holder">
                    <img src="img/resources/gas-industri.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-md-5 col-sm-12">
                <div class="img-holder">
                    <img src="img/resources/cigweld-product.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12">
                <p>
                    Demikian pula supaya dapat menunjang kerja yang bagus kami juga bekerja sama dengan CIGWELD Australia dan WIPRO Germany untuk menyediakan peralatan las yang berkualitas, tahan lama dan dengan harga yang bersaing.
                </p>
            </div>
        </div>
    </div>
</section> <!-- /#our-mission -->




@stop