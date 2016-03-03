@extends('backend.layouts.master')

@section('styles')
<!-- Bootstrap Color Picker -->
<link rel="stylesheet" href="backend/plugins/colorpicker/bootstrap-colorpicker.min.css">
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<link href="backend/plugins/bootstrap-vertical-tab/bootstrap.vertical-tabs.min.css" rel="stylesheet" type="text/css"/>
<style>
    .modal-dialog{
        width: 80%;
    }
</style>
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
                @include('backend.pages.homepage.imageslider.imageslider')
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="tab_2">
                @include('backend.pages.homepage.midcontent.midcontent')
            </div><!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
                @include('backend.pages.homepage.layanan.layanan')
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

        //fancy image
        $("a.single_image").fancybox();

//        initialize jquery form
        //submit new slider
        $('#form-new-slider').ajaxForm({
            success: function (data) {
                //bersihkan form
                $('#form-new-slider input[type=text]').each(function () {
                    $(this).val('');
                });
                $('#form-new-slider select').val([]);
                $('#form-new-slider input[type=file]').val('');
                //clear img search
                $('#slider_type_preview').attr('src', '');
                //close form input
                $('#form-new').slideUp(250);
                //tampilkan new form ke tabel
                var cekbox = '<input type="checkbox" name="ck_aktif_"' + data.id + ' class="ck_img_slider"  >';
                if(data.aktif == 'Y'){
                    cekbox = '<input type="checkbox" name="ck_aktif_"' + data.id + ' class="ck_img_slider"  checked="checked" >';
                }
                
                //reload saja
                location.reload();
                
//                var newrow = '<tr>\n\
//            <td></td>\n\
//            <td>' + data.img + '</td>\n\
//            <td>\n\
//                <a class="single_image" href="' + data.imgpath +'/'+data.img + '">View</a>\n\
//            </td>\n\
//            <td >' + cekbox + '\n\
//            </td>\n\
//            <td>\n\
//                <a title="Shift Up" class="btn-shift-up btn btn-success btn-sm" href="admin/pages/homepage/slider-shift-up/' + data.id + '" ><i class="fa fa-angle-double-up" ></i></a>\n\
//                <a title="Shift Down" class="btn-shift-down btn btn-warning btn-sm" href="admin/pages/homepage/slider-shift-down/' + data.id + '" ><i class="fa fa-angle-double-down" ></i></a>\n\
//            </td>\n\
//            <td>\n\
//                <a  title="Edit" class="btn-edit-slider btn btn-primary btn-sm" href="admin/pages/homepage/edit-slider/' + data.id + '" ><i class="fa fa-edit"></i></a>\n\
//                <a title="Delete" class="btn-delete-slider btn btn-danger btn-sm" href="admin/pages/homepage/delete-slider/' + data.id + '" ><i class="fa fa-trash-o"></i></a>\n\
//            </td>\n\
//        </tr>';
//
//                $('#table-slider tbody').append(newrow);
            }
        });

        //check image size 
        $('#form-new input[name=img]').change(function () {
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
//                    var nextrow = row;
//                    while (nextrow.next().is('tr')) {
//                        var rownum = nextrow.children('td:first-child').html();
//                        nextrow.children('td:first-child').html(parseInt(rownum - 1));
//                        nextrow = nextrow.next();
//                    }
                    row.fadeOut(250, null, function () {
                        //reorder row number
                        $(this).addClass('hide');
                        $rownum = 1;
                        $('#table-slider tbody tr').each(function () {
                            if (!$(this).hasClass('hide')) {
                                $(this).children('td:first-child').html($rownum++);
                            }
                        });
                        //delete row yang punya class hide
                        $('#table-slider tr.hide').remove();
                    });
                });

            }

            return false;
        });

        //edit slider
        $('.btn-edit-slider').click(function () {
            var url = $(this).attr('href');
//            $.get(url, null, function (data) {
////                $('.modal-body').loa
////                $('.modal').modal('show');        
//            });
            $('.modal-slider .modal-body').load(url, null, function () {
                $('.modal-slider .modal').modal('show');
            });

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
            $('#form-new .slider-type-1,.slider-type-2,.slider-type-3').hide();
            $('#form-new .slider-type-' + val).fadeIn(250);
        }
        showFormSlider();

        //color picker with addon
        $(".my-colorpicker2").colorpicker();

    })(jQuery);
</script>
@stop
