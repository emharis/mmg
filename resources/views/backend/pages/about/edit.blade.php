
<style>
    .modal-dialog{
        width: 80%;
    }
</style>


<!-- Main content -->
<section class="content">
    <div class="box box-solid" >
        <div class="box-body" >
            <form id="form-update-about-desc" name="form-update-about-desc" method="POST" action="admin/pages/about/update" enctype="multipart/form-data" >
                <input type="hidden" name="list_item_num" value="1"/>
                <table class="table table-bordered table-condensed" id="table-input-about" >
                    <tbody>
                        <tr>
                            <td class="col-sm-2 col-md-2 col-lg-2">Title</td>
                            <td>
                                <input autocomplete="off" type="text" name="title" class="form-control" value="{{$desc->title}}" />
                            </td>
                            <td rowspan="4" class="col-sm-4 col-md-4 col-lg-4" >
                                <img id="about-img-prev" src="{{$desc->img}}" class="img-responsive"/>
                            </td>
                        </tr>
                        <tr>
                            <td >Type</td>
                            <td>
                                @if($desc->type == 'IL')
                                <?php $type = 'Image Left'; ?>
                                @elseif($desc->type == 'IR')
                                <?php $type = 'Image Right'; ?>
                                @elseif($desc->type == 'LS')
                                <?php $type = 'List Item'; ?>
                                @elseif($desc->type == 'NI')
                                <?php $type = 'No Image'; ?>
                                @endif
                                <input name="type" readonly class="form-control" value="{{$type}}"/>
                            </td>
                        </tr>
                        @if($desc->type == 'IL' || $desc->type == 'IR')
                        <tr class="row-image-file" >
                            <td>Image</td>
                            <td>
                                <input type="file" name="about_img" />
                            </td>
                        </tr>
                        @endif
                        @if($desc->type == 'IL' || $desc->type == 'IR')
                        <tr class="row-desc" >
                            <td>Desc</td>
                            <td colspan="2">
                                <textarea rows="8" class="form-control" name="desc" >{{$desc->desc}}</textarea>
                            </td>
                        </tr>
                        @endif
                        <tr class="row-desc-no-image" >
                            <td></td>
                            <td></td>
                        </tr>
                        @if($desc->type == 'NI')
                        <tr class="row-desc-no-image" >
                            <td>Desc</td>
                            <td colspan="2">
                                <textarea name="desc_no_image" id="desc_no_image" rows="8" class="form-control" placeholder="Place some text here" >{{$desc->desc}}</textarea>
                            </td>
                        </tr>
                        @endif
                        <tr>
                            <td colspan="3" >
                                <a class="btn " style="visibility: hidden;" >x</a>
                            </td>
                        </tr>
                        @if($desc->type == 'LS')
                        <?php $listnum=1; ?>
                        @foreach($list as $dt)
                        <tr class="row-list-item" >
                            <td>List Item</td>
                            <td colspan="2">
                                <div class="form-group" >
                                    <input maxlength="100" value="{{$dt->title}}" type="text" class="form-control" placeholder="Title" name="list_item_title_{{$listnum}}" />
                                    <textarea maxlength="250" class="form-control" rows="2" placeholder="Content" name="list_item_desc_{{$listnum}}" >{{$dt->content}}</textarea>
                                </div>
                            </td>
                        </tr>
                        <?php $listnum++; ?>
                        @endforeach
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
                        @endif
                        <tr>
                            <td></td>
                            <td colspan="2">
                                <button type="submit" class="btn btn-sm btn-primary" >Save</button>
                                <a class="btn btn-sm btn-danger" id="btn-cancel-add-new-about-desc" data-dismiss="modal" >Cancel</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</section><!-- /.content -->


