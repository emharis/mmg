@extends('backend.layouts.master')

@section('styles')
@parent

@append

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Kategori Blog
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-solid" >
        <div class="box-body" >
            <a  id="btn-add-kategori" class="btn btn-primary btn-sm" ><i class="fa fa-plus" ></i> Add Kategori</a>
            <div class="clearfix" ></div>
            <br/>
            <form id="form-new-kategori" class="hide" name="form-new-kategori" method="POST" action="admin/blogs/kategori/insert" enctype="multipart/form-data" >
                <table class="table table-bordered table-condensed" id="table-input-kategori" >
                    <tbody>
                        <tr>
                            <td class="col-sm-2 col-md-2 col-lg-2">Nama</td>
                            <td>
                                <input autocomplete="off" type="text" name="nama" required class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td colspan="2">
                                <button type="submit" class="btn btn-sm btn-primary" >Save</button>
                                <a class="btn btn-sm btn-danger" id="btn-cancel-add" >Cancel</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <!--table data description-->
            <table class="table table-bordered table-condensed" id="table-kategori" >
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th class="col-sm-1 col-md-1 col-lg-1" ></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kategori as $dt)
                    <tr data-id="{{$dt->id}}" >
                        <td>{{$dt->nama}}</td>
                        <td>
                            <a class="btn btn-xs btn-primary btn-edit " href="admin/blogs/kategori/edit/{{$dt->id}}"   ><i class="fa fa-edit" ></i></a>
                            <a class="btn btn-xs btn-danger btn-delete" href="admin/blogs/kategori/delete/{{$dt->id}}"   ><i class="fa fa-trash" ></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section><!-- /.content -->

<div class="modal" id="modal-kategori" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Kategori</h4>
            </div>
            <form id="form-edit-kategori" name="form-edit-kategori" action="admin/blogs/kategori/update" method="POST" >
                <div class="modal-body">

                    <div class="form-group" >
                        <label>Nama</label>
                        <input type="text" name="nama" value="" class="form-control" autocomplete="OFF" required/>
                        <input type="hidden" name="id" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary " >Save</button>
                    <a class="btn btn-danger " data-dismiss="modal" >Cancel</a>
                </div>
            </form>
        </div> 
    </div> 
</div>
@stop

@section('scripts')
<script src="backend/plugins/jqueryform/jquery.form.js" type="text/javascript"></script>
<script>
(function ($) {
    //insert new kategori
    $('#btn-add-kategori').click(function () {
        $('#form-new-kategori').hide();
        $('#form-new-kategori').removeClass('hide');
        $('#form-new-kategori').slideDown(250, null, function () {
            //focuskan
            $('input[name=nama]').focus();
        });
    });

    //cancel add new kategori
    $('#btn-cancel-add').click(function () {
        $('#form-new-kategori').slideUp(250, null, function () {
            //clear input form
            $('#form-new-kategori input[type=text]').val('');
        });
    });

    //submit kategori baru
    $('#form-new-kategori').ajaxForm({
        success: function (datares) {
            var data = JSON.parse(datares);
            //close form
            $('#form-new-kategori').slideUp(250, null, function () {
                //clear input form
                $('#form-new-kategori input[type=text]').val('');
            });
            //tambahkan row baru
            var newrow = '<tr data-id="' + data.id + '" >\n\
                    <td>' + data.nama + '</td>\n\
                    <td>\n\
                        <a class="btn btn-primary btn-xs btn-edit" ><i class="fa fa-edit" ></i></a>\n\
                        <a href="admin/blogs/kategori/delete/' + data.id + '" class="btn btn-danger btn-xs btn-delete" ><i class="fa fa-trash" ></i></a>\n\
                    </td>\n\
                <tr>';
            $('#table-kategori tbody').append(newrow);
        }
    });

    //edit kategori
    $(document).on('click', '.btn-edit', function () {
        var id = $(this).parent().parent().data('id');
        //get data edit
        $.get('admin/blogs/kategori/edit/' + id, null, function (datares) {
            var data = JSON.parse(datares);
            //set data to form edit
            $('#form-edit-kategori input[name=id]').val(data.id);
            $('#form-edit-kategori input[name=nama]').val(data.nama);
            $('#modal-kategori').modal('show');
            //focuskan
            $('#form-edit-kategori input[name=nama]').focus();
        });

        return false;
    });
    
    //submit form update
    $('#form-edit-kategori').ajaxForm({
        success:function(datares){
            var data = JSON.parse(datares);
            $('#modal-kategori').modal('hide');
            //update row
//            alert(data.id);
            var row = $('#table-kategori tbody tr[data-id="' + data.id + '"]');
            row.children('td:first').html(data.nama);
        }
    });

    //delete kategori
    $(document).on('click', '.btn-delete', function () {
        var row = $(this).parent().parent();
        if (confirm('Anda akan menghapus data ini?')) {
            var url = $(this).attr('href');
            $.get(url, null, function () {
                //remove row from table
                row.fadeOut(250,null,function(){
                    row.remove();
                });
            });
        }
        return false;
    });


})(jQuery);
</script>
@append
