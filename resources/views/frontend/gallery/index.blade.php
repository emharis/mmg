@extends('frontend.layouts.layouts') @section('styles') @stop @section('content') @include('frontend.layouts.pagetitle')
<section id="project-version-one">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <ul class="gallery-filter">
                    <li data-filter="all">
                        <span>All</span>
                    </li>
                    @foreach($kategori as $dt)
                    <li data-filter=".gallery-{{$dt->id}}">
                        <span>{{$dt->nama}}</span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row normal-gallery gallery-v4" id="image-gallery-mix">
            @foreach($gallery as $dt)
            <div class="col-lg-3 single-project-item col-md-3 col-sm-6	col-xs-12  gallery-{{$dt->kategori_id}}">
                <div class="img-wrap">
                    <?php $fancybox_class = $dt->type == "I" ? "fancybox-img" : "fancybox-ytb"; ?> <?php $fancybox_img = $dt->type == "I" ? $gallery_img_path.'/'.$dt->img : $dt->img; ?> <?php $fancybox_url = $dt->type == "I" ? $gallery_img_path.'/'.$dt->img : $dt->youtube_url; ?> @if($dt->type == "I")
                    <img src="{{$fancybox_img}}" class="gal-img" alt=""> @else
                    <div class="gal-nailthumb">
                        <img src="{{$fancybox_img}}" class="gal-ytb" alt="">
                    </div>
                    @endif
                    <div class="content-wrap">
                        <div class="border">
                            <div class="content">
                                <a class="{{$fancybox_class}}" title="{{$dt->title}}" href="{{$fancybox_url}}"><h4>{{$dt->title}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div>
</section>
@stop @section('scripts')
<script src="https://cdn.jsdelivr.net/jquery.nailthumb/1.1/jquery.nailthumb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.js"></script>
<script>
    (function($) {
        function normalizeImage() {
            

        }

        $(".fancybox-ytb").fancybox({
            openEffect: 'elastic',
            closeEffect: 'elastic',
            fitToView: false,
            width: '70%',
            height: '70%',
            arrows: false,
            helpers: {
                title: {
                    type: 'inside'
                },
                media: {}
            }
        });
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
    
    (function($){
        $(window).load(function(){
            //normalize
            //ganti image dengan image youtube
            $('img.gal-ytb').each(function(i, data) {
                var img_src = $(this).data('src');
                $(this).attr('src', img_src);
            });
            //set image size to thumbnail
            var _width = $('img.gal-img:first').width();
            var _height = $('img.gal-img:first').height();
            jQuery('.gal-nailthumb').nailthumb({
                width: _width,
                height: _height
            });
        });
    })(jQuery);
</script>
@append