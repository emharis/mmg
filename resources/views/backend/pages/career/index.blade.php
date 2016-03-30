@extends('backend.layouts.master')

@section('styles')
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<style>
    .modal-dialog{
        width: 60%;
        height: 75%;
    }
</style>
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Career
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-solid" >
        <div class="box-body" >
            <a  id="btn-add-career" class="btn btn-primary btn-sm" ><i class="fa fa-plus" ></i> Add Career</a>
            <div class="clearfix" ></div>
            <br/>
            <form id="form-new-career" class="hide" name="form-new-career" method="POST" action="admin/pages/career/new-career" enctype="multipart/form-data" >
                <input type="hidden" name="list_item_num" value="1"/>
                <table class="table table-bordered table-condensed" id="table-input-career" >
                    <tbody>
                        <tr>
                            <td class="col-sm-2 col-md-2 col-lg-2">Title</td>
                            <td>
                                <input autocomplete="off" type="text" name="title" class="form-control" required />
                            </td>
                        </tr>
                        <tr>
                            <td class="col-sm-2 col-md-2 col-lg-2">Keterangan</td>
                            <td>
                                <textarea id="textareahtml5" name="desc" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">
                                <button type="submit" class="btn btn-sm btn-primary" >Save</button>
                                <a class="btn btn-sm btn-danger" id="btn-cancel-add-new-career" >Cancel</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <table class="table table-bordered table-condensed" >
                <thead>
                    <tr>
                        <th>Title</th>
                        <th class="col-sm-1 col-md-1 col-lg-1">Applicant</th>
                        <th class="col-sm-1 col-md-1 col-lg-1">Aktif</th>
                        <th class="col-sm-1 col-md-1 col-lg-1"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($careers as $dt)
                    <tr>
                        <td>{{$dt->title}}</td>
                        <td class="text-right" >0</td>
                        <td class="text-center">
                            @if($dt->aktif == 'Y')
                            <span class="label label-success" ><i class=" fa fa-check" ></i></span>
                            @else
                            <span class="label label-warning" ><i class=" fa fa-close" ></i></span>
                            @endif
                        </td>
                        <td class="text-right" >
                            <a class="btn btn-primary btn-xs btn-edit-career" href="admin/pages/career/edit-career/{{$dt->id}}" >&nbsp;<i class="fa fa-edit" ></i>&nbsp;</a>
                            <a class="btn btn-danger btn-xs btn-delete-career" href="admin/pages/career/delete-career/{{$dt->id}}" >&nbsp;<i class="fa fa-trash" ></i>&nbsp;</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

    <div class="modal" id="modal-career" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Career</h4>
                </div>
                <div class="modal-body"></div>
            </div> 
        </div> 
    </div>



</section><!-- /.content -->


@stop

@section('scripts')
<script src="backend/plugins/jqueryform/jquery.form.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
(function ($) {

    //add career click
    $('#btn-add-career').click(function () {
        $('#form-new-career').removeClass("hide");
        $('#form-new-career').hide();
        $('#form-new-career').slideDown(250);
    });

    //cancel add new career
    $('#btn-cancel-add-new-career').click(function () {
        $('#form-new-career').slideUp(250, null, function () {
            //clear input
            clearInput();
        });
    });

    //clear input form new career
    function clearInput() {
        $('#form-new-career input').val(null);
    }

    //update form handle dengan jqueryr form
    $('.form-update-portfolio').ajaxForm({
        success: function () {
            alert('success');
        }
    });

    //delete career
    $('.btn-delete-career').click(function () {
//        alert('delete');
        var id = $(this).parent().parent().parent().parent().prev().val();
        var career_div = $(this).parent().parent().parent().parent().parent().parent().parent();
        if (confirm('Anda akan menghapus data ini?')) {
            var href = "admin/pages/career/delete-career/" + id;
            $.get(href, null, function () {
                career_div.fadeOut(500, null, function () {
                    career_div.remove();
                });
            });
        }
    });

    //wysiwyg html5
    $("#textareahtml5").wysihtml5({
        "link": false, //Button to insert a link.
        "image": false //Button to insert an image.
    });

    //image cek ukuran
    $('input[name=career_img]').change(function () {
        var fr = new FileReader;
        var fileUpload = this;
        var img_width = 570;
        var img_height = 295;
        var imgprev = $('#career-img-prev');
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
                    imgprev.attr('src', 'backend/img/career/1.jpg');
                }
                //}
            };
            img.src = fr.result;
        };
        fr.readAsDataURL(this.files[0]);
    });

    //edit career
    $('.btn-edit-career').click(function () {
        var href = $(this).attr('href');

        $.get(href, null, function (data) {
            $('#modal-career .modal-body').html(data);
            $('#modal-career').modal('show');
            //wysiwyg html5
            $("#edit-textareahtml5").wysihtml5();
        });

        return false;
    });



})(jQuery);
</script>
@stop
