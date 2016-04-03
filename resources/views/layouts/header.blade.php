<!-- #topbar -->
<section id="topbar">
    <div class="container">
        <div class="row">
            <div class="social pull-left">
                <ul>
                    @foreach($sosmed as $dt)
                        @if(strtolower($dt->name) == 'facebook')
                        <li><a href="http://www.facebook.com/{{$dt->value}}" target="_blank" ><i class="fa fa-facebook"></i></a></li>
                        @elseif(strtolower($dt->name) == 'twitter')
                        <li><a href="http://www.twitter.com/{{$dt->value}}" target="_blank" ><i class="fa fa-twitter"></i></a></li>
                        @elseif(strtolower($dt->name) == 'google plus')
                        <li><a href="http://plus.google.com/{{$dt->value}}" target="_blank" ><i class="fa fa-google"></i></a></li>
                        @elseif(strtolower($dt->name) == 'instagram')
                        <li><a href="http://www.instagram.com/{{$dt->value}}" target="_blank" ><i class="fa fa-instagram"></i></a></li>
                        @elseif(strtolower($dt->name) == 'youtube')
                        <li><a href="http://www.youtube.com/{{$dt->value}}" target="_blank" ><i class="fa fa-youtube"></i></a></li>
                        @endif                    
                    @endforeach
                </ul>
            </div> <!-- /.social -->
            <div class="contact-info pull-right">
                <ul>
                    <li><a href="tel:{{$header_contact['TL']}}" class="hvr-bounce-to-bottom"><i class="fa fa-phone"></i>  {{$header_contact['TL']}} </a></li>
                    <li><a href="mailto:{{$header_contact['ML']}}" class="hvr-bounce-to-bottom"><i class="fa fa-envelope-o"></i> {{$header_contact['ML']}}</a></li>
                </ul>
            </div> <!-- /.contact-info -->
        </div>
    </div>
</section> <!-- /#topbar -->

<!-- header -->
<header>
    <div class="search-box">
        <div class="container">
            <div class="pull-right search  col-lg-3 col-md-4 col-sm-5 col-xs-12">
                <form action="#">
                    <input type="text" placeholder="Search Here"> <button type="submit"><i class="icon icon-Search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <div class="cart-box">
        <div class="container">
            <div class="pull-right cart col-lg-6 col-xs-12">
                <p><i class="icon icon-FullShoppingCart"></i> You Have <span>1 Item</span> in your Cart. Price is <span>$199</span></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4 col-lg-offset-0 col-md-offset-4 logo">
                <a href="home">
                    <img src="{{$company_logo}}" alt="PT. Merak Muda Gas">
                </a>
            </div>
            <nav class="col-lg-9 col-md-12 col-lg-pull-0 col-md-pull-1 mainmenu-container">
                <ul class="top-icons-wrap pull-right">
                    <li class="top-icons search"><a href="#"><i class="icon icon-Search"></i></a></li>
                    <!--<li class="top-icons cart"><a href="#"><i class="icon icon-ShoppingCart"></i></a></li>-->
                </ul>
                <button class="mainmenu-toggler">
                    <i class="fa fa-bars"></i>
                </button>
                <ul class="mainmenu pull-right">
<!--                    <li class="current">
                        <a href="home" class="hvr-overline-from-left">Home</a>
                                                        <ul class="submenu">
                                                            <li><a href="index-v2.html">One Page Version</a></li>
                                                            <li class="dropdown">
                                                                <a href="header-v1.html">Header Variations</a>
                                                                <ul class="submenu">
                                                                    <li><a href="header-v1.html">Header V1</a></li>
                                                                    <li><a href="header-v2.html">Header V2</a></li>
                                                                    <li><a href="header-v3.html">Header V3</a></li>
                                                                    <li><a href="header-v4.html">Header V4</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                    </li>
                    <li class="">
                        <a href="about" class="hvr-overline-from-left">About Us</a>
                    </li>
                                                <li class="dropdown">
                                                    <a href="#" class="hvr-overline-from-left">Pages</a>
                                                    <ul class="submenu">
                                                        <li><a href="search-result.html">Search Results</a></li>
                                                        <li><a href="no-search-results.html">No serarch result</a></li>
                                                        <li><a href="404.html">404 Page</a></li>
                                                    </ul>
                                                </li>
                    <li class="dropdown">
                        <a href="services" class="hvr-overline-from-left">Services</a>
                        <ul class="submenu">
                            <li><a href="services/detail/gas-industri">Gas Industri</a></li>
                            <li><a href="services/detail/gas-medis">Gas Medis</a></li>
                            <li><a href="services/detail/suku-cadang">Suku Cadang</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="products" class="hvr-overline-from-left">Products</a>
                                                        <ul class="submenu">
                                                            <li><a href="pricing.html">Pricing</a></li>
                        
                                                        </ul>
                    </li>
                    <li class="">
                        <a href="gallery" class="hvr-overline-from-left">Gallery</a>
                    </li>
                                        <li class="dropdown">
                                            <a href="shop.html" class="hvr-overline-from-left">Shop</a>
                                            <ul class="submenu">
                                                <li><a href="product-details.html">Product Details</a></li>
                                                <li><a href="cart-page.html">Cart Page</a></li>
                                                <li><a href="checkout-page.html">Checkout Page</a></li>
                                            </ul>
                                        </li>
                    <li class="dropdown">
                        <a href="blog" class="hvr-overline-from-left">Blog</a>
                        <ul class="submenu">
                            <li><a href="blog-v2.html">Blog Style Two</a></li>						
                            <li><a href="blog-v3.html">Blog Style Three</a></li>
                            <li><a href="blog.html">Blog Left Sidebar</a></li>
                            <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                            <li><a href="blog-single.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us" class="hvr-overline-from-left">Contact Us</a></li>-->
                    @foreach($menu as $dt)
                    <li class="{{Request::route()->getName() == $dt->url ? 'current':''}}">
                            <a href="{{$dt->url}}" class="hvr-overline-from-left">{{$dt->nama}}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
</header> <!-- /header -->