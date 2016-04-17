@extends('frontend.layouts.layouts') @section('styles') @stop @section('content') @include('frontend.layouts.pagetitle')
<section id="project-version-one" class="project-v3">
    <div class="container">
        <div class="row">

        </div>
        <div class="row normal-gallery two-col-gallery" id="image-gallery-mix">
            @foreach($portfolio as $dt)
            <a href="{{$portfolio_img_path . '/' . $dt->img}}" class="fancybox-img" title="{{$dt->title}}">
                <div class="col-lg-6 col-sm-6 col-xs-12 tank outside single-project-item hvr-float-shadow mix">
                    <div class="img-wrap">
                        <div class="overlay"><img src="{{$portfolio_img_path . '/' . $dt->img}}" alt=""></div>
                    </div>
                    <div class="content hvr-bounce-to-bottom">
                        <h4>{{$dt->title}}</h4>
                        <span>{{$dt->subtitle}}</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@stop @section('scripts')
<script src="https://cdn.jsdelivr.net/jquery.nailthumb/1.1/jquery.nailthumb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.js"></script>
<script>
    (function($) {
        $(".fancybox-img").fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            arrows: false,
            helpers: {
                title: {
                    type: 'inside'
                }
            }
        });
    })(jQuery);
</script>
@append