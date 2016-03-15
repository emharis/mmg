@extends('backend.layouts.master')

@section('styles')
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        About Us
    </h1>
</section>

<!-- Main content -->
<section class="content">
    
    <div class="box box-solid" >
        <div class="box-body" >
            @include('backend.pages.about.desc')
        </div>
        
    </div>


</section><!-- /.content -->
@stop

@section('scripts')
@stop