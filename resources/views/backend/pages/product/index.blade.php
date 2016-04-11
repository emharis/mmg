@extends('backend.layouts.master')

@section('styles')
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Product
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Category</a></li>
            <li><a href="#tab_2" data-toggle="tab">Product Setting</a></li>
            <li><a href="#tab_3" data-toggle="tab">Data Product</a></li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                @include('backend.pages.product.kategori.index')
            </div>
            <div class="tab-pane" id="tab_2">
                @include('backend.pages.product.product.setting')
            </div>
            <div class="tab-pane" id="tab_3">
                @include('backend.pages.product.product.index')
            </div><!-- /.tab-pane -->
        </div><!-- /.tab-content -->
    </div>
</section><!-- /.content -->

@stop

@section('scripts')
<script src="backend/plugins/jqueryform/jquery.form.js" type="text/javascript"></script>
<script>
    (function ($) {

    })(jQuery);
</script>
@stop
