
<form method="POST" action="admin/pages/homepage/update-section-gallery" name="form-section-gallery" id="form-section-gallery" enctype="multipart/form-data" >
    <div class="box-body">
        <div class="form-group">
            <label >Section Title</label>
            <div class="input-group">
                <input autocomplete="off" type="text" name="gallery_section_title" class="form-control" value="{{$gallery_section_title}}"  >
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div><!-- /btn-group -->
            </div>
        </div>
    </div><!-- /.box-body -->
</form>

<div class="clearfix" ></div>
<br/>


<div class="row" >
    <div class="col-sm-3 col-md-3 col-lg-3" >
        <div class="img-wrap">
            <i>* Rasio 270x245px</i>
            <a href="#" id="btn-img-1" class="btn-img-gallery" data-id="1" >
                <?php $src = ($gallery[1] != '' ? $gallery_img_path . '/' . $gallery[1] : 'backend/img/homepage_gallery/1.jpg'); ?>
                <img class="img-responsive" id="img-gallery-1" src="{{$src}}" alt="">
            </a>
            <!--<a class="btn btn-danger btn-xs col-md-12 btn-del-img-gallery" data-imgnum="1" ><i class="fa fa-trash-o" ></i></a>-->
            <form class="form-gallery" name="form-gallery-1" method="POST" action="admin/pages/homepage/set-image-gallery" enctype="multipart/form-data" >
                <div class="input-group" >
                    <input class="form-control input-sm" type="text" autocomplete="OFF" maxlength="20" name="image_title_1" value="{{ $gallery_title[1] }}"/>
                    <div class="input-group-btn" >
                        <a class="btn btn-primary btn-sm btn-save-img-gallery" data-imgnum="1" ><i class="fa fa-save" ></i></a>
                        <a class="btn btn-danger btn-sm btn-del-img-gallery" data-imgnum="1" ><i class="fa fa-trash-o" ></i></a>
                    </div>
                </div>
                <input type="hidden" name="image_position" value="1"/>
                <input type="file" data-id="1" name="homepage_gallery_1" class="input-img-gallery hide"/>
            </form>
        </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3" >
        <div class="img-wrap">
            <i>* Rasio 270x245px</i>
            <a href="#" id="btn-img-2" class="btn-img-gallery" data-id="2" >
                <?php $src = ($gallery[2] != '' ? $gallery_img_path . '/' . $gallery[2] : 'backend/img/homepage_gallery/2.jpg'); ?>
                <img src="{{$src}}" alt="" class="img-responsive" id="img-gallery-2" >
            </a>
            <!--<a class="btn btn-danger btn-xs col-md-12 btn-del-img-gallery" data-imgnum="2" ><i class="fa fa-trash-o" ></i></a>-->
            <form class="form-gallery" name="form-gallery-2" method="POST" action="admin/pages/homepage/set-image-gallery" enctype="multipart/form-data" >
                <div class="input-group" >
                    <input class="form-control input-sm" type="text" autocomplete="OFF" maxlength="20" name="image_title_2" value="{{ $gallery_title[2] }}"/>
                    <div class="input-group-btn" >
                        <a class="btn btn-primary btn-sm btn-save-img-gallery" data-imgnum="2" ><i class="fa fa-save" ></i></a>
                        <a class="btn btn-danger btn-sm btn-del-img-gallery" data-imgnum="2" ><i class="fa fa-trash-o" ></i></a>
                    </div>
                </div>
                <input type="hidden" name="image_position" value="2"/>
                <input type="file" data-id="2" name="homepage_gallery_2" class="input-img-gallery hide"/>
            </form>
        </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3" >
        <div class="img-wrap">
            <i>* Rasio 270x520px</i>
            <a href="#" id="btn-img-3" class="btn-img-gallery" data-id="3" >
                <?php $src = ($gallery[3] != '' ? $gallery_img_path . '/' . $gallery[3] : 'backend/img/homepage_gallery/3.jpg'); ?>
                <img src="{{$src}}" alt="" class="img-responsive" id="img-gallery-3" >
            </a>
            <!--<a class="btn btn-danger btn-xs col-md-12 btn-del-img-gallery" data-imgnum="3" ><i class="fa fa-trash-o" ></i></a>-->
            <form class="form-gallery" name="form-gallery-3" method="POST" action="admin/pages/homepage/set-image-gallery" enctype="multipart/form-data" >
                <div class="input-group" >
                    <input class="form-control input-sm" type="text" autocomplete="OFF" maxlength="20" name="image_title_3" value="{{ $gallery_title[3] }}"/>
                    <div class="input-group-btn" >
                        <a class="btn btn-primary btn-sm btn-save-img-gallery" data-imgnum="3" ><i class="fa fa-save" ></i></a>
                        <a class="btn btn-danger btn-sm btn-del-img-gallery" data-imgnum="3" ><i class="fa fa-trash-o" ></i></a>
                    </div>
                </div>
                <input type="hidden" name="image_position" value="3"/>
                <input type="file" data-id="3" name="homepage_gallery_3" class="input-img-gallery hide"/>
            </form>
        </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3" >
        <div class="img-wrap">
            <i>* Rasio 270x245px</i>
            <a href="#" id="btn-img-4" class="btn-img-gallery" data-id="4" >
                <?php $src = ($gallery[4] != '' ? $gallery_img_path . '/' . $gallery[4] : 'backend/img/homepage_gallery/4.jpg'); ?>
                <img src="{{$src}}" alt="" class="img-responsive" id="img-gallery-4" >
            </a>
            <!--<a class="btn btn-danger btn-xs col-md-12 btn-del-img-gallery" data-imgnum="4" ><i class="fa fa-trash-o" ></i></a>-->
            <form class="form-gallery" name="form-gallery-4" method="POST" action="admin/pages/homepage/set-image-gallery" enctype="multipart/form-data" >
                <div class="input-group" >
                    <input class="form-control input-sm" type="text" autocomplete="OFF" maxlength="20" name="image_title_4" value="{{ $gallery_title[4] }}"/>
                    <div class="input-group-btn" >
                        <a class="btn btn-primary btn-sm btn-save-img-gallery" data-imgnum="4" ><i class="fa fa-save" ></i></a>
                        <a class="btn btn-danger btn-sm btn-del-img-gallery" data-imgnum="4" ><i class="fa fa-trash-o" ></i></a>
                    </div>
                </div>
                <input type="hidden" name="image_position" value="4"/>
                <input type="file" data-id="4" name="homepage_gallery_4" class="input-img-gallery hide"/>
            </form>
        </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 " style="position: relative;top: -200px;" >
        <div class="img-wrap">
            <i>* Rasio 569x250px</i>
            <a href="#" id="btn-img-5" class="btn-img-gallery" data-id="5" >
                <?php $src = ($gallery[5] != '' ? $gallery_img_path . '/' . $gallery[5] : 'backend/img/homepage_gallery/5.jpg'); ?>
                <img src="{{$src}}" alt="" class="img-responsive" id="img-gallery-5" >
            </a>
            <!--<a class="btn btn-danger btn-xs col-md-12 btn-del-img-gallery" data-imgnum="5" ><i class="fa fa-trash-o" ></i></a>-->
            <form class="form-gallery" name="form-gallery-5" method="POST" action="admin/pages/homepage/set-image-gallery" enctype="multipart/form-data" >
                <div class="input-group" >
                    <input class="form-control input-sm" type="text" autocomplete="OFF" maxlength="20" name="image_title_5" value="{{ $gallery_title[5] }}"/>
                    <div class="input-group-btn" >
                        <a class="btn btn-primary btn-sm btn-save-img-gallery" data-imgnum="5" ><i class="fa fa-save" ></i></a>
                        <a class="btn btn-danger btn-sm btn-del-img-gallery" data-imgnum="5" ><i class="fa fa-trash-o" ></i></a>
                    </div>
                </div>
                <input type="hidden" name="image_position" value="5"/>
                <input type="file" data-id="5" name="homepage_gallery_5" class="input-img-gallery hide"/>
            </form>
        </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3" ></div>
    <div class="col-sm-3 col-md-3 col-lg-3" style="position: relative;top: -200px;" >
        <div class="img-wrap">
            <i>* Rasio 270x245px</i>
            <a href="#" id="btn-img-6" class="btn-img-gallery" data-id="6" >
                <?php $src = ($gallery[6] != '' ? $gallery_img_path . '/' . $gallery[6] : 'backend/img/homepage_gallery/6.jpg'); ?>
                <img src="{{$src}}" alt="" class="img-responsive" id="img-gallery-6" >
            </a>
            <!--<a class="btn btn-danger btn-xs col-md-12 btn-del-img-gallery" data-imgnum="6" ><i class="fa fa-trash-o" ></i></a>-->
            <form class="form-gallery" name="form-gallery-6" method="POST" action="admin/pages/homepage/set-image-gallery" enctype="multipart/form-data" >
                <div class="input-group" >
                    <input class="form-control input-sm" type="text" autocomplete="OFF" maxlength="20" name="image_title_6" value="{{ $gallery_title[6] }}"/>
                    <div class="input-group-btn" >
                        <a class="btn btn-primary btn-sm btn-save-img-gallery" data-imgnum="6" ><i class="fa fa-save" ></i></a>
                        <a class="btn btn-danger btn-sm btn-del-img-gallery" data-imgnum="6" ><i class="fa fa-trash-o" ></i></a>
                    </div>
                </div>
                <input type="hidden" name="image_position" value="6"/>
                <input type="file" data-id="6" name="homepage_gallery_6" class="input-img-gallery hide"/>
            </form>
        </div>
    </div>
