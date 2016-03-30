

<form id="form-edit-career" name="form-edit-career" method="POST" action="admin/pages/career/update-career" enctype="multipart/form-data" >
    <input type="hidden" name="id" value="{{$data->id}}"/>
    <div class="box-body">
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
        <div class="form-group">
            <button type="submit" class="btn btn-sm btn-primary" >Save</button>
            <a class="btn btn-sm btn-danger" id="btn-cancel-add-edit-career" data-dismiss="modal" >Cancel</a>
        </div>
    </div><!-- /.box-body -->

</form>

<script>
    (function ($) {
        

    })(jQuery);
</script>