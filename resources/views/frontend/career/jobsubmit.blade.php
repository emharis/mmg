@extends('frontend.layouts.layouts') 

@section('styles')
@append 

@section('content') 

@include('frontend.layouts.pagetitle')
<div class="clearfix" ></div>
<br/>
<br/>
<!-- #faq -->
<section id="form-apply" class="faq" >
    <div class="container text-center">
        {{$message}}
        <div class="clearfix" ></div>
        <br/>
        <br/>
        <a class="btn btn-primary" href="home" ><i class="fa fa-mail-reply" ></i> Back to Homepage</a>
    </div>
</section>
<!-- /#Testimonial-V1 -->
<div class="clearfix" ></div>
<br/>
<br/>
@stop 

@section('scripts')
@append