</div>


@section('scripts')
@parent
<script>
    (function ($) {
        //simpan section title
        $('#form-section-gallery').ajaxForm({
            success: function () {
                alert('simpan section title gallery');
            }
        });

        //Form gallery image
        $('.form-gallery').ajaxForm({
            success: function () {
                //alert('Sukses ganti image');
            }
        });

        //delete image gallery
        $('.btn-del-img-gallery').click(function () {
            if (confirm('Anda akan menghapus data ini?')) {
                var imgnum = $(this).data('imgnum');
                var url = 'admin/pages/homepage/delete-image-gallery/' + imgnum;
                $.get(url, null, function () {
                    //ganti image ke kosongan
                    $('#img-gallery-' + imgnum).attr('src', 'backend/img/homepage_gallery/' + imgnum + '.jpg');
                });
            }

            return false
        });

        //save image gallery
        $('.btn-save-img-gallery').click(function () {
            var imgnum = $(this).data('imgnum');
            var title = $('input[name=image_title_' + imgnum + ']').val();
            var url = 'admin/pages/homepage/update-image-gallery-title/' + imgnum + '/' + title;
//            alert(title);
//            location.href = url;
            $.get(url, null, function () {
                alert('Data telah disimpan');
            });
            
            return false;
        });

        //click gallery image
        $('.btn-img-gallery').click(function () {
            var id = $(this).data('id');
            $('input[name="homepage_gallery_' + id + '"]').click();

            return false;
        });

        //image open
        $('.input-img-gallery').change(function () {
            var id = $(this).data('id');
            //tampilkan image b& cek ukuran image
            var fr = new FileReader;
            var fileUpload = this;
            fr.onload = function () {
                var img = new Image;
                var ukuransesuai = false;
                var rasio = 0;
                var rs_width = 0;
                var rs_height = 0;

                img.onload = function () {

                    if (id == 1 || id == 2 || id == 4 || id == 6) {
                        rasio = img.width / 270;
                        rs_width = img.width / 270;
                        rs_height = img.height / 245;
                        //bulatkan ke decimal dua
                        rs_width = parseFloat(rs_width.toString().substring(0, 3));
                        rs_height = parseFloat(rs_height.toString().substring(0, 3));

                        if (rs_width >= 0 && rs_height == rs_width) {
                            ukuransesuai = true;
                        }
                    } else if (id == 3) {
                        rasio = img.width / 270;
                        rs_width = img.width / 270;
                        rs_height = img.height / 520;
                        //bulatkan ke decimal dua
                        rs_width = parseFloat(rs_width.toString().substring(0, 3));
                        rs_height = parseFloat(rs_height.toString().substring(0, 3));

                        if (rs_width >= 0 && rs_height == rs_width) {
                            ukuransesuai = true;
                        }
                    } else if (id == 5) {
                        rasio = img.width / 569;
                        rs_width = img.width / 569;
                        rs_height = img.height / 250;
                        //bulatkan ke decimal dua
                        rs_width = parseFloat(rs_width.toString().substring(0, 3));
                        rs_height = parseFloat(rs_height.toString().substring(0, 3));

                        if (rs_width >= 0 && rs_height == rs_width) {
                            ukuransesuai = true;
                        }
                    }

                    if (ukuransesuai) {
                        //tampilkan gambar
                        if (fileUpload.files && fileUpload.files[0]) {
                            fr.onload = function (e) {
                                $('#img-gallery-' + id).attr('src', e.target.result);
                            }
                            fr.readAsDataURL(fileUpload.files[0]);

                            //upload image ke database
                            $('form[name=form-gallery-' + id + ']').submit();

                        }
                    } else {
                        alert('Ukuran gambar tidak sesuai');
                    }
                    //}
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });
    })(jQuery);
</script>
@stop