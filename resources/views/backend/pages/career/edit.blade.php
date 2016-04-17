<form id="form-edit-career" name="form-edit-career" method="POST" action="admin/pages/career/update-career" enctype="multipart/form-data">
    <input type="hidden" name="id" value="{{$data->id}}" />
    <div class="box-body">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-lg-9">
                <div class="form-group">
                    <label for="exampleInputEmail1">Aktif</label>
                    {!!Form::select('aktif',['Y'=>'Aktif','N'=>'Not Aktif'],$data->aktif,['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input autocomplete="off" type="text" name="title" class="form-control" value="{{$data->title}}" required />
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi</label>
                    <textarea id="edit-textareahtml5" name="desc" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                        {{$data->desc}}
                    </textarea>
                </div>
                <div class="form-group" >
                    <label >Image</label>
                    <input type="file" name="career_edit_img" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sm btn-primary">Save</button>
                    <a class="btn btn-sm btn-danger" id="btn-cancel-add-edit-career" data-dismiss="modal">Cancel</a>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3">
                <img id="career-edit-img-prev" class="img-responsive" src="{{$data->img != '' ? $career_img_path . '/' . $data->img : ''}}" />
            </div>
        </div>
    </div>
    <!-- /.box-body -->

</form>

<script>
    (function($) {
        $('input[name=career_edit_img]').change(function() {
            var fr = new FileReader;
            var fileUpload = this;
            var imgprev = $('#career-edit-img-prev');
            var img_input = $(this);
            fr.onload = function() {
                var img = new Image;
                var ukuransesuai = false;
                img.onload = function() {
                    //tampilkan gambar
                    if (fileUpload.files && fileUpload.files[0]) {
                        fr.onload = function(e) {
                            imgprev.attr('src', e.target.result);
                        }
                        fr.readAsDataURL(fileUpload.files[0]);
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });
    })(jQuery);
</script>