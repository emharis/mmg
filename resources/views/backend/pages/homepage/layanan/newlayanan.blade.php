<div class="hide" id="form-new-layanan" >
    <form method="POST" name="form-new-layanan" id="form-new-layanan" action="admin/pages/homepage/new-layanan" enctype="multipart/form-data" >
        <table class="table table-bordered table-condensed" style="background-color: #e8e9ea;" >
            <tbody>
                <tr>
                    <td class="col-md-2">
                        <label>Type</label>
                    </td>
                    <td>
                        <select id="layanan_type" name="layanan_type" class="form-control" required>
                            <option value="1" data-img="backend/img/layanan_type/type_1.jpg" >Type 1</option>
                            <option value="2" data-img="backend/img/layanan_type/type_2.jpg" >Type 2</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <img id="layanan_type_preview" class="img-responsive" src="" />
                    </td>
                </tr>
                <!--Layanan Type 1-->
                <tr class="layanan-type-1" >
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        {!! Form::text('title-type-1',null,['class'=>'form-control ','autocomplete'=>'off','maxlength'=>'30']) !!}

                    </td>
                </tr>
                <tr class="layanan-type-1" >
                    <td>
                        <label>Content</label>
                    </td>
                    <td>
                        {!! Form::textarea('content-type-1',null,['class'=>'form-control ']) !!}

                    </td>
                </tr>
                <tr class="layanan-type-1" >
                    <td>
                        <label>Image Bottom *288x458px</label>
                    </td>
                    <td>
                        {!! Form::file('img-bottom-type-1',['autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <tr class="layanan-type-1" >
                    <td>
                        <label>Image Side *495x168.5px</label>
                    </td>
                    <td>
                        {!! Form::file('img-side-type-1',['autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <!--End of Layanan Type 1-->

                <!--Layanan Type 2-->
                <tr class="layanan-type-2" >
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        {!! Form::text('title-type-2',null,['class'=>'form-control','autocomplete'=>'off','maxlength'=>'30']) !!}

                    </td>
                </tr>
                <tr class="layanan-type-2" >
                    <td>
                        <label>Content</label>
                    </td>
                    <td>
                        <div class="row" >
                            {!! Form::textarea('content-type-2',null,['class'=>'form-control ']) !!}
                        </div>
                    </td>
                </tr>
                <tr class="layanan-type-2" >
                    <td>
                        <label>Image *833x253px</label>
                    </td>
                    <td>
                        {!! Form::file('img-type-2',['autocomplete'=>'off']) !!}
                    </td>
                </tr>

                <!--End of Layanan Type 2-->
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-sm" >Save</button>
                        <a id="btn-cancel-new-layanan" class="btn btn-danger btn-sm" >Cancel</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <div class="ln_solid"></div>
</div>

@section('scripts')
@parent
<script>
    (function ($) {
        $('#layanan_type').val([]);
        $('.layanan-type-1').hide();
        $('.layanan-type-2').hide();
        //select tipe layanan
        $('#layanan_type').change(function () {
            var img_url = $('#layanan_type option:selected').data('img');
            var type = $('#layanan_type option:selected').val();
            $('#layanan_type_preview').hide(0, null, function () {
                $('#layanan_type_preview').attr('src', img_url);
                $('#layanan_type_preview').fadeIn(250);
            });

            //hide all form
            $('.layanan-type-1').hide();
            $('.layanan-type-2').hide();

            //show & hide form
            $('.layanan-type-' + type).show();
        });

        //cek ukuran gambar
        $('#form-new-layanan input[name=img-bottom-type-1]').change(function () {
            var imginput = $(this);
            var fr = new FileReader;
            fr.onload = function () {
                var img = new Image;
                img.onload = function () {
                    if (img.width != 288 || img.height != 458) {
                        alert('Ukuran gambar tidak sesuai');
                        imginput.val(null);
                        img = null;
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });
        $('#form-new-layanan input[name=img-side-type-1]').change(function () {
            var imginput = $(this);
            var fr = new FileReader;
            fr.onload = function () {
                var img = new Image;
                img.onload = function () {
                    if (img.width != 495 || img.height != 168) {
                        alert('Ukuran gambar tidak sesuai');
                        imginput.val(null);
                        img = null;
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });
        $('#form-new-layanan input[name=img-type-2]').change(function () {
            var imginput = $(this);
            var fr = new FileReader;
            fr.onload = function () {
                var img = new Image;
                img.onload = function () {
                    if (img.width != 833 || img.height != 253) {
                        alert('Ukuran gambar tidak sesuai');
                        imginput.val(null);
                        img = null;
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });

        //submit form
        $('#form-new-layanan').ajaxForm({
            success: function (data) {
                closeFormNewLayanan();
                //tampilkan data ke tabel
                var lastrow = $('#table-layanan tbody tr:last-child');
                var rownum = parseInt(lastrow.children('td:first-child').html()) + 1;
                var ckaktif = "";
                if (data.aktif == 'Y') {
                    ckaktif = '<input type="checkbox" name="ck_aktif_' + data.id + '" checked="checked" class="ck_layanan" >';
                } else {
                    ckaktif = '<input type="checkbox" name="ck_aktif_' + data.id + '" class="ck_layanan"  >';
                }
                var newrow = '<td>' + rownum + '</td>\n\
            <td>' + data.title + '</td>\n\
            <td >' + ckaktif + '\n\
            </td>\n\
            <td>\n\
                <a title="Shift Up" class="btn-shift-up btn btn-success btn-sm" href="admin/pages/homepage/layanan-shift-up/' + data.id + '" ><i class="fa fa-angle-double-up" ></i></a>\n\
                <a title="Shift Down" class="btn-shift-down btn btn-warning btn-sm" href="admin/pages/homepage/layanan-shift-down/' + data.id + '" ><i class="fa fa-angle-double-down" ></i></a>\n\
            </td>\n\
            <td>\n\
                <a  title="Edit" class="btn-edit-layanan btn btn-primary btn-sm" href="admin/pages/homepage/edit-layanan/' + data.id + '" ><i class="fa fa-edit"></i></a>\n\
                <a title="Delete" class="btn-delete-layanan btn btn-danger btn-sm" href="admin/pages/homepage/delete-layanan/' + data.id + '" ><i class="fa fa-trash-o"></i></a>\n\
            </td>';

                lastrow.after(newrow);
            }
        });

        //cancel layanan
        $('#btn-cancel-new-layanan').click(function () {
            closeFormNewLayanan();
        });
        function closeFormNewLayanan() {
            $('#form-new-layanan input[type=text]').val('');
            $('#form-new-layanan textarea').val('');
            $('#form-new-layanan select').val([]);
            $('#form-new-layanan input[type=file]').val(null);
            $('#form-new-layanan img').attr('src', '');

            $('#form-new-layanan').slideUp(250);


        }

    })(jQuery);
</script>
@stop