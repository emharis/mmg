<!--KATEGORI GALERI-->

@extends('backend.layouts.master')

@section('styles')
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Gallery
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_1" data-toggle="tab">Category</a></li>
            <li><a href="admin/pages/gallery/gallery" >Gallery</a></li>

        </ul>
        <div class="tab-content">            
            <div class="tab-pane active" id="tab_1">
                <a class="btn btn-primary btn-sm" id="btn-add-kategori" ><i class="fa fa-plus" ></i> Add Kategori</a>
                <div class="clearfix" ></div>
                <br/>

                <form name="form-new-kategori" id="form-new-kategori" class="hide" method="POST" action="admin/pages/gallery/new-kategori" >
                    <table class="table table-bordered table-condensed" id="table-new-kategori" >
                        <tbody>
                            <tr>
                                <td>
                                    Nama
                                </td>
                                <td>
                                    <input type="text" name="kategori_nama" class="form-control" autocomplete="off" required />
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-primary btn-sm" >Save</button>
                                    <a class="btn btn-danger btn-sm" id="btn-cancel-add-kategori" >Cancel</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>

                <table id="table-kategori" class="table table-bordered table-condensed" >  
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th class="col-sm-2 col-md-2 col-lg-2" ></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($kategori as $dt)
                        <tr data-id="{{$dt->id}}" >
                            <td>
                                {{$dt->nama}}
                            </td>
                            <td>
                                <a class="btn btn-primary btn-xs btn-edit-kategori" >&nbsp;<i class="fa fa-edit" ></i>&nbsp;</a>
                                <a class="btn btn-danger btn-xs btn-delete-kategori" >&nbsp;<i class="fa fa-trash" ></i>&nbsp;</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- /.tab-content -->
    </div>
</section><!-- /.content -->

<div class="modal" id="modal-kategori" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Kategori</h4>
            </div>
            <div class="modal-body">
                <form name="form-update-kategori" id="form-update-kategori" method="POST" action="admin/pages/gallery/update-kategori">
                    <table class="table table-bordered table-condensed" >
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <input autocomplete="off" required type="text" class="form-control" name="kategori_nama"/>
                                    <input type="hidden" name="kategori_id"/>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                    <a id="btn-cancel-add-kategori" class="btn btn-danger btn-sm" data-dismiss="modal" >Cancel</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div> 
    </div> 
</div>

@stop

@section('scripts')
<script src="backend/plugins/jqueryform/jquery.form.js" type="text/javascript"></script>
<script>
(function ($) {
    //tambah kategori
    $('#btn-add-kategori').click(function () {
        //tampilkan form input kategori
        $('#form-new-kategori').removeClass('hide')
        $('#form-new-kategori').hide();
        $('#form-new-kategori').slideDown(250, null, function () {
            //clear input
            clearInputFormKategori();
            //focus kan ke input
            $('input[name=kategori_nama]').focus();
        });

    });

    //clear input form new kategori
    function clearInputFormKategori() {
        $('#form-new-kategori input[type=text]').val('');
    }

    //cancel input kategroi
    $('#btn-cancel-add-kategori').click(function () {
        $('#form-new-kategori').slideUp(250, null, function () {
            //clear input
            clearInputFormKategori();
        });
        return alse;
    });

    //submit save new kategori
    $('#form-new-kategori').ajaxForm({
        success: function (data) {
            data = JSON.parse(data);
            //close form
            $('#form-new-kategori').slideUp(250, null, function () {
                //new row
                var newrow = '<tr data-id="' + data.id + '" >\n\
                            <td>' + data.nama + '</td>\n\
                            <td>\n\
                                <a class="btn btn-primary btn-xs btn-edit-kategori" >&nbsp;<i class="fa fa-edit" ></i>&nbsp;</a>\n\
                                <a class="btn btn-danger btn-xs btn-delete-kategori" >&nbsp;<i class="fa fa-trash" ></i>&nbsp;</a>\n\
                            </td>\n\
                        </tr>';
                $('#table-kategori tbody').append(newrow);

                //clear input
                clearInputFormKategori();
            });
        }
    });

    //edit kategori
    $(document).on('click', '.btn-edit-kategori', function () {
        var row = $(this).closest('tr');
        var id = jQuery.trim(row.data('id'));
        var nama = jQuery.trim(row.children('td:first').text());

        //tampilkan data ke modal edit kategori
        $('#form-update-kategori input[name=kategori_nama]').val(nama);
        $('#form-update-kategori input[name=kategori_id]').val(id);
        $('#modal-kategori').modal('show');

        return false;
    });

    //submit edit kategori
    $('#form-update-kategori').ajaxForm({
        success: function (data) {
            data = JSON.parse(data);
            //update data di table
            var row = $('#table-kategori tr[data-id=' + data.id + ']');
            row.children('td:first').html(data.nama);

            //close modal
            $('#modal-kategori').modal('hide');
        }
    });

    //delete kategori
    $(document).on('click', '.btn-delete-kategori', function () {
        var row = $(this).closest('tr');
        var id = jQuery.trim(row.data('id'));
        var url = "admin/pages/gallery/delete-kategori/" + id;

        if (confirm('Anda akan menghapus data ini?')) {
            $.get(url, null, function () {
                //remove row
                row.fadeOut(250,null,function(){
                    row.remove();
                });
            });
        }
        return false;
    });

})(jQuery);
</script>
@stop
