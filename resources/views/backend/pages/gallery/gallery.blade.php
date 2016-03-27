@extends('backend.layouts.master')

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet"  >
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Gallery
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li ><a href="admin/pages/gallery" >Category</a></li>
            <li class="active" ><a href="#tab_1" data-toggle="tab" >Gallery</a></li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab_1">
                <a class="btn btn-primary btn-sm" id="btn-add-gallery" ><i class="fa fa-plus" ></i> Add Gallery</a>
                <a class="btn btn-primary btn-sm" id="btn-test-gallery" ><i class="fa fa-plus" ></i> Test</a>

                <h2 class="page-header"><a href="admin/pages/gallery/gallery#filter">Filter</a></h2>

                By Tipe :
                <a class="btn btn-danger btn-sm btn-filter" data-filter="*" id="btn-filter-video" >All</a>
                <a class="btn btn-danger btn-sm btn-filter" data-filter=".gal-video" id="btn-filter-video" ><i class="fa fa-youtube" ></i> Youtube</a>
                <a class="btn btn-danger btn-sm btn-filter" data-filter=".gal-image" id="btn-filter-image" ><i class="fa fa-picture-o" ></i> Image</a>
                &nbsp;&nbsp;&nbsp;
                By Katgegori : 
                @foreach($data_kategori as $dt)
                <a class="btn btn-success btn-sm btn-filter" data-filter=".gal-kat-{{$dt->id}}"  >{{$dt->nama}}</a>
                @endforeach
                <div class="clearfix" ></div>
                <br/>
                <form class="hide" id="form-new-gallery" name="form-new-gallery" method="POST" action="admin/pages/gallery/new-gallery" enctype="multipart/form-data" >
                    <table class="table table-bordered table-condensed" >
                        <tbody>
                            <tr>
                                <td class="col-md-2" >Kategori</td>
                                <td>
                                    {!! Form::select('kategori',$kategori,null,['class'=>'form-control','required']) !!}
                                </td>
                                <td rowspan="6" class="col-sm-4 col-md-4 col-lg-4" >
                                    <img id="new-img-prev" class="col-sm-12 col-md-12 col-lg-12" src="backend/img/gallery/1.jpg" />
                                </td>
                            </tr>
                            <tr>
                                <td>Tipe</td>
                                <td>
                                    <select name="tipe" class="form-control" required >
                                        <option value="I" >Image</option>
                                        <option value="V" >Youtube Video</option>
                                    </select>
                                </td>
                            </tr>
                            <tr id="tr-video" class="hide" >
                                <td>Youtube Url</td>
                                <td>
                                    <input type="text" name="gallery_youtube" class="form-control" /> 
                                </td>
                            </tr>
                            <tr id="tr-image" class="hide" >
                                <td>Image</td>
                                <td>
                                    <input type="file" name="gallery_img"  /> <i>* Ratio 370x220</i>
                                </td>
                            </tr>
                            <tr>
                                <td>Title</td>
                                <td>
                                    <input type="text" name="gallery_title" maxlength="30" class="form-control" />
                                </td>
                            </tr>
                            <tr class="hide">
                                <td>Subtitle</td>
                                <td>
                                    <input type="text" name="gallery_subtitle" maxlength="30" class="form-control" />
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-primary btn-sm" >Save</button>
                                    <a class="btn btn-danger btn-sm" id="btn-cancel-add-gallery" >Cancel</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>

            </div>
        </div><!-- /.tab-content -->
    </div>

    <!--data gagllery list-->   
    <div class="row mmg-gallery" >
        <!--<div class="grid">-->
        @foreach($gallery as $dt)
        <?php $type = $dt->type == 'I' ? 'gal-image' : 'gal-video'; ?>
        <?php $href = $dt->type == 'I' ? $imgpath . '/' . $dt->img : $dt->youtube_url; ?>
        <?php $fancyboxclass = $dt->type == 'I' ? 'fancybox-img' : 'fancybox-ytb'; ?>
        <?php $logo_type = $dt->type == 'I' ? 'fa-image' : 'fa-youtube'; ?>
        <div class="col-sm-3 col-md-3 col-lg-3 {{$type}} gal-kat-{{$dt->kategori_id}}" id="gallery-thumb-{{$dt->id}}" >    
            <div class="thumbnail">
                <a class="{{$fancyboxclass}}" rel="group" href="{{$href}}" title="{{$dt->title}}" >
                    @if($dt->type == 'I')
                    <img  src="{{$href}}" class="img-responsive gal-img" />
                    @else
                    <img src="{{ $dt->img}}" class="img-responsive gal-ytb" />
                    @endif
                </a>
                <br/>

                <form class="form-update-gallery" method="POST" action="admin/pages/gallery/update-gallery-title" >
                    <input type="hidden" name="id" value="{{$dt->id}}"/>
                    <div class="input-group" >
                        <input autocomplete="off" type="text" name="title" class="form-control input-gallery-title-edit input-sm" value="{{$dt->title}}" />
                        <div class="input-group-btn" >
                            <button type="submit" class="btn btn-primary btn-sm" ><i class="fa fa-save" ></i></button>
                            <a class="btn btn-danger btn-sm btn-delete-gallery" href="admin/pages/gallery/delete-gallery/{{$dt->id}}" ><i class="fa fa-trash" ></i></a>
                        </div>
                    </div>
                </form>

            </div>
            <div class = "caption">

            </div>
        </div>
        @endforeach
        <!--</div>-->
    </div>

    <!--</div>-->

</section><!-- /.content -->


@stop

@section('scripts')
<script src="backend/plugins/jqueryform/jquery.form.js" type="text/javascript"></script>
<script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.js" ></script>

