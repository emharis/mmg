@extends('backend.layouts.master')

@section('styles')
@parent
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="backend/plugins/iCheck/all.css">
@append

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Header & Footer
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active" ><a href="#tab_2" data-toggle="tab">Menu</a></li>
            <li ><a href="#tab_1" data-toggle="tab">Header</a></li>

            <li><a href="#tab_3" data-toggle="tab">Footer</a></li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_2">
                @include('backend.pages.headfoot.menu')
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="tab_1">
                @include('backend.pages.headfoot.header')
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
                @include('backend.pages.headfoot.footer')
            </div><!-- /.tab-pane -->
        </div><!-- /.tab-content -->
    </div><!-- nav-tabs-custom -->

</section><!-- /.content -->
@stop

@section('scripts')
<!-- iCheck 1.0.1 -->
<script src="backend/plugins/iCheck/icheck.min.js"></script>
<script>
    (function ($) {
        //styling checkbox
        $('input[type="checkbox"].ck-sosmed, input[type="checkbox"].ck-contact, input[type="checkbox"].ck-menu, input[type="checkbox"].ck-partner').iCheck({
            checkboxClass: 'icheckbox_flat-green'
        });

    })(jQuery);
</script>
@append
