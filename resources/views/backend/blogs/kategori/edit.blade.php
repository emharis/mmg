<form name="form-update-kategori" id="form-update-kategori" action="admin/pages/product/update-kategori" method="POST" >
    {!! Form::hidden('kategori_id',$data->id) !!}
    <table class="table table-bordered table-condensed " id="table-new-kategori" >
        <tbody>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="kategori_nama" class="form-control" autocomplete="off" value="{{$data->nama}}" />    
                </td>
            </tr>
            <tr>
                <td>Aktif</td>
                <td>
                    {!! Form::select('kategori_aktif',['Y'=>'Aktif','N'=>'Non Aktif'],$data->aktif,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-sm btn-primary" >Save</button>
                    <a class="btn btn-danger btn-sm" id="btn-cancel-new-kategori" data-dismiss="modal" >Cancel</a>
                </td>
            </tr>
        </tbody>
    </table>    
</form>

<script>
    (function ($) {
        $('#form-update-kategori').ajaxForm({
            success:function(data){
                //close modal
                $('#modal-kategori').modal('hide');
                //get data to JSON
                data = JSON.parse(data);
                //update data kategori di table
                var row = $('#table-kategori tr[data-id='+ data.id +']');
                row.children('td:first').html(data.nama);
                
                var aktif = '<i class="fa fa-check" ></i>';
                var nonaktif = '<i class="fa fa-close" ></i>';
                
                if(data.aktif == 'Y'){
                    row.children('td:first').next().html(aktif);
                }else{
                    row.children('td:first').next().html(nonaktif);
                }
            }
        });

    })(jQuery);
</script>