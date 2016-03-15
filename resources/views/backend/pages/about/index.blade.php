@extends('backend.layouts.master')

@section('styles')
@parent
<!-- iCheck for checkboxes and radio inputs -->
<!--<link rel="stylesheet" href="backend/plugins/iCheck/all.css">-->

@append

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
            <a  id="btn-add-description" class="btn btn-primary btn-sm" ><i class="fa fa-plus" ></i> Add Description</a>
            <div class="clearfix" ></div>
            <br/>
            <form id="form-new-about-desc" class="hide" name="form-new-about-desc" method="POST" action="admin/pages/about/new-desc" enctype="multipart/form-data" >
                <input type="hidden" name="list_item_num" value="1"/>
                <table class="table table-bordered table-condensed" id="table-input-about" >
                    <tbody>
                        <tr>
                            <td class="col-sm-2 col-md-2 col-lg-2">Title</td>
                            <td>
                                <input autocomplete="off" type="text" name="title" class="form-control" />
                            </td>
                            <td rowspan="4" class="col-sm-4 col-md-4 col-lg-4" >
                                <img id="about-img-prev" src="" class="img-responsive"/>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2">Type</td>
                            <td>
                                <select name="type" class="form-control" required>
                                    <option value="IL" data-img="backend/img/about_page/layout_img_left-mini.jpg">Image Left</option>
                                    <option value="IR" data-img="backend/img/about_page/layout_about_desc_img_right-mini.jpg" >Image Right</option>
                                    <option value="LS" data-img="backend/img/about_page/list-layout-mini.jpg">List Item</option>
                                    <option value="NI">No Image</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="" id="img-type-prev" class="img-responsive" />
                            </td>
                        </tr>
                        <tr class="row-image-file" >
                            <td>Image</td>
                            <td>
                                <input type="file" name="about_img" />
                            </td>
                        </tr>
                        <tr class="row-desc" >
                            <td>Desc</td>
                            <td colspan="2">
                                <textarea rows="8" class="form-control" name="desc" ></textarea>
                            </td>
                        </tr>
                        <tr class="row-desc-no-image" >
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="row-desc-no-image" >
                            <td>Desc</td>
                            <td colspan="2">
                                <textarea name="desc_no_image" id="desc_no_image" class="textarea" placeholder="Place some text here" ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" >
                                <a class="btn " style="visibility: hidden;" >x</a>
                            </td>
                        </tr>
                        <tr class="row-list-item" >
                            <td>List Item</td>
                            <td colspan="2">
                                <div class="form-group" >
                                    <input maxlength="100" type="text" class="form-control" placeholder="Title" name="list_item_title_1" />
                                    <textarea maxlength="250" class="form-control" rows="2" placeholder="Content" name="list_item_desc_1" ></textarea>
                                </div>
                            </td>
                        </tr>
                        <tr class="row-btn-list-item">
                            <td></td>
                            <td colspan="2">
                                <a class="btn btn-sm btn-primary btn-new-list-item" ><i class="fa fa-plus" ></i> Add List Item</a>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" >
                                <a class="btn " style="visibility: hidden;" >x</a>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">
                                <button type="submit" class="btn btn-sm btn-primary" >Save</button>
                                <a class="btn btn-sm btn-danger" id="btn-cancel-add-new-about-desc" >Cancel</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <!--table data description-->
            <table class="table table-bordered table-condensed" id="table-about-desc" >
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th class="col-sm-1 col-md-1 col-lg-1">Type</th>
                        <th class="col-sm-1 col-md-1 col-lg-1" >Aktif</th>
                        <th class="col-sm-1 col-md-1 col-lg-1">Order</th>
                        <th class="col-sm-1 col-md-1 col-lg-1" ></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($desc as $dt)
                    <tr>
                        <td>{{$dt->title}}</td>
                        <td>{{str_limit($dt->desc,70)}}...</td>
                        <td>
                            @if($dt->type == 'IL')
                            Image Left
                            @elseif($dt->type == 'IR')
                            Image Right
                            @elseif($dt->type == 'LS')
                            List Item
                            @else
                            No Image
                            @endif
                        </td>
                        <td>
                            @if($dt->aktif == 'Y')
                            <i class="fa fa-check" ></i>
                            @else
                            <i class="fa fa-close" ></i>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-success btn-xs btn-about-desc-shift-up" href="admin/pages/about/shift-up-desc/{{$dt->id}}" >&nbsp;<i class="fa fa-angle-double-up" ></i>&nbsp;</a>
                            <a class="btn btn-warning btn-xs btn-about-desc-shift-down" href="admin/pages/about/shift-down-desc/{{$dt->id}}" >&nbsp;<i class="fa fa-angle-double-down" ></i>&nbsp;</a>
                        </td>
                        <td>
                            <a class="btn btn-xs btn-primary btn-edit-about-desc " href="admin/pages/about/edit/{{$dt->id}}"   ><i class="fa fa-edit" ></i></a>
                            <a class="btn btn-xs btn-danger btn-delete-about-desc " href="admin/pages/about/delete-desc/{{$dt->id}}"   ><i class="fa fa-trash" ></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section><!-- /.content -->

<div class="modal" id="modal-about" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Description</h4>
            </div>
            <div class="modal-body"></div>
        </div> 
    </div> 
</div>
@stop

