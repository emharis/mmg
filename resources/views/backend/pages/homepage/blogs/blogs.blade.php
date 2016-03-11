
<form method="POST" action="admin/pages/homepage/update-section-title-blog" name="form-section-blog" id="form-section-blog" enctype="multipart/form-data" >
    <div class="box-body">
        <div class="form-group">
            <label >Section Title</label>
            <input autocomplete="off" type="text" name="blog_section_title" class="form-control" value="{{$blog_section_title}}"  >
        </div>
        <div class="form-group">
            <label >Section Title</label>
            {!! Form::select('displayed_blog_item_number',[2=>2,4=>4,6=>6,8=>8],$displayed_blog_item_number,['class'=>'form-control']) !!}        
            
        </div>
        <div class="form-group">
            <div class="input-group-btn">
                <button type="submit" class="btn btn-primary">Save</button>
            </div><!-- /btn-group -->
        </div>
    </div><!-- /.box-body -->
</form>
@section('scripts')
@parent
<script>
    (function ($) {

        //update section title
        $('#form-section-blog').ajaxForm(function () {
            alert('Data telah disimpan');
        });

    })(jQuery);
</script>
@stop