<script>
(function ($) {
    //set to null select element
    $('select[name=kategori],select[name=tipe]').val([]);
    var youtube_valid = false;
    //tanpilkan input image atau video
    $('select[name=tipe]').change(function () {
        $('#tr-image, #tr-video').hide();
        var tipe = $(this).val();
        var elm = "";
        if (tipe == 'I') {
            elm = '#tr-image';
        } else {
            elm = '#tr-video';
        }
        $(elm).removeClass('hide');
        $(elm).hide();
        $(elm).slideDown(250);
    });
    //image cek ukuran
    $('input[name=gallery_img]').change(function () {
        var fr = new FileReader;
        var fileUpload = this;
        var img_width = 370;
        var img_height = 220;
        var imgprev = $('#new-img-prev');
        var img_input = $(this);
        fr.onload = function () {
            var img = new Image;
            var ukuransesuai = false;
            img.onload = function () {
                //cek ukuran
                var rasio = img.width / img_width;
//                    alert(rasio);
//                    alert(img.width / img_width);
//                    alert(img.height / img_height);
                var rs_width = img.width / img_width;
                var rs_height = img.height / img_height;
                //bulatkan ke decimal dua
                rs_width = parseFloat(rs_width.toString().substring(0, 3));
                rs_height = parseFloat(rs_height.toString().substring(0, 3));
//                alert(rs_width);
//                alert(rs_height);
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
                    imgprev.attr('src', 'backend/img/gallery/1.jpg');
                }
                //}
            };
            img.src = fr.result;
        };
        fr.readAsDataURL(this.files[0]);
    });
    //vide url change
    $('input[name=gallery_youtube]').change(function () {
        var url = $(this).val();
        if ($('select[name=tipe]').val() == 'V' && url != '') {
//            alert('generate youtube json');
            //clear preview
            //youtube url etc: https://www.youtube.com/watch?v=249QZwob-Ow
            //imgprev.attr('src', 'http://img.youtube.com/vi/<insert-youtube-video-id-here>/hqdefault.jpg');

            //generate youtube data from url
            $.post('admin/pages/gallery/get-youtube', {
                'url': url
            }, function (data) {
//                alert(data);
                data = JSON.parse(data);
                $('#new-img-prev').attr('src', data.thumbnail_url);
            }).fail(function () {
                alert('Video not found, url not valid');
                $('#new-img-prev').attr('src', 'backend/img/gallery/1.jpg');
                //fokuskan ke url
                $('input[name=gallery_youtube]').focus();
            });
        }
    });
    //clear input
    function clearInput() {
        $('#form-new-gallery input[type=text]').val('');
        $('#form-new-gallery input[type=file]').val(null);
        $('#form-new-gallery select').val([]);
        $('#new-img-prev').attr('src', 'backend/img/gallery/1.jpg');
    }
    clearInput();
    //add gallery
    $('#btn-add-gallery').click(function () {
        $('#form-new-gallery').removeClass('hide');
        $('#form-new-gallery').hide();
        $('#form-new-gallery').slideDown(250, null, function () {
            clearInput();
        });
    });
    //cancel add new gallery
    $('#btn-cancel-add-gallery').click(function () {
        $('#form-new-gallery').slideUp(250, null, function () {
            clearInput();
        });
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
//    $(".fancybox-ytb").fancybox({
//        openEffect: 'none',
//        closeEffect: 'none',
//        helpers: {
//            media: {}
//        }
//    });
    $(".fancybox-ytb").fancybox({
        openEffect: 'elastic',
        closeEffect: 'elastic',
        fitToView: false,
        width: '70%',
        height: '70%',
        arrows: false,
        helpers: {
            title: {
                type: 'inside'
            },
            media: {}
        }
    });

    //filter
    $('.mmg-gallery').isotope();
    $('.btn-filter').click(function () {
        var _filter = $(this).data('filter');
//            alert(filter);
        $('.mmg-gallery').isotope({filter: _filter});
    });

    //edit gallery
    $('.btn-edit-gallery').click(function () {
        var id = $(this).data('id');
        var span = $(this).prev();
        var formedit = '<form name="form-update-gallery"  method="POST" action="admin/pages/gallery/update-gallery-title" >\n\
                        <input type="hidden" name="id" value="' + id + '" />\n\
                        <table class="table table-bordered table-condensed" >\n\
                            <tbody>\n\
                                <tr>\n\
                                    <td>\n\
                                        <div class="input-group">\n\
                                            <input autocomplete="off" value="' + span.text() + '" type="text" class="form-control input-sm" name="title" />\n\
                                            <div class="input-group-btn">\n\
                                                <button type="submit" class="btn btn-primary btn-sm" ><i class="fa fa-save" ></i></button>\n\
                                            </div>\n\
                                        </div>\n\
                                    </td>\n\
                                </tr>\n\
                            </tbody>\n\
                        </table>\n\
                    </form>';

        span.html(formedit)
        return false;
    });

    //update gallery title
//    $('form[name=form-update-gallery]').ajaxForm({
//        success:function(){
//            alert('sukses');
//        }
//    });

    $(document).on('submit', 'form.form-update-gallery', function () {
//        alert('submitting');
        var form = $(this);
        form.ajaxSubmit(function () {
//            $('form[name=form-update-gallery]').hide();
            alert('Data telah disimpan.');
        });
        return false;
    });

    //delete gallery
    $('.btn-delete-gallery').click(function () {
        var id = $(this).parent().parent().prev('input[type=hidden]').val();
        var gal = $('#gallery-thumb-' + id);
        var url = $(this).attr('href');

        if (confirm('Anda akan menghapus data ini?')) {
            $.get(url, null, function () {
                gal.fadeOut(250, function () {
                    gal.remove();
                    $('.btn-filter[data-filter="*"]').click();
                });
            });
        }
        return false;
    });


})(jQuery);
</script>
@stop
