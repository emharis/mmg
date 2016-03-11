@extends('backend.layouts.master')

@section('styles')
@stop

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
            <li class="active"><a href="#tab_1" data-toggle="tab">Header</a></li>
            <li><a href="#tab_2" data-toggle="tab">Footer</a></li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                @include('backend.pages.headfoot.header')
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
                @include('backend.pages.headfoot.footer')
            </div><!-- /.tab-pane -->
        </div><!-- /.tab-content -->
    </div><!-- nav-tabs-custom -->

</section><!-- /.content -->
@stop

@section('scripts')

<script>
    (function ($) {

    })(jQuery);
</script>
@stop
