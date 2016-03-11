<div id="form-edit-layanan" >
    <form method="POST" name="form-edit-layanan" id="form-edit-layanan" action="admin/pages/homepage/update-layanan" enctype="multipart/form-data" >
        {!! Form::hidden("layanan_id",$data->id) !!}
        <table class="table table-bordered table-condensed" style="background-color: #e8e9ea;" >
            <tbody>
                <tr>
                    <td class="col-md-2">
                        <label>Type</label>
                    </td>
                    <td>
                        <input type="text" name="layanan_type" value="Type {{$data->type}}" class="form-control" readonly="readonly" />
                    </td>
                </tr>
                <!--Layanan Type 1-->
                <tr class="layanan-type-1" >
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        {!! Form::text('title',$data->title,['required','class'=>'form-control ','autocomplete'=>'off','maxlength'=>'30']) !!}
                    </td>
                </tr>
                <tr class="layanan-type-1" >
                    <td>
                        <label>Content</label>
                    </td>
                    <td>
                        {!! Form::textarea('content',$data->content,['rows'=>'4','class'=>'form-control ','rows'=>'4']) !!}

                    </td>
                </tr>
                @if($data->type == 1)
                <tr class="layanan-type-1" >
                    <td>

                    </td>
                    <td >

                        <div class="row" >
                            <div class="col-md-4" >
                                <label>Image Side *288x458px</label>
                                @if($data->img_side != '')
                                <img style="width: 120px;"  id="layanan_img_side_type_1_prev" class="img-responsive" src="{{$data->imgpath . '/' . $data->img_side}}" />
                                @endif
                                {!! Form::file('img-side-type-1',['autocomplete'=>'off']) !!}       
                            </div>
                            <div class="col-md-6" >
                                <label>Image Bottom *495x168.5px</label>
                                @if($data->img_bottom != '')
                                <img id="layanan_img_bottom_type_1_prev" class="img-responsive" src="{{$data->imgpath . '/' . $data->img_bottom}}" />
                                @endif
                                {!! Form::file('img-bottom-type-1',['autocomplete'=>'off']) !!}
                            </div>
                        </div>
                    </td>
                </tr>
                @endif
                <!--End of Layanan Type 1-->

                @if($data->type == 2)
                <!--Layanan Type 2-->
                <tr class="layanan-type-2" >
                    <td>
                        <label>Image *833x253px</label>
                    </td>
                    <td>
                        <img id="layanan_img_bottom_type_2_prev" class="img-responsive" src="{{$data->imgpath . '/' . $data->img_bottom}}" />
                        {!! Form::file('img-bottom-type-2',['autocomplete'=>'off']) !!}
                    </td>
                </tr>
                @endif
                <!--End of Layanan Type 2-->
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-sm" >Save</button>
                        <a data-dismiss="modal" id="btn-cancel-edit-layanan" class="btn btn-danger btn-sm" >Cancel</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <div class="ln_solid"></div>
</div>


