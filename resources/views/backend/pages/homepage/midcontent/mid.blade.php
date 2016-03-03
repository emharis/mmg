<div class="row" >
    <div class="col-sm-6 col-md-6 col-lg-6" >
        <form method="POST" action="admin/pages/homepage/update-midcontent" name="form-mid" id="form-mid" enctype="multipart/form-data" >
            {!! Form::hidden('position','mid') !!}
            <div class="box-body">
                <div class="form-group">
                    <label >Title</label>
                    <input type="text" name="title" class="form-control" value="{{$midmidcontent->title}}" maxlength="25" >
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Content</label>
                    <textarea rows="10" name="content" class="form-control" >{{$midmidcontent->content}}</textarea>
                </div>
                <div class="form-group">
                        <label for="exampleInputEmail1">Image *270x169px</label>
                    <input type="file" name="midcontent_img" />
                </div>
                
            </div><!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    <div class="col-sm-4 col-md-4 col-lg-4" >
        
        @if($midmidcontent->img!="")
        <?php $img = App\Helpers\Helper::appsetting('homepage_slider_img_path') . '/' . $midmidcontent->img; ?>
        <img id="mid-midcontent-preview" src="{{$img}}" />
        <div class="clearfix" ></div>
        <br/>
        <a class="btn btn-sm btn-danger " id="btn-del-img-mid-midcontent" href="admin/pages/homepage/delete-midcontent-img/mid" ><i class="fa fa-trash-o"></i>  delete</a>
        @else
       <img id="mid-midcontent-preview" src="img/who-we-are/2.jpg" />
        @endif
    </div>
</div>

@section('scripts')
@parent
<script>
    (function ($) {
        //check image size
        $('#form-mid input[name=midcontent_img]').change(function () {
            var fr = new FileReader;
            var fileUpload = this;
            fr.onload = function () {
                var img = new Image;
                img.onload = function () {
                    if (img.width != 270 || img.height != 169) {
                        alert('Ukuran gambar tidak sesuai');
                        $('input[name=midcontent_img]').val(null);
//                        $('#mid-midcontent-preview').attr('src', 'img/who-we-are/_1.jpg');
//                        img = null;
                    } else {

                        if (fileUpload.files && fileUpload.files[0]) {

                            fr.onload = function (e) {
                                $('#mid-midcontent-preview').attr('src', e.target.result);
                            }

                            fr.readAsDataURL(fileUpload.files[0]);
                        }

                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });

        //Jquery form
        $('form[name=form-mid]').ajaxForm({
            success: function (data) {
                alert('Perubahan data telah disimpan');
            }
        });

        //delete midcontent img
        $('#btn-del-img-mid-midcontent').click(function () {
            var url = $(this).attr('href');

            if (confirm('Anda akan menghapus data ini?')) {
                $.get(url, null, function (data) {
                    //hapus foto 
                    $('#mid-midcontent-preview').attr('src', 'img/who-we-are/2.jpg');
                });
            }

            return false;
        });

    })(jQuery);
</script>
@stop