<section id="layout">
    <h2 class="page-header"><a href="admin/pages/headfoot#emergency">Emergency</a></h2>
    <form method="POST" action="admin/pages/headfoot/update-emergency" name="form-footer-emergency" id="form-footer-emergency" enctype="multipart/form-data" >
        <div class="box-body">
            <table class="table table-bordered table-condensed" >
                <tbody>
                    <tr>
                        <td>Title</td>
                        <td>
                            <input autocomplete="off" type="text" name="title" class="form-control" value="{{$emergency->title}}" >            
                        </td>
                        <td rowspan="6" class="col-sm-3 col-md-3 col-lg-3">
                            <?php $emergency_img = $emergency->img != "" ? $emergency->img : "backend/img/footer/emergency.jpg"; ?>
                            <img id="emergency_img_prev" class="img-responsive" src="{{$emergency_img}}"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Subtitle</td>
                        <td>
                            <input autocomplete="off" type="text" name="subtitle" class="form-control" value="{{$emergency->subtitle}}" >
                        </td>
                    </tr>
                    <tr>
                        <td>Telp</td>
                        <td>
                            <input autocomplete="off" type="text" name="telp" class="form-control" value="{{$emergency->telp}}" >
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Image
                        </td>
                        <td>
                            <input type="file" name="emergency_image" >
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </td>
                    </tr>
                    <tr><td></td><td></td></tr>
                </tbody>
            </table>


        </div><!-- /.box-body -->
    </form>
</section>

<section id="layout">
    @include('backend.pages.headfoot.partner.partner')
</section>

<section id="layout">
    @include('backend.pages.headfoot.bottomfooter')
</section>

@section('scripts')
@parent
<script>
    (function ($) {
        //submit form
        $('#form-footer-emergency').ajaxForm({
            success: function () {
                alert('Data telah disimpan.');
            }
        });

        //image 
        $('input[name=emergency_image]').change(function () {
            var fr = new FileReader;
            var fileUpload = this;
            var img_width = 237;
            var img_height = 241;
            var imgprev = $('#emergency_img_prev');
            var img_input = $(this);
            
            fr.onload = function () {
                var img = new Image;
                var ukuransesuai = false;
                img.onload = function () {
                    if (img.width == img_width && img.height == img_height) {
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
                        imgprev.attr('src', 'backend/img/footer/emergency.jpg');
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