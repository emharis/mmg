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
<!-- #contact-content -->
<section id="contact-content">
    <div class="container">
        <div class="row">
            <p>You can talk to our online representative at any time. Please use our Live Chat System on our website or Fill up below instant messaging programs. <br>Please be patient, We will get back to you. Our 24/7 Support, General Inquireies Phone: + 0987 654 321</p>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                <form action="sendemail.php" class="contact-form">
                    <p><input type="text" name="name" placeholder="Name"></p>
                    <p><input type="text" name="email" placeholder="Email"></p>
                    <p><input type="text" name="subject" placeholder="Subject"></p>
                    <p><textarea name="message" placeholder="Message"></textarea></p>
                    <p><button type="submit">Get A Qoute</button></p>
                </form>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12  col-lg-offset-1  col-md-offset-0  col-sm-offset-0  col-xs-offset-0 contact-info">
<!--                <h3>Contact info</h3>
                <p>Have any Queries? Let us know. We will clear it for <br> you at the best.</p>-->
                <ul>
                    <li class="clearfix">
                        <img src="img/contact-page/icon/1.png" alt=""> 
                        <div class="content">
                            <h4>Office Tulungagung</h4>
                            <p>
                                Jl. Raya Pojok Ngantru km. 10 
                                <br>Tulungagung, Jawa Timur
                                <br>Phone : 0355-7708848, 081-335682682
                                <br>Fax : 0355-335571
                                <br>Email : tulungagung@merakmudagas.com
                            </p>
                        </div>
                    </li>
                    <li class="clearfix">
                        <img src="img/contact-page/icon/1.png" alt=""> 
                        <div class="content">
                            <h4>Office Jombang</h4>
                            <p>
                                Jl. Raya Perak-Jombang km. 08
                                <br>Jombang, Jawa Timur
                                <br>Phone : 0321-874041, 081-259143005
                                <br>Fax : 0321-874041
                                <br>Email : jombang@merakmudagas.com
                            </p>
                        </div>
                    </li>
                    <li class="clearfix">
                        <img src="img/contact-page/icon/1.png" alt=""> 
                        <div class="content">
                            <h4>Office Kediri</h4>
                            <p>
                                Jl. Letjen Suprapto 1/24
                                <br>Kediri, Jawa Timur
                                <br>Phone : 0354-689402
                                <br>Email : kediri@merakmudagas.com
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="google-map" id="contact-google-map" data-map-lat="-7.819069" data-map-lng="112.0238241" data-icon-path="img/resources/map-marker.png" data-map-title="Envato HQ" data-map-zoom="12"></div>
        </div>
    </div>
</section> <!-- /#contact-content -->
@stop