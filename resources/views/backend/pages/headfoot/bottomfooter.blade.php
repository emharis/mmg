@section('styles')
@parent
@append

<h2 class="page-header">
    <a href="admin/pages/headfoot#bottomfooter">Bottom Footer</a>
</h2>
<!--FORM INPUT NEW PARTNER-->
<form  method="POST" action="admin/pages/headfoot/update-bottom-footer" name="form-bottom-footer" id="form-bottom-footer" enctype="multipart/form-data" >
    <table class="table table-bordered table-condensed" >
        <tbody>
            <tr>
                <td>Message Info Text</td>
                <td>
                    <input type="text" name="message_info_text" class="form-control" autocomplete="off" required value="{{$bottom_footer->message_info_text}}" />
                </td>
                <td rowspan="10" class="col-md-3 col-sm-3 col-lg-3" >
                    <?php $bottomimg = $bottom_footer->img != "" ? $bottom_footer->img : "backend/img/footer/footer-man.png"; ?>
                    <img id="bottomfooter_img_prev" class="img-responsive" src="{{$bottomimg}}"  />
                </td>
            </tr>
            <tr>
                <td>Image *262x378</td>
                <td>
                    <input type="file" name="bottomfooter_img" accept=".gif,.jpg,.jpeg,.png" />
                </td>
            </tr>
            <tr>
                <td>Office 1</td>
                <td>
                    {!! Form::select('office_1',$select_office,$bottom_footer->office_1,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>Office 2</td>
                <td>
                    {!! Form::select('office_2',$select_office,$bottom_footer->office_2,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td>Office 3</td>
                <td>
                    {!! Form::select('office_3',$select_office,$bottom_footer->office_3,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                </td>
            </tr>
            <tr><td></td><td></td></tr>
            <tr><td></td><td></td></tr>
            <tr><td></td><td></td></tr>
            <tr><td></td><td></td></tr>
        </tbody>
    </table>
</form>

@section('scripts')
@parent
<script>
    (function ($) {
        //submit form bottom footer
//        $('form[name=form-bottom-footer]').ajaxForm({
//            success: function () {
//                alert('Data telah disimpan');
//            }
//        });

        //cek ukuran image bottom footer
        $('input[name=bottomfooter_img]').change(function () {
            var fr = new FileReader;
            var fileUpload = this;
            var img_width = 262;
            var img_height = 378;
            var imgprev = $('#bottomfooter_img_prev');
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
                        imgprev.attr('src', 'backend/img/footer/footer-man.png');
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