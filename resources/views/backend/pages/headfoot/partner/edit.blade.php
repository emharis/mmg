<form  method="POST" action="admin/pages/headfoot/update-partner" name="form-footer-update-partner" id="form-footer-update-partner" enctype="multipart/form-data" >
    {!! Form::hidden('id',$partner->id) !!}
    <table class="table table-bordered table-condensed" >
        <tbody>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="edit_partner_nama" class="form-control" autocomplete="off" value="{{$partner->nama}}" required />
                </td>
                <td rowspan="4" class="col-md-4 col-sm-4 col-lg-4" >
                    <img id="edit_partner_img_prev" class="col-sm-12 col-md-12 col-lg-12" src="{{$partner->imgpath . '/' . $partner->img}}" />
                </td>
            </tr>
            <tr>
                <td>Logo </td>
                <td>
                    <input type="file" name="edit_partner_img"  />
                </td>
            </tr>
            <tr>
                <td colspan="2" >*maxwidth = 195px; maxheight:75px</td>
            </tr>
            <tr>
                <td>Link</td>
                <td>
                    <input type="text" name="edit_partner_link" class="form-control" autocomplete="off" placeholder="Tanpa http://" value="{{$partner->link}}"  />
                </td>
            </tr>
            <tr>
                <td>Aktif</td>
                <td>
                    {!! Form::select('edit_partner_aktif',['Y'=>'Aktif','N'=>'Not Aktif'],$partner->aktif,['class'=>'form-control ']) !!}
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2" >
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    <a class="btn-cancel-add-partner btn btn-warning btn-sm" data-dismiss="modal">Cancel</a>
                </td>
            </tr>
        </tbody>
    </table>
</form>

<script>
    (function ($) {
        //simpan perubahan
        $('#form-footer-update-partner').ajaxForm({
            success: function (data) {
                data = JSON.parse(data);
//                alert('Data telah disimpan');
                //update data yang ada di table
                var row = $('#partner_row_' + data.id);
                var first_row = row.children('td:first-child');
                //edit nama di row
                first_row.html(data.nama);
                //edit Image view di row
                first_row.next().children('a').attr('href', data.imgpath + "/" + data.img);
                //edit link di row
                first_row.next().next().html('<a href="http://' + data.link + '" target="_blank" >' + data.link + '</a>');
                //edit aktif
                if (data.aktif == 'Y') {
                    first_row.next().next().next().html('Aktif');
                } else {
                    first_row.next().next().next().html('Not Aktif');
                }
                //close modal
                $('#modal-partner').modal('hide');
            }
        });

        //tampilkan image
        $('input[name=edit_partner_img]').change(function () {
            var id = $(this).data('id');
            var fr = new FileReader;
            var fileUpload = this;
            fr.onload = function () {
                var img = new Image;
                var ukuransesuai = false;
                img.onload = function () {
                    //cek ukuran
                    if (img.width <= 195 && img.height <= 75) {
                        ukuransesuai = true;
                    }

                    if (ukuransesuai) {
                        //tampilkan gambar
                        if (fileUpload.files && fileUpload.files[0]) {
                            fr.onload = function (e) {
                                $('#edit_partner_img_prev').attr('src', e.target.result);
                            }
                            fr.readAsDataURL(fileUpload.files[0]);
                        }
                    } else {
                        alert('Ukuran gambar tidak sesuai');
                        //clear input
                        $('input[name=edit_partner_img]').val(null);
                        //clear preview
                        $('#edit_partner_img_prev').attr('src', null);
                    }
                    //}
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });
    })(jQuery);
</script>