<!-- CK Editor -->
<!--<script src="backend/plugins/ckeditor/ckeditor.js"></script>-->
<script>
    (function ($) {
//        //ck-editor
////    CKEDITOR.replace('desc_no_image');
////    
//        //show form add new description
//        $('#btn-add-description').click(function () {
//            $('#form-new-about-desc').hide();
//            $('#form-new-about-desc').removeClass('hide');
//            $('#form-new-about-desc').slideDown(250);
//        });
//        function clearFormNewAboutDesc() {
//            $('#form-new-about-desc input[type=text]').val(null);
//            $('#form-new-about-desc input[type=file]').val(null);
//            $('#form-new-about-desc select').val([]);
//            //clear list item 
//            var list_item_num = $('#form-new-about-desc input[name=list_item_num]').val();
//            $('#form-new-about-desc input[name=list_item_num]').val(1)
//            if (list_item_num > 1) {
//                for (i = 1; i < list_item_num; i++) {
//                    $('#form-new-about-desc table tr.row-list-item:last').remove();
//                }
//            }
//            //sembunyikan image
//            $('#about-img-prev').attr('src', null);
//            $('#img-type-prev').attr('src', null);
//            //sembunyikan inputan
//            $('.row-desc, .row-desc-no-image, .row-image-file, .row-list-item, .row-btn-list-item').hide();
//        }
//        $('#btn-cancel-add-new-about-desc').click(function () {
//            $('#form-new-about-desc').slideUp(250, null, function () {
//                clearFormNewAboutDesc();
//            });
//
//        });
//        //set ke null untuk select
//        $('select[name=type]').val([]);
//        //sembunyikan input dulu
//        $('.row-desc, .row-desc-no-image, .row-image-file, .row-list-item, .row-btn-list-item').hide();
//
//        //tampilkan image type
//        $('select[name=type]').change(function () {
//            var img = $('option:selected', this).data('img');
//            var val = $(this).val();
//
//            if (val == 'IL' || val == 'IR' || val == 'LS') {
//                //tampilkan image type
//                $('#img-type-prev').attr('src', img);
//                //tampilkan image preview
//                if (val == 'IR') {
//                    $('#about-img-prev').attr('src', 'frontend/img/about/desc/1.jpg')
//                } else {
//                    $('#about-img-prev').attr('src', 'frontend/img/about/desc/2.jpg')
//                }
//            } else {
//                $('#img-type-prev').attr('src', null);
//            }
//
//            //tampilkan input yang sesuai
//            if (val == 'IL' || val == 'IR') {
//                $('.row-desc, .row-desc-no-image, .row-image-file, .row-list-item, .row-btn-list-item').hide();
//                $('.row-desc, .row-image-file').show();
//            } else if (val == 'NI') {
//                $('.row-desc, .row-desc-no-image, .row-image-file, .row-list-item, .row-btn-list-item').hide();
//                //sembunyikan image preview
//                $('#about-img-prev').attr('src', null);
//                $(' .row-desc-no-image').show();
//            } else if (val == 'LS') {
//                $('.row-desc, .row-desc-no-image, .row-image-file, .row-list-item, .row-btn-list-item').hide();
//                //sembunyikan image preview
//                $('#about-img-prev').attr('src', null);
//                $('.row-list-item, .row-btn-list-item').show();
//            }
//        });
//
//        //tampilkan image
//        $('input[name=about_img]').change(function () {
//            var type = $('select[name=type]').val();
//            var width = 0;
//            var height = 0;
//            var inputfile = $(this);
//
//            if (type == 'IL') {
//                width = 585;
//                height = 401;
//            } else {
//                width = 470;
//                height = 266;
//            }
//
//            //cek ukuran gambar
//            var fr = new FileReader;
//            var fileUpload = this;
//            fr.onload = function () {
//                var img = new Image;
//                var ukuransesuai = false;
//                img.onload = function () {
//                    if (img.width == width && img.height == height) {
//                        ukuransesuai = true;
//                    }
//                    if (ukuransesuai) {
//                        //tampilkan gambar
//                        if (fileUpload.files && fileUpload.files[0]) {
//                            fr.onload = function (e) {
//                                $('#about-img-prev').attr('src', e.target.result);
//                            }
//                            fr.readAsDataURL(fileUpload.files[0]);
//                            //upload image ke database
//                            $('form[name=form-gallery-' + id + ']').submit();
//                        }
//                    } else {
//                        alert('Ukuran gambar tidak sesuai');
//                        //bersihkan input file
//                        inputfile.val(null);
//                        //clear image preview
//                        if (type == 'IR') {
//                            $('#about-img-prev').attr('src', 'frontend/img/about/desc/1.jpg')
//                        } else {
//                            $('#about-img-prev').attr('src', 'frontend/img/about/desc/2.jpg')
//                        }
//                    }
//                };
//                img.src = fr.result;
//            };
//            fr.readAsDataURL(this.files[0]);
//        });
//
//        //Tambah Liste Item Input
//        var listItemNum = 1;
//        $('.btn-new-list-item').click(function () {
//            listItemNum += 1;
//            //update list item num di input hidden
//            $('input[name=list_item_num]').val(listItemNum);
////        alert('new list item');
//            var newrow = '<tr class="row-list-item" >\n\
//                            <td></td>\n\
//                            <td colspan="2">\n\
//                                <div class="form-group" >\n\
//                                    <input maxlength="100" type="text" class="form-control" placeholder="Title" name="list_item_title_' + listItemNum + '" />\n\
//                                    <textarea maxlength="250" class="form-control" rows="2" placeholder="Content" name="list_item_desc_' + listItemNum + '" ></textarea>\n\
//                                </div>\n\
//                            </td>\n\
//                        </tr>';
//            //get last list item
////        $('#table-about-desc ').hide();
//            var listRowFirst = $('#table-input-about tbody').children('tr.row-list-item:last');
//            listRowFirst.after(newrow);
//        });
//
//        delete description
//        $(document).on('click', '.btn-delete-about-desc', function (e) {
//            var url = $(this).attr('href');
//            if (confirm('Anda akan menghapus data ini?')) {
////                $.get(url, null, function () {
////                    alert('Delete Success');
////                });
//            } else {
//                e.preventDefault();
//            }
////            return false;
//        });


    })(jQuery);
</script>