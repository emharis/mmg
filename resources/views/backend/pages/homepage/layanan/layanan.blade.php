<a class="btn btn-primary btn-sm" id="btn-new-layanan" ><i class="fa fa-plus" ></i> Add Layanan</a>

<div class="clearfix" ></div>
<br/>

@include('backend.pages.homepage.layanan.newlayanan')

<table class="table table-bordered table-condensed" id="table-layanan" >
    <thead>
        <tr>
            <th class="col-md-1 col-sm-1 col-lg-1">No</th>
            <th>Nama</th>
            <th class="col-md-1 col-sm-1 col-lg-1">Aktif</th>
            <th class="col-md-1 col-sm-1 col-lg-1" >Order</th>
            <th class="col-md-1 col-sm-1 col-lg-1" ></th>
        </tr>
    </thead>
    <tbody>
        <?php $idxly = 1; ?>
        @foreach($layanan as $dt)
        <tr>
            <td>{{$idxly++}}</td>
            <td>{{$dt->title}}</td>
            <td >
                <?php $chk = '<input type="checkbox" name="ck_aktif_"' . $dt->id . ' class="ck_layanan" ' . ($dt->aktif == 'Y' ? 'checked="checked"' : '') . ' >'; ?>
                {!!$chk!!}
            </td>
            <td>
                <a title="Shift Up" class="btn-shift-up btn btn-success btn-sm" href="admin/pages/homepage/layanan-shift-up/{{$dt->id}}" ><i class="fa fa-angle-double-up" ></i></a>
                <a title="Shift Down" class="btn-shift-down btn btn-warning btn-sm" href="admin/pages/homepage/layanan-shift-down/{{$dt->id}}" ><i class="fa fa-angle-double-down" ></i></a>
            </td>
            <td>
                <a  title="Edit" class="btn-edit-layanan btn btn-primary btn-sm" href="admin/pages/homepage/edit-layanan/{{$dt->id}}" ><i class="fa fa-edit"></i></a>
                <a title="Delete" class="btn-delete-layanan btn btn-danger btn-sm" href="admin/pages/homepage/delete-layanan/{{$dt->id}}" ><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!--<div class="modal" id="modal-layanan" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Image Slider</h4>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div> /.modal-content 
    </div> /.modal-dialog 
</div> /.modal -->

@section('scripts')
@parent
<script>
(function ($) {
    //tambah layanan baru
    $('#btn-new-layanan').click(function(){
       $('#form-new-layanan').hide(); 
       $('#form-new-layanan').removeClass('hide'); 
       $('#form-new-layanan').slideDown(250,null,function(){
           
       }); 
    });
})(jQuery);
</script>
@stop