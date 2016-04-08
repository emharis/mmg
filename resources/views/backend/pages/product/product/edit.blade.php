<form  name="form-edit-produk" id="form-edit-produk" action="admin/pages/product/update-product" method="POST" enctype="multipart/form-data" >
    {!! Form::hidden('product_id',$data->id) !!}
    <table class="table table-bordered table-condensed " id="table-new-produk" >
        <tbody>
            <tr>
                <td>Nama</td>
                <td>
                    <input required value="{{$data->nama}}" type="text" name="produk_edit_nama" class="form-control" autocomplete="off" />    
                </td>
                <td class="col-sm-3 col-md-3 col-lg-3" rowspan="5" >
                    <img id="produk-edit-img-prev" class="col-sm-12 col-md-12 col-lg-12" src="{{$data->imgpath . '/'.$data->img}}"  />
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    {!! Form::select('produk_edit_kategori',$slc_kategori,$data->kategori_id,['class'=>'form-control','required']) !!}
                </td>
            </tr>
            <tr>
                <td>Price</td>
                <td>
                    <input value="{{number_format($data->price,0,',','.')}}" type="text" name="produk_edit_price" class="form-control text-right" autocomplete="off" />    
                </td>
            </tr>
            <tr>
                <td>Image</td>
                <td>
                    <input type="file" name="produk_edit_img"  />    
                </td>
            </tr>
            <tr>
                <td>Sub Description</td>
                <td>
                    <input value="{{$data->sub_desc}}" type="text" name="produk_edit_subdesc" maxlength="100" class="form-control"/>
                </td>
            </tr>
            <tr>
                <td>Description</td>
                <td colspan="2">
                    <textarea name="produk_edit_desc" class="form-control" rows="5" >{{$data->desc}}</textarea>
                </td>
            </tr>
            <tr>
                <td>Aktif</td>
                <td colspan="2">
                    {!! Form::select('produk_edit_aktif',['Y'=>'Aktif','N'=>'Non Aktif'],$data->aktif,['class'=>'form-control']) !!}
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-sm btn-primary" >Save</button>
                    <a class="btn btn-danger btn-sm" id="btn-cancel-new-produk" data-dismiss="modal" >Cancel</a>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>    
</form>

<script>
    (function ($) {
        $('#form-edit-produk').ajaxForm({
            success: function (data) {
                //close form modal
                $('#modal-produk').modal('hide');
                data = JSON.parse(data);
                var rowdata = $('#table-produk tbody tr[data-id=' + data.id + ']');
                //rubah data
                rowdata.children('td:first').html(data.nama);
                rowdata.children('td:first').next().html(data.kategori);
                var aktif = '<i class="fa fa-check" ></i>';
                if(data.aktif == 'N') aktif = '<i class="fa fa-close" ></i>';
                rowdata.children('td:first').next().next().html(aktif);
            }
        });
        
        //cek ukuran gambar
        //tampilkan image
    $('input[name=produk_edit_img]').change(function () {
        var width = 370;
        var height = 426;
        var inputfile = $(this);
        var imgprev = $('#produk-edit-img-prev');
        //cek ukuran gambar
        var fr = new FileReader;
        var fileUpload = this;
        fr.onload = function () {
            var img = new Image;
            var ukuransesuai = false;
            img.onload = function () {
                if (img.width == width && img.height == height) {
                    ukuransesuai = true;
                }
                if (ukuransesuai) {
                    //tampilkan gambar
                    if (fileUpload.files && fileUpload.files[0]) {
                        fr.onload = function (e) {
                            imgprev.attr('src', e.target.result);
                        }
                        fr.readAsDataURL(fileUpload.files[0]);
                    }
                } else {
                    alert('Ukuran gambar tidak sesuai');
                    //bersihkan input file
                    inputfile.val(null);
                    //clear image preview
                    imgprev.attr('src', 'backend/img/product_page/main-item.jpg');
                }
            };
            img.src = fr.result;
        };
        fr.readAsDataURL(this.files[0]);
    });

    })(jQuery);
</script>