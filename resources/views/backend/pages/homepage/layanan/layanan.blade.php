<form method="POST" action="admin/pages/homepage/update-section-layanan" name="form-section-layanan" id="form-section-layanan" enctype="multipart/form-data" >
    <div class="box-body">
        <div class="form-group">
            <label >Section Title</label>
            <div class="input-group">
                <input autocomplete="off" type="text" name="layanan_section_title" class="form-control" value="{{$layanan_section_title}}"  >
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div><!-- /btn-group -->
            </div>
        </div>
    </div><!-- /.box-body -->
</form>

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
                <a title="Shift Up" class="btn-shift-up-layanan btn btn-success btn-sm" href="admin/pages/homepage/layanan-shift-up/{{$dt->id}}" ><i class="fa fa-angle-double-up" ></i></a>
                <a title="Shift Down" class="btn-shift-down-layanan btn btn-warning btn-sm" href="admin/pages/homepage/layanan-shift-down/{{$dt->id}}" ><i class="fa fa-angle-double-down" ></i></a>
            </td>
            <td>
                <a  title="Edit" class="btn-edit-layanan btn btn-primary btn-sm" href="admin/pages/homepage/edit-layanan/{{$dt->id}}" ><i class="fa fa-edit"></i></a>
                <a title="Delete" class="btn-delete-layanan btn btn-danger btn-sm" href="admin/pages/homepage/delete-layanan/{{$dt->id}}" ><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal" id="modal-layanan" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Layanan</h4>
            </div>
            <div class="modal-body"></div>
        </div> 
    </div> 
</div> 

@section('scripts')
@parent
<script>
    (function ($) {
        //init jquery form
        $('#form-section-layanan').ajaxForm({
            success: function () {
                alert('Data telah disimpan.');
            }
        });

        //tambah layanan baru
        $('#btn-new-layanan').click(function () {
            $('#form-new-layanan').hide();
            $('#form-new-layanan').removeClass('hide');
            $('#form-new-layanan').slideDown(250, null, function () {

            });
        });

        //edit layanan
        $(document).on('click', '#table-layanan .btn-edit-layanan ', function () {

            var url = $(this).attr('href');
//            alert(url);
            //get halaman edit ke modal
            $.get(url, null, function (data) {
//                alert(data);
                $('#modal-layanan .modal-body').html(data);
                $('#modal-layanan').modal('show');
            });

            return false;
        });

        //DELETE LAYANAN
        $(document).on('click', '.btn-delete-layanan', function () {
            if (confirm('Anda akan menghapus data ini?')) {
                var url = $(this).attr('href');
                var row = $(this).closest('tr');
                var tbody = row.closest('tbody');

                $.get(url, null, function () {
                    //delete row                   
                    row.fadeOut(250, null, function () {
                        row.remove();

                        //re-order nomor row
                        var re_rownum = 1;
                        tbody.children('tr').each(function () {
                            $(this).children('td:first-child').html(re_rownum++);
                        });
                    });
                });


            }
            return false;
        });

        //SUBMIT LAYANAN SECTION
    })(jQuery);
</script>
@stop