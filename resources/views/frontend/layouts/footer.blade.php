<!-- #emergency -->
<section id="emergency">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <img class="wow bounceInLeft" src="{{$footer_emergency->img}}" alt="">
            </div>
            <div class="col-lg-offset-3 col-md-offset-3 col-lg-9 col-md-9">
                <h2>{{$footer_emergency->title}}</h2>
                <p>{{$footer_emergency->subtitle}}</p>
                <p class="phone-contact"><b>{{$footer_emergency->telp}}</b> OR <a href="contact" class="hvr-bounce-to-right">Kirim Pesan</a></p>
            </div>
        </div>
    </div>
</section> <!-- /#emergency -->


<!-- #clients -->
<section id="clients">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="owl-carousel owl-theme">
                    @foreach($footer_partner as $dt)
                    <div class="item">
                        <a href="http://{{$dt->link}}" target="_blank  " >
                            <img src="{{$footer_partner_img_path . "/" . $dt->img}}" alt="{{$dt->nama}}">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> <!-- /#clients -->



<!-- footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="request-for-qoute-wrap"><a href="contact" class="request-for-qoute wow slideInDown hvr-bounce-to-right">{{$footer_bottom->message_info_text}}</a></div>
                <nav class="footer-menu">
                    <button class="footer-nav-toggler hvr-bounce-to-right">Footer Menu <i class="fa fa-bars"></i></button>
                    <ul>
                        @foreach($menu as $dt)
                        <li><a href="{{$dt->url}}">{{$dt->nama}}</a></li>
                        @endforeach
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row">
            <!-- .widget -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
                <h3>{{$office_1->nama_cabang}}</h3>
                <ul class="contact-info">
                    <li><i class="fa fa-map-marker"></i> {{$office_1->alamat}}</li>
                    <li><i class="fa fa-phone"></i> {{$office_1->phone}}</li>
                    <li><i class="fa fa-fax"></i> {{$office_1->fax}}</li>
                    <li><a href="mailto:{{$office_1->email}}" ><i class="fa fa-envelope-o"></i> {{$office_1->email}}</a></li>
                </ul>
            </div> <!-- /.widget -->
            <!-- .widget -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
                <h3>{{$office_2->nama_cabang}}</h3>
                <ul class="contact-info">
                    <li><i class="fa fa-map-marker"></i> {{$office_2->alamat}}</li>
                    <li><i class="fa fa-phone"></i> {{$office_2->phone}}</li>
                    <li><i class="fa fa-fax"></i> {{$office_2->fax}}</li>
                    <li><a href="mailto:{{$office_2->email}}" ><i class="fa fa-envelope-o"></i> {{$office_2->email}}</a></li>
                </ul>
            </div> <!-- /.widget -->
            <!-- .widget -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
                <h3>{{$office_3->nama_cabang}}</h3>
                <ul class="contact-info">
                    <li><i class="fa fa-map-marker"></i> {{$office_3->alamat}}</li>
                    <li><i class="fa fa-phone"></i> {{$office_3->phone}}</li>
                    <li><i class="fa fa-fax"></i> {{$office_3->fax}}</li>
                    <li><a href="mailto:{{$office_3->email}}" ><i class="fa fa-envelope-o"></i> {{$office_3->email}}</a></li>
                </ul>
            </div> <!-- /.widget -->
            <!-- .widget -->
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 widget">
                <img class="positioned wow slideInUp " src="{{$footer_bottom->img}}" alt="">
            </div> <!-- /.widget -->
        </div>
    </div>
</footer> <!-- /footer -->

<!-- #bottom-bar -->
<section id="bottom-bar">
    <div class="container">
        <div class="row">
            <!-- .copyright -->
            <div class="copyright pull-left">
                <p>Copyright &copy; PT Merak Muda Gas 2016. All rights reserved. </p>
            </div> <!-- /.copyright -->
            <!-- .credit -->
            <div class="credit pull-right">
                <p>Created by: <a href="mailto:butirpadi@outlook.com" target="_top">Datamatic Tech Id</a> </p>
            </div> <!-- /.credit -->
        </div>
    </div> 
</section><!-- /#bottom-bar -->