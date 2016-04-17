@extends('frontend.layouts.layouts') 

@section('styles') 
<style>
    .fa-green {
        color: green;
    }
</style>
@append 

@section('content') 

@include('frontend.layouts.pagetitle')
<!-- #faq -->
<section id="blog-post" class="faq">
    <div class="container">
        <div class="row">
            <!-- .faq-content -->
            <div class="col-lg-12 col-md-12 col-sm-12 faq-content">
                <!-- article -->
                <article>
                    <div class="row">
                        <div class="col-lg-12 faq-title">
                            <h2>{{$career_setting->title}}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="faq-text">
                                {!! $career_setting->desc !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 faq-title">
                            <h2>{{$career_setting->available_position_title}}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="general-question">
                                <div class="panel-group" role="tablist" aria-multiselectable="true">
                                    @foreach($career as $dt)
                                    <div class="panel panel-default">
                                        <div class="panel-heading headback" role="tab" id="heading{{$dt->id}}">
                                            <h4 class="panel-title">
										        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$dt->id}}" aria-expanded="true" aria-controls="collapse{{$dt->id}}">
										          {{$dt->title}}
										        </a>
										      </h4>
                                        </div>
                                        <div id="collapse{{$dt->id}}" class="panel-collapse collapse " role="tabpanel">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-sm-8 col-md-8 col-lg-8">
                                                        <h2>{{$dt->title}}</h2>
                                                        {!! $dt->desc !!}
                                                        <a class="btn btn-primary" href="career/apply/{{$dt->id}}" >Apply now</a>
                                                    </div>
                                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                                        @if($dt->img != '')
                                                            <img src="{{$career_img_path . '/' . $dt->img}}"  class="img-responsive" />
                                                        @endif
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                </article>
                <!-- /article -->


            </div>
            <!-- /.Testimonials-V1 -->

        </div>
    </div>
</section>
<!-- /#Testimonial-V1 -->
@stop 

@section('scripts')
<script src="https://cdn.jsdelivr.net/jquery.nailthumb/1.1/jquery.nailthumb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.js"></script>
<script>
    (function($) {
        //ubah style ul li
        $('.panel .panel-body ul li').each(function(i, data) {
            var new_text = $(this).text();
            // $(this).text( '<i class="fa fa-check" ></i> ' .$(this).text());
            $(this).html('<i class="fa fa-check-circle fa-green" ></i> ' + new_text);
        });
    })(jQuery);
</script>
@append