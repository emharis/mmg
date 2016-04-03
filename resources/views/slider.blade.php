<ul>

@foreach($slider as $dt)

<li 
    class="slider-{{$dt->type}}" 
    data-transition="fade" 
    data-slotamount="7" 
    data-thumb="{{$slider_img_path . "/" . $dt->img}}"
    data-title="{{$dt->title}}">

    <img 
        src="{{$slider_img_path . "/" . $dt->img}}" 
        data-bgrepeat="no-repeat" 
        data-bgfit="cover" 
        data-bgposition="top center"
        alt="slider image">

    @if($dt->type == 1)
    <!-- .banner-txt -->
    <div 
        class="caption zoomin banner-txt col-lg-5 tp-resizeme" 
        data-x="0" 
        data-y="110" 
        data-speed="700" 
        data-start="1700"  
        data-easing="easeOutBack">

        <h1 style="">
            <span style="color:{!!$dt->title_color !!}!important;" >{{$dt->title}}</span> <br>
            <span style="color:{!!$dt->second_title_color!!}!important;" >{{$dt->second_title}}</span>
        </h1>
        <p style="color:{!!$dt->subtitle_color!!}!important;" >{!!$dt->subtitle!!}</p>
    </div> <!-- /.banner-txt -->
    @elseif($dt->type == 2)
    <div 
        class="caption skewfromright  light-plumber-slider-caption tp-resizeme" 
        data-x="0" 
        data-y="200" 
        data-speed="600" 
        data-start="1700" 
        data-easing="easeOutBack">

        <h1 style="color:{!!$dt->subtitle_color !!}!important;" >{{$dt->subtitle}}</h1>
    </div>
    <div 
        class="caption randomrotate bold-plumber-slider-caption tp-resizeme" 
        data-x="0" 
        data-y="250" 
        data-speed="500" 
        data-start="2200" 
        data-easing="easeOutBack">

        <h1 style="color:{!!$dt->title_color !!}!important;" >{{$dt->title}} <br>
            <span style="color:{!!$dt->second_title_color !!}!important;" >{{$dt->second_title}}</span>
        </h1>
    </div>
    @elseif($dt->type == 3)
    <div       
        class="caption fade tp-resizeme bold-pxslider-caption"
        data-x="780" 
        data-y="95" 
        data-speed="500" 
        data-start="1700">
        <h1 style="background-color: {!!$dt->title_color !!}!important;" >{{$dt->title}} </h1>
    </div>
    <div         
        class="caption lfl tp-resizeme light-pxslider-caption"
        data-x="780" 
        data-y="145" 
        data-speed="500" 
        data-start="2200">
        <h1 style="background-color: {!!$dt->second_title_color !!}!important;" >{{$dt->second_title}}</h1>
    </div>
    <div 
        style="color:{!!$dt->list_item_1_color !!}!important;"
        class="caption lfl tp-resizeme simple-pxslider-caption"
        data-x="780" 
        data-y="225" 
        data-speed="500" 
        data-start="2400">
        <i class="fa fa-check"></i> {!! $dt->list_item_1 !!}
    </div>
    <div 
        style="color:{!!$dt->list_item_2_color !!}!important;"
        class="caption lfl tp-resizeme simple-pxslider-caption"
        data-x="780" 
        data-y="290" 
        data-speed="500" 
        data-start="2600">
        <i class="fa fa-check"></i> {!! $dt->list_item_2 !!}
    </div>
    <div 
        style="color:{!!$dt->list_item_3_color !!}!important;"
        class="caption lfl tp-resizeme simple-pxslider-caption"
        data-x="780" 
        data-y="355" 
        data-speed="500" 
        data-start="2800">
        <i class="fa fa-check"></i> {!! $dt->list_item_3 !!}
    </div>
    <div 
        style="color:{!!$dt->list_item_4_color !!}!important;"
        class="caption lfl tp-resizeme simple-pxslider-caption"
        data-x="780" 
        data-y="420" 
        data-speed="500" 
        data-start="3000">
        <i class="fa fa-check"></i> {!! $dt->list_item_4 !!}
    </div>
    <div 
        style="color:{!!$dt->list_item_5_color !!}!important;"
        class="caption lfl tp-resizeme simple-pxslider-caption"
        data-x="780" 
        data-y="485" 
        data-speed="500" 
        data-start="3000">
        <i class="fa fa-check"></i> {!! $dt->list_item_5 !!}
    </div>
    @endif
</li>            

@endforeach

</li>