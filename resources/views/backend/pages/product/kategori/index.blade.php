<!--DATA KATEGORI-->
<a class="btn btn-primary btn-sm" id="btn-add-kategori" ><i class="fa fa-plus" ></i> Add Category</a>
<div class="clearfix" ></div>
<br/>

<form name="form-new-kategori" id="form-new-kategori" action="admin/pages/product/new-kategori" method="POST" class="hide">
    <table class="table table-bordered table-condensed " id="table-new-kategori" >
        <tbody>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="kategori_nama" class="form-control" autocomplete="off" />    
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-sm btn-primary" >Save</button>
                    <a class="btn btn-danger btn-sm" id="btn-cancel-new-kategori" >Cancel</a>
                </td>
            </tr>
        </tbody>
    </table>    
</form>

<table id="table-kategori" class="table table-bordered table-condensed table-hover" >
    <thead>
        <tr>
            <th>Nama</th>
            <th class="col-sm-1 col-md-1 col-lg-1">Aktif</th>
            <th class="col-sm-1 col-md-1 col-lg-1" >Order</th>
            <th class="col-sm-1 col-md-1 col-lg-1" ></th>
        </tr>
    </thead>
    <tbody>
        @foreach($kategori as $dt)
        <tr data-id="{{$dt->id}}" >
            <td>{{$dt->nama}}</td>
            <td class="text-center" >
                @if($dt->aktif == 'Y')
                <i class="fa fa-check" ></i>
                @else
                <i class="fa fa-close" ></i>
                @endif
            </td>
            <td class="text-center" >
                <a class="btn btn-success btn-xs btn-shift-up-kategori " >&nbsp; <i class="fa fa-angle-double-up" ></i> &nbsp;</a>
                <a class="btn btn-warning btn-xs btn-shift-down-kategori " >&nbsp; <i class="fa fa-angle-double-down" ></i> &nbsp;</a>
            </td>
            <td class="text-center" >
                <a class="btn btn-primary btn-xs btn-edit-kategori " >&nbsp; <i class="fa fa-edit" ></i> &nbsp;</a>
                <a class="btn btn-danger btn-xs btn-delete-kategori " >&nbsp; <i class="fa fa-trash" ></i> &nbsp;</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal" id="modal-kategori" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Kategori</h4>
            </div>
            <div class="modal-body"></div>
        </div> 
    </div> 
</div>

@section('scripts')
@parent
<script>
    (function ($) {
        //show form new
        $('#btn-add-kategori').click(function () {
            //tampilkan form new kategori
            $('#form-new-kategori').hide();
            $('#form-new-kategori').removeClass('hide');
            $('#form-new-kategori').slideDown(250, null, function () {
                //focus ke input
                $('input[name=kategori_nama]').focus();
            });
            return false;
        });
        //hide form new
        $('#btn-cancel-new-kategori').click(function () {
            closeFormNew();
        });
        //close form new kategori
        function closeFormNew() {
            $('#form-new-kategori').slideUp(250, null, function () {
                //clear input
                $('#form-new-kategori input[type=text]').val(null);
            });
        }

        $('#form-new-kategori').ajaxForm({
            success: function (data) {
                closeFormNew();
                data = JSON.parse(data);
                //tampilkan data ket table
                var newrow = '<tr data-id="' + data.id + '" >\n\
                            <td>' + data.nama + '</td>\n\
                            <td class="text-center" >\n\
                                <i class="fa fa-check" ></i>\n\
                            </td>\n\
                            <td class="text-center" >\n\
                                <a class="btn btn-success btn-xs btn-shift-up-kategori " >&nbsp; <i class="fa fa-angle-double-up" ></i> &nbsp;</a>\n\
                                <a class="btn btn-warning btn-xs btn-shift-down-kategori " >&nbsp; <i class="fa fa-angle-double-down" ></i> &nbsp;</a>\n\
                            </td>\n\
                            <td class="text-center" >\n\
                                <a class="btn btn-primary btn-xs btn-edit-kategori " >&nbsp; <i class="fa fa-edit" ></i> &nbsp;</a>\n\
                                <a class="btn btn-danger btn-xs btn-delete-kategori " >&nbsp; <i class="fa fa-trash" ></i> &nbsp;</a>\n\
                            </td>\n\
                        </tr>';

                var lastrow = $('#table-kategori tbody tr:last-child');
                var rowlength = $('#table-kategori tbody').children().length;
                if (rowlength) {
                    lastrow.after(newrow);
                } else {
                    $('#table-kategori tbody ').append(newrow);
                }
            }
        });

        //edit kategori
        $(document).on('click', '.btn-edit-kategori', function () {
            var id = $(this).closest('tr').data('id');
            var url = "admin/pages/product/edit-kategori/" + id;
            $.get(url, null, function (data) {
                //appen ke modal-kategori
                $('#modal-kategori .modal-body').html(data);
                $('#modal-kategori').modal('show');
            });
            return false;
        });

        //delete kategori
        $(document).on('click', '.btn-delete-kategori', function () {
            var id = $(this).closest('tr').data('id');
            var url = "admin/pages/product/delete-kategori/" + id;
            var row = $(this).closest('tr');
            if (confirm('Anda akan menghapus data ini?')) {
                $.get(url, null, function () {
                    //delete data di row
                    row.fadeOut(250, null, function () {
                        row.remove();
                    });
                });
            }
            return false;
        });

        //SHIFT UP KATEGORI
        $(document).on('click', '.btn-shift-up-kategori', function () {
            var id = $(this).closest('tr').data('id');
            var url = "admin/pages/product/shift-up-kategori/" + id;
            var row = $(this).closest('tr');
            var row_upper = row.prev();

            $.get(url, null, function () {
                row.fadeOut(250, null, function () {
                    row.insertBefore(row_upper);
                    row.fadeIn(250);

                    //blinkink
                    row.css("background-color", "#DCF1F7");
                    setTimeout(function () {
                        row.css("background-color", "inherit");
                        setTimeout(function () {
                            row.css("background-color", "#DCF1F7");
                            setTimeout(function () {
                                row.css("background-color", "inherit");
                            }, 300);
                        }, 300);
                    }, 300);

                });
            });

            return false;
        });
        //SHIFT down KATEGORI
        $(document).on('click', '.btn-shift-down-kategori', function () {
            var id = $(this).closest('tr').data('id');
            var url = "admin/pages/product/shift-down-kategori/" + id;
            var row = $(this).closest('tr');
            var row_lower = row.next();

            $.get(url, null, function () {
                row.fadeOut(250, null, function () {
                    row.insertAfter(row_lower);
                    row.fadeIn(250);

                    //blinkink
                    row.css("background-color", "#DCF1F7");
                    setTimeout(function () {
                        row.css("background-color", "inherit");
                        setTimeout(function () {
                            row.css("background-color", "#DCF1F7");
                            setTimeout(function () {
                                row.css("background-color", "inherit");
                            }, 300);
                        }, 300);
                    }, 300);

                });
            });

            return false;
        });


    })(jQuery);
</script>
@append