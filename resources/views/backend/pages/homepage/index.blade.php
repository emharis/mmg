@extends('backend.layouts.master')

@section('styles')
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="backend/plugins/colorpicker/bootstrap-colorpicker.min.css">
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
@stop

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
<!-- bootstrap color picker -->
<script src="backend/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="backend/plugins/jqueryform/jquery.form.js" type="text/javascript"></script>
<script src="js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script>
    (function ($) {
//        alert('ok');

        //fancy image
        $("a.single_image").fancybox();

//        initialize jquery form
        $('#form-new-slider').ajaxForm({
            success: function (data) {
                //bersihkan form
                $('#form-new-slider input[type=text]').each(function () {
                    $(this).val('');
                });
                $('#form-new-slider select').val([]);
                //clear img search
                $('#slider_type_preview').attr('src', '');
                //close form input
                $('#form-new').slideUp(250);
                //tampilkan new form ke tabel
                var newrow = '<tr>\n\
                                <td></td>\n\
                                <td>' + data.img + '</td>\n\
                                <td></td>\n\
                                <td></td>\n\
                                <td></td>\n\
                              </tr>';
                $('#table-slider tbody').append();
            }
        });

        //check image size 
        $('input[name=img]').change(function () {
            var fr = new FileReader;
            fr.onload = function () {
                var img = new Image;
                img.onload = function () {
                    if (img.width < 1600 || img.height < 565) {
                        alert('Ukuran gambar tidak sesuai');
                        $('input[name=img]').val(null);
                        img = null;
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });

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

        //shift up order
        $('.btn-shift-up').click(function () {
            var url = $(this).attr('href');
            var row = $(this).closest('tr');
            var rowNum = row.children('td:first-child').html();
            $.get(url, null, function () {
                //shifting row
                row.insertBefore(row.prev());
                //reset row number 
                row.children('td:first-child').html(parseInt(rowNum) - 1);
                row.next().children('td:first-child').html(rowNum);
            });
            return false;
        });

        //shift down order
        $('.btn-shift-down').click(function () {
            var url = $(this).attr('href');
            var row = $(this).closest('tr');
            var rowNum = row.children('td:first-child').html();
            $.get(url, null, function () {
                //shifting row
                row.insertAfter(row.next());
                //reset row number 
                row.children('td:first-child').html(parseInt(rowNum) + 1);
                row.prev().children('td:first-child').html(rowNum);
            });
            return false;
        });

        //delete slider
        $('.btn-delete-slider').click(function () {
            var url = $(this).attr('href');
            var row = $(this).closest('tr');
            if (confirm('Anda akan menghapus data ini?')) {
                $.get(url, null, function () {
                    //delete row
                    var nextrow = row;
                    while(nextrow.next().is('tr')){
                        var rownum = nextrow.children('td:first-child').html();
                        nextrow.children('td:first-child').html(parseInt(rownum - 1));
                        nextrow = nextrow.next();
                    }
                });
                row.hide();
            }
            
            return false;
        });

        //pilih image slider type
        $('#slider_type').change(function () {
            showFormSlider();
        });
        function showFormSlider() {
            var img_url = $('#slider_type option:selected').data('img');
            var val = $('#slider_type').val();
            //ganti gambar preview
            $('#slider_type_preview').fadeOut(200, null, function () {
                $('#slider_type_preview').attr('src', img_url);
                $('#slider_type_preview').fadeIn(250);
            });
            //ganti form
            $('.slider-type-1,.slider-type-2,.slider-type-3').hide();
            $('.slider-type-' + val).fadeIn(250);
        }
        showFormSlider();

        //color picker with addon
        $(".my-colorpicker2").colorpicker();

    })(jQuery);
</script>
@stop
