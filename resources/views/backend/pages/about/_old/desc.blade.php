<form name="form-section-title" method="POST" action="admin/pages/about/update-about-desc" enctype="multipart/form-data" > 

    <div class="form-group">
        <label >Section Title</label>
        <input type="text" name="about_section_title" class="form-control" value="{{$about->section_title}}"  >
    </div>
    <div class="form-group">
        <label >First line description</label>
        <textarea rows="10" name="about_first_line_desc" class="form-control" >{{$about->first_line_desc}}</textarea>
    </div>
    <div class="form-group">
        <label >Second line description</label>
        <textarea rows="10" name="about_second_line_desc" class="form-control" >{{$about->second_line_desc}}</textarea>
    </div>
    <div class="row" >
        <div class="col-sm-6 col-md-6 col-lg-6" >
            <div class="form-group">
                <label >Image 1 *470x266px</label>
                <input type="file" name="about_img_1" />
                <img id="about-img-1-prev" src="" class="col-sm-12 col-md-12 col-lg-12" />
            </div>        
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6" >
            <div class="form-group">
                <label >Image 2 *585x401px</label>
                <input type="file" name="about_img_2" />
                <img id="about-img-2-prev" src="" class="col-sm-12 col-md-12 col-lg-12" />
            </div>
        </div>
    </div>
    <div class="form-group">
        <label >Motto</label>
        <input type="text" name="about_motto" class="form-control" value="{{$about->motto}}"  >
    </div>
    <div class="form-group">
        <label >Visi</label>
        <input type="text" name="about_visi" class="form-control" value="{{$about->visi}}"  >
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
</form> 


@section('scripts')
@parent
<script>
    (function ($) {
        //show image 1
        $('input[name=about_img_1]').change(function () {
            var id = $(this).data('id');
            var fr = new FileReader;
            var fileUpload = this;
            fr.onload = function () {
                var img = new Image;
                var ukuransesuai = false;
                img.onload = function () {
                    //cek ukuran
                    if (img.width == 470 && img.height == 266) {
                        ukuransesuai = true;
                    }

                    if (ukuransesuai) {
                        //tampilkan gambar
                        if (fileUpload.files && fileUpload.files[0]) {
                            fr.onload = function (e) {
                                $('#about-img-1-prev').attr('src', e.target.result);
                            }
                            fr.readAsDataURL(fileUpload.files[0]);
                        }
                    } else {
                        alert('Ukuran gambar tidak sesuai');
                        //clear input
                        $('input[name=about_img_1]').val(null);
                        //clear preview
                        $('#about-img-1-prev').attr('src', null);
                    }
                    //}
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });
        //show image 2
        $('input[name=about_img_2]').change(function () {
            var id = $(this).data('id');
            var fr = new FileReader;
            var fileUpload = this;
            fr.onload = function () {
                var img = new Image;
                var ukuransesuai = false;
                img.onload = function () {
                    //cek ukuran
                    if (img.width == 585 && img.height == 401) {
                        ukuransesuai = true;
                    }

                    if (ukuransesuai) {
                        //tampilkan gambar
                        if (fileUpload.files && fileUpload.files[0]) {
                            fr.onload = function (e) {
                                $('#about-img-2-prev').attr('src', e.target.result);
                            }
                            fr.readAsDataURL(fileUpload.files[0]);
                        }
                    } else {
                        alert('Ukuran gambar tidak sesuai');
                        //clear input
                        $('input[name=about_img_2]').val(null);
                        //clear preview
                        $('#about-img-2-prev').attr('src', null);
                    }
                    //}
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });


    })(jQuery);
</script>
@append