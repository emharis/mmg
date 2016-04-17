@extends('backend.layouts.master')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet"  >
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Portofolio
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-solid" >
        <div class="box-body" >
            <a  id="btn-add-portofolio" class="btn btn-primary btn-sm" ><i class="fa fa-plus" ></i> Add Portofolio</a>
            <div class="clearfix" ></div>
            <br/>
            <form id="form-new-portofolio" class="hide" name="form-new-portofolio" method="POST" action="admin/pages/portofolio/new-portofolio" enctype="multipart/form-data" >
                <input type="hidden" name="list_item_num" value="1"/>
                <table class="table table-bordered table-condensed" id="table-input-portofolio" >
                    <tbody>
                        <tr>
                            <td class="col-sm-2 col-md-2 col-lg-2">Title</td>
                            <td>
                                <input autocomplete="off" type="text" name="title" class="form-control" required />
                            </td>
                            <td rowspan="4" class="col-sm-4 col-md-4 col-lg-4" >
                                <img id="portofolio-img-prev" src="backend/img/portofolio/1.jpg" class="img-responsive"/>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-2 col-md-2 col-lg-2">Subtitle</td>
                            <td>
                                <input autocomplete="off" type="text" name="subtitle" class="form-control" />
                            </td>
                        </tr>

                        <tr class="row-image-file" >
                            <td>Image</td>
                            <td>
                                <input type="file" name="portofolio_img" required />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">
                                <button type="submit" class="btn btn-sm btn-primary" >Save</button>
                                <a class="btn btn-sm btn-danger" id="btn-cancel-add-new-portofolio" >Cancel</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>
    </div>

    <!--data gagllery list-->   
    <div class="row mmg-gallery" >
        <div class="grid">
            @foreach($data_portofolio as $dt)

            <div class="col-sm-3 col-md-3 col-lg-3 " id="gallery-thumb-{{$dt->id}}" >    
                <div class="thumbnail">
                    <a class="fancybox-img" rel="group" href="{{$imgpath . '/' . $dt->img}}" title="{{$dt->title}}" >
                        <img  src="{{$imgpath . '/' . $dt->img}}" class="img-responsive gal-img" />
                    </a>

                    <form class="form-update-portfolio" method="POST" name="form-edit-portofolio-{{$dt->id}}" id="form-edit-portofolio-{{$dt->id}}" action="admin/pages/portofolio/update-portofolio" >
                        <input type="hidden" name="id" value="{{$dt->id}}"/>
                        <table class="table table-condensed" >
                            <tbody>
                                <tr>
                                    <td>
                                        <input required autocomplete="off" type="text" name="title" class="form-control input-portofolio-title-edit input-sm" value="{{$dt->title}}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input autocomplete="off" type="text" name="subtitle" class="form-control input-portofolio-title-edit input-sm" value="{{$dt->subtitle}}" />
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-right">
                                        <button type="submit" class="btn btn-primary btn-sm" >&nbsp;&nbsp;<i class="fa fa-save" ></i>&nbsp;&nbsp;</button>
                                        <a  class="btn btn-danger btn-sm btn-delete-portofolio" ><i class="fa fa-trash" ></i></a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</section><!-- /.content -->


@stop

@section('scripts')
<script src="backend/plugins/jqueryform/jquery.form.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js" ></script>

<script>
(function ($) {

    //add portofolio click
    $('#btn-add-portofolio').click(function () {
        $('#form-new-portofolio').removeClass("hide");
        $('#form-new-portofolio').hide();
        $('#form-new-portofolio').slideDown(250);
    });

    //cancel add new portofolio
    $('#btn-cancel-add-new-portofolio').click(function () {
        $('#form-new-portofolio').slideUp(250, null, function () {
            //clear input
            clearInput();
        });
    });

    //clear input form new portofolio
    function clearInput() {
        $('#form-new-portofolio input').val(null);
    }

    //update form handle dengan jqueryr form
    $('.form-update-portfolio').ajaxForm({
        success: function () {
            alert('Data telah disimpan.');
        }
    });

    //delete portofolio
    $('.btn-delete-portofolio').click(function () {
//        alert('delete');
        var id = $(this).parent().parent().parent().parent().prev().val();
        var portofolio_div = $(this).parent().parent().parent().parent().parent().parent().parent();
        if (confirm('Anda akan menghapus data ini?')) {
            var href = "admin/pages/portofolio/delete-portofolio/" + id;
            $.get(href, null, function () {
                portofolio_div.fadeOut(500, null, function () {
                    portofolio_div.remove();
                });
            });
        }
    });

    //image cek ukuran
    $('input[name=portofolio_img]').change(function () {
        var fr = new FileReader;
        var fileUpload = this;
        var img_width = 570;
        var img_height = 295;
        var imgprev = $('#portofolio-img-prev');
        var img_input = $(this);
        fr.onload = function () {
            var img = new Image;
            var ukuransesuai = false;
            img.onload = function () {
                //cek ukuran
                var rasio = img.width / img_width;
                var rs_width = img.width / img_width;
                var rs_height = img.height / img_height;
                //bulatkan ke decimal dua
                rs_width = parseFloat(rs_width.toString().substring(0, 3));
                rs_height = parseFloat(rs_height.toString().substring(0, 3));
                if (rs_width >= 0 && rs_height == rs_width) {
                    ukuransesuai = true;
                }

                if (ukuransesuai) {
                    //tampilkan gambar
                    if (fileUpload.files && fileUpload.files[0]) {
                        fr.onload = function (e) {
                            imgprev.attr('src', e.target.result);
                        }
                        fr.readAsDataURL(fileUpload.files[0]);
                    }
                } else {
                    alert('Ukuran gambar tidak sesuai');
                    //clear input
                    img_input.val(null);
                    //clear preview
                    imgprev.attr('src', 'backend/img/portofolio/1.jpg');
                }
                //}
            };
            img.src = fr.result;
        };
        fr.readAsDataURL(this.files[0]);
    });

    //fancybox
    $(".fancybox-img").fancybox({
        openEffect: 'elastic',
        closeEffect: 'elastic',
        arrows: false,
        helpers: {
            title: {
                type: 'inside'
            }
        }
    });

})(jQuery);
</script>
@stop