@section('scripts')
<!-- CK Editor -->
<!--<script src="backend/plugins/ckeditor/ckeditor.js"></script>-->
<script>
    (function ($) {
        //ck-editor
//    CKEDITOR.replace('desc_no_image');
//    
        //show form add new description
        $('#btn-add-description').click(function () {
            $('#form-new-about-desc').hide();
            $('#form-new-about-desc').removeClass('hide');
            $('#form-new-about-desc').slideDown(250);
        });
        function clearFormNewAboutDesc() {
            $('#form-new-about-desc input[type=text]').val(null);
            $('#form-new-about-desc input[type=file]').val(null);
            $('#form-new-about-desc select').val([]);
            //clear list item 
            var list_item_num = $('#form-new-about-desc input[name=list_item_num]').val();
            $('#form-new-about-desc input[name=list_item_num]').val(1)
            if (list_item_num > 1) {
                for (i = 1; i < list_item_num; i++) {
                    $('#form-new-about-desc table tr.row-list-item:last').remove();
                }
            }
            //sembunyikan image
            $('#about-img-prev').attr('src', null);
            $('#img-type-prev').attr('src', null);
            //sembunyikan inputan
            $('.row-desc, .row-desc-no-image, .row-image-file, .row-list-item, .row-btn-list-item').hide();
        }
        $('#btn-cancel-add-new-about-desc').click(function () {
            $('#form-new-about-desc').slideUp(250, null, function () {
                clearFormNewAboutDesc();
            });

        });
        //set ke null untuk select
        $('select[name=type]').val([]);
        //sembunyikan input dulu
        $('.row-desc, .row-desc-no-image, .row-image-file, .row-list-item, .row-btn-list-item').hide();

        //tampilkan image type
        $('select[name=type]').change(function () {
            var img = $('option:selected', this).data('img');
            var val = $(this).val();

            if (val == 'IL' || val == 'IR' || val == 'LS') {
                //tampilkan image type
                $('#img-type-prev').attr('src', img);
                //tampilkan image preview
                if (val == 'IR') {
                    $('#about-img-prev').attr('src', 'frontend/img/about/desc/1.jpg')
                } else {
                    $('#about-img-prev').attr('src', 'frontend/img/about/desc/2.jpg')
                }
            } else {
                $('#img-type-prev').attr('src', null);
            }

            //tampilkan input yang sesuai
            if (val == 'IL' || val == 'IR') {
                $('.row-desc, .row-desc-no-image, .row-image-file, .row-list-item, .row-btn-list-item').hide();
                $('.row-desc, .row-image-file').show();
            } else if (val == 'NI') {
                $('.row-desc, .row-desc-no-image, .row-image-file, .row-list-item, .row-btn-list-item').hide();
                //sembunyikan image preview
                $('#about-img-prev').attr('src', null);
                $(' .row-desc-no-image').show();
            } else if (val == 'LS') {
                $('.row-desc, .row-desc-no-image, .row-image-file, .row-list-item, .row-btn-list-item').hide();
                //sembunyikan image preview
                $('#about-img-prev').attr('src', null);
                $('.row-list-item, .row-btn-list-item').show();
            }
        });

        //tampilkan image
        $('input[name=about_img]').change(function () {
            var type = $('select[name=type]').val();
            var width = 0;
            var height = 0;
            var inputfile = $(this);

            if (type == 'IL') {
                width = 585;
                height = 401;
            } else {
                width = 470;
                height = 266;
            }

            //cek ukuran gambar
            var fr = new FileReader;
            var fileUpload = this;
            fr.onload = function () {
                var img = new Image;
                var ukuransesuai = false;
                img.onload = function () {
                    if (img.width == width && img.height == height) {
                        ukuransesuai = true;
                    }
                    if (ukuransesuai) {
                        //tampilkan gambar
                        if (fileUpload.files && fileUpload.files[0]) {
                            fr.onload = function (e) {
                                $('#about-img-prev').attr('src', e.target.result);
                            }
                            fr.readAsDataURL(fileUpload.files[0]);
                            //upload image ke database
                            $('form[name=form-gallery-' + id + ']').submit();
                        }
                    } else {
                        alert('Ukuran gambar tidak sesuai');
                        //bersihkan input file
                        inputfile.val(null);
                        //clear image preview
                        if (type == 'IR') {
                            $('#about-img-prev').attr('src', 'frontend/img/about/desc/1.jpg')
                        } else {
                            $('#about-img-prev').attr('src', 'frontend/img/about/desc/2.jpg')
                        }
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });

        //Tambah Liste Item Input
        var listItemNum = 1;
        $('.btn-new-list-item').click(function () {
            listItemNum += 1;
            //update list item num di input hidden
            $('input[name=list_item_num]').val(listItemNum);
//        alert('new list item');
            var newrow = '<tr class="row-list-item" >\n\
                            <td></td>\n\
                            <td colspan="2">\n\
                                <div class="form-group" >\n\
                                    <input maxlength="100" type="text" class="form-control" placeholder="Title" name="list_item_title_' + listItemNum + '" />\n\
                                    <textarea maxlength="250" class="form-control" rows="2" placeholder="Content" name="list_item_desc_' + listItemNum + '" ></textarea>\n\
                                </div>\n\
                            </td>\n\
                        </tr>';
            //get last list item
//        $('#table-about-desc ').hide();
            var listRowFirst = $('#table-input-about tbody').children('tr.row-list-item:last');
            listRowFirst.after(newrow);
        });

//        delete description
        $(document).on('click', '.btn-delete-about-desc', function (e) {
            var url = $(this).attr('href');
            if (confirm('Anda akan menghapus data ini?')) {
//                $.get(url, null, function () {
//                    alert('Delete Success');
//                });
            }else{
                e.preventDefault();
            }
//            return false;
        });
        
        //edit description
        $('.btn-edit-about-desc').click(function(){
            var url = $(this).attr('href');
            $.get(url,null,function(data){
                $('#modal-about .modal-body').html(data);
                $('#modal-about').modal('show');
            });
            
            
            return false;
        });


    })(jQuery);
</script>
@append
