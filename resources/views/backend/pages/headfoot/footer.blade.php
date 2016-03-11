<section id="layout">
    <h2 class="page-header"><a href="admin/pages/headfoot#emergency">Emergency</a></h2>
    <form method="POST" action="admin/pages/headfoot/update-emergency" name="form-footer-emergency" id="form-footer-emergency" enctype="multipart/form-data" >

        <div class="box-body">
            <div class="form-group">
                <label >Title</label>
                <input autocomplete="off" type="text" name="title" class="form-control" value="{{$emergency->title}}" >
            </div>
            <div class="form-group">
                <label >Subtitle</label>
                <input autocomplete="off" type="text" name="subtitle" class="form-control" value="{{$emergency->subtitle}}" >
            </div>
            <div class="form-group">
                <label >Telp</label>
                <input autocomplete="off" type="text" name="telp" class="form-control" value="{{$emergency->telp   }}" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </div><!-- /.box-body -->
    </form>
</section>

<section id="layout">
    @include('backend.pages.headfoot.partner.partner')
</section>

@section('scripts')
@parent
<script>
    (function ($) {
        //submit form
        $('#form-footer-emergency').ajaxForm({
            success:function(){
                alert('Data telah disimpan.');
            }
        });
    })(jQuery);
</script>
@append