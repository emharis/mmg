@extends('backend.layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Homepage
    </h1>
    <!--    <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>-->
</section>

<!-- Main content -->
<section class="content">

    <!-- Custom Tabs -->
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Image Slider</a></li>
            <li><a href="#tab_2" data-toggle="tab">Middle Content</a></li>
            <li><a href="#tab_3" data-toggle="tab">Layanan</a></li>
            <li><a href="#tab_4" data-toggle="tab">Gallery</a></li>
            <li><a href="#tab_4" data-toggle="tab">Blogs</a></li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                @include('backend.pages.homepage.imageslider')
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="tab_4">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="tab_5">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
            </div><!-- /.tab-pane -->
        </div><!-- /.tab-content -->
    </div><!-- nav-tabs-custom -->

</section><!-- /.content -->
@stop

@section('scripts')
<script>
    (function ($) {
        //button new click
        $('#btn-new').click(function () {
            //tampilkan form new
            $('#form-new').hide();
            $('#form-new').removeClass('hide');
            $('#form-new').slideDown(200);
            return false;
        });

        //button cancel new
        $('#btn-cancel-new').click(function () {
            $('#form-new').slideUp(250);
            //clear form input
            $('input[name=img]').val('');
        });

        //pilih image slider type
        $('#slider_type').change(function () {
            $('#slider_type_preview').fadeOut(200, null, function () {
                var img_url = $('select[name=slider_type] option:selected').data('img');
                $('#slider_type_preview').attr('src', img_url);
                $('#slider_type_preview').fadeIn(250);
            });
        });

        //submit form
        $('form[name=form-new-slider]').submit(function () {
            var data = $(this).serialize();
            var url = $(this).attr('action');
            $.post(url, data, function (dt) {
            });
            return false;
        });


    })(jQuery);
</script>
@stop