<script>
    (function ($) {
//        //cek ukuran gambar
        $('#form-edit-layanan input[name=img-bottom-type-1]').change(function () {
            var imginput = $(this);
            var fr = new FileReader;
            var fileUpload = this;
            fr.onload = function () {
                var img = new Image;
                img.onload = function () {
                    if (img.width != 495 || img.height < 168 || img.height > 169) {
                        alert('Ukuran gambar tidak sesuai');
                        imginput.val(null);
                        img = null;
                    }else{
                        //tampilkan gambar bottom
                        if (fileUpload.files && fileUpload.files[0]) {
                            fr.onload = function (e) {
                                $('#layanan_img_bottom_type_1_prev').attr('src', e.target.result);
                            }

                            fr.readAsDataURL(fileUpload.files[0]);
                        }
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });
        $('#form-edit-layanan input[name=img-side-type-1]').change(function () {
            var imginput = $(this);
            var fr = new FileReader;
            var fileUpload = this;
            fr.onload = function () {
                var img = new Image;
                img.onload = function () {
                    if (img.width != 288 || img.height != 458) {
                        alert('Ukuran gambar tidak sesuai');
                        imginput.val(null);
                        img = null;
                    } else {
                        //tampilkan gambar preview
                        if (fileUpload.files && fileUpload.files[0]) {
                            fr.onload = function (e) {
                                $('#layanan_img_side_type_1_prev').attr('src', e.target.result);
                            }

                            fr.readAsDataURL(fileUpload.files[0]);
                        }
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });
        
        //cek ukuran gambar type 2
        $('#form-edit-layanan input[name=img-bottom-type-2]').change(function () {
            var imginput = $(this);
            var fr = new FileReader;
            var fileUpload = this;
            fr.onload = function () {
                var img = new Image;
                img.onload = function () {
                    if (img.width != 833 || img.height != 253) {
                        alert('Ukuran gambar tidak sesuai');
                        imginput.val(null);
                        img = null;
                    } else {
                        //tampilkan gambar preview
                        if (fileUpload.files && fileUpload.files[0]) {
                            fr.onload = function (e) {
                                $('#layanan_img_bottom_type_2_prev').attr('src', e.target.result);
                            }

                            fr.readAsDataURL(fileUpload.files[0]);
                        }
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });
        
        //SAVE EDIT LAYANAN
        $('#form-edit-layanan').ajaxForm({
            success:function(data){
                //close modal
                $('#modal-layanan').modal('hide');
                //update layanana di table
            }
        });
        
//        $('#form-edit-layanan input[name=img-type-2]').change(function () {
//            var imginput = $(this);
//            var fr = new FileReader;
//            fr.onload = function () {
//                var img = new Image;
//                img.onload = function () {
//                    if (img.width != 833 || img.height != 253) {
//                        alert('Ukuran gambar tidak sesuai');
//                        imginput.val(null);
//                        img = null;
//                    }
//                };
//                img.src = fr.result;
//            };
//            fr.readAsDataURL(this.files[0]);
//        });
//        //submit form
//        $('#form-edit-layanan').ajaxForm({
//            success: function (data) {
//                closeFormNewLayanan();
//                //tampilkan data ke tabel
//                var lastrow = $('#table-layanan tbody tr:last-child');
//                var rownum = parseInt(lastrow.children('td:first-child').html()) + 1;
//                var rowlength = $('#table-layanan tbody').children().length;
//                if (rowlength == 0) {
//                    rownum = 1;
//                }
//
//                data = JSON.parse(data);
//
//                var ckaktif = "";
//                if (data.aktif == 'Y') {
//                    ckaktif = '<input type="checkbox" name="ck_aktif_' + data.id + '" checked="checked" class="ck_layanan" >';
//                } else {
//                    ckaktif = '<input type="checkbox" name="ck_aktif_' + data.id + '" class="ck_layanan"  >';
//                }
//
////                alert('tampilkan new form ke tabel');
//                var newrow = '<tr><td>' + rownum + '</td>\n\
//            <td>' + data.title + '</td>\n\
//            <td >' + ckaktif + '\n\
//            </td>\n\
//            <td>\n\
//                <a title="Shift Up" class="btn-shift-up-layanan btn btn-success btn-sm" href="admin/pages/homepage/layanan-shift-up/' + data.id + '" ><i class="fa fa-angle-double-up" ></i></a>\n\
//                <a title="Shift Down" class="btn-shift-down-layanan btn btn-warning btn-sm" href="admin/pages/homepage/layanan-shift-down/' + data.id + '" ><i class="fa fa-angle-double-down" ></i></a>\n\
//            </td>\n\
//            <td>\n\
//                <a  title="Edit" class="btn-edit-layanan btn btn-primary btn-sm" href="admin/pages/homepage/edit-layanan/' + data.id + '" ><i class="fa fa-edit"></i></a>\n\
//                <a title="Delete" class="btn-delete-layanan btn btn-danger btn-sm" href="admin/pages/homepage/delete-layanan/' + data.id + '" ><i class="fa fa-trash-o"></i></a>\n\
//            </td></tr>';
//                if (rowlength) {
//                    lastrow.after(newrow);
//                } else {
//                    $('#table-layanan tbody ').append(newrow);
//                }
//            }
//        });
//        //cancel layanan
//        $('#btn-cancel-edit-layanan').click(function () {
//            closeFormNewLayanan();
//        });
//        function closeFormNewLayanan() {
//            $('#form-edit-layanan input[type=text]').val('');
//            $('#form-edit-layanan textarea').val('');
//            $('#form-edit-layanan select').val([]);
//            $('#form-edit-layanan input[type=file]').val(null);
//            $('#form-edit-layanan img').attr('src', '');
//            $('#form-edit-layanan').slideUp(250);
//        }
//
//        //SHIFT UP LAYANAN
//        $(document).on('click', '.btn-shift-up-layanan', function () {
//            var url = $(this).attr('href');
//            var row = $(this).closest('tr');
//
//            $.get(url, null, function () {
//                var rowupper = row.prev();
//                var rownum = row.children('td:first-child').html();
//                if (rownum > 1) {
//                    //pindah row di table
//                    row.fadeOut(250, null, function () {
//                        row.insertBefore(rowupper);
//                        row.fadeIn(500, null, function () {
//                            //rubah row number
//                            row.children('td:first-child').html(parseInt(rownum) - 1);
//                            rowupper.children('td:first-child').html(rownum);
//                        });
//
//                    });
//
//                }
//
//            });
//            return false;
//        });
//        //SHIFT DOWN LAYANAN
//        $(document).on('click', '.btn-shift-down-layanan', function () {
//            var url = $(this).attr('href');
//            var row = $(this).closest('tr');
//            var lastrownum = row.closest('tbody').children('tr:last-child').children('td:first-child').html();
////            alert(lastrownum);
//
//            $.get(url, null, function () {
//                var rownum = row.children('td:first-child').html();
//                if (rownum < lastrownum) {
//                    var rowlower = row.next();
//                    //rubah warna biar keliatan
////                    row.css('background-color', 'red');
////                    rowlower.css('background-color', 'green');
//                    row.fadeOut(250, null, function () {
//                        //pindah row di table
//                        row.insertAfter(rowlower).fadeIn(500, null, function () {
//                            //rubah row number
//                            row.children('td:first-child').html(parseInt(rownum) + 1);
//                            rowlower.children('td:first-child').html(rownum);
//                        });
//
//                    });
//
//                }
//
//            });
//            return false;
//        });
//
//        //DELETE DATA LAYANAN
//        $(document).on('click', '.btn-delete-layanan', function () {
//            if (confirm('Anda akan menghapus data ini?')) {
//                var url = $(this).attr('href');
//                var row = $(this).closest('tr');
//                var tbody = row.closest('tbody');
//
//                $.get(url, null, function () {
//                    //delete row                   
//                    row.fadeOut(250, null, function () {
//                        row.remove();
//
//                        //re-order nomor row
//                        var re_rownum = 1;
//                        tbody.children('tr').each(function () {
//                            $(this).children('td:first-child').html(re_rownum++);
//                        });
//                    });
//                });
//
//
//            }
//            return false;
//        });

        //EDIT DATA LAYANAN

    })(jQuery);
</script>
