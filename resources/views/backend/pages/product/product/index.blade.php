<!--DATA PRODUCT-->
<a class="btn btn-primary btn-sm" id="btn-add-produk" ><i class="fa fa-plus" ></i> Add Product</a>
<div class="clearfix" ></div>
<br/>

<form name="form-new-produk" id="form-new-produk" action="admin/pages/product/new-produk" method="POST" class="hide">
    <table class="table table-bordered table-condensed " id="table-new-produk" >
        <tbody>
            <tr>
                <td>Nama</td>
                <td>
                    <input required type="text" name="produk_nama" class="form-control" autocomplete="off" />    
                </td>
                <td class="col-sm-3 col-md-3 col-lg-3" rowspan="4" >
                    <img id="produk-img-prev" class="col-sm-12 col-md-12 col-lg-12" src="backend/img/product_page/main-item.jpg"  />
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    {!! Form::select('kategori',[],null,['class'=>'form-control','required']) !!}
                </td>
            </tr>
            <tr>
                <td>Image</td>
                <td>
                    <input type="file" name="produk_img"  />    
                </td>
            </tr>
            <tr>
                <td>Sub Description</td>
                <td>
                    <input type="text" name="produk_subdesc" maxlength="100" class="form-control"/>
                </td>
            </tr>
            <tr>
                <td>Description</td>
                <td colspan="2">
                    <textarea name="produk_desc" class="form-control" rows="5" ></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-sm btn-primary" >Save</button>
                    <a class="btn btn-danger btn-sm" id="btn-cancel-new-produk" >Cancel</a>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>    
</form>

<table id="table-produk" class="table table-bordered table-condensed table-hover" >
    <thead>
        <tr>
            <th>Nama</th>
            <th>Kategori</th>
            <th class="col-sm-1 col-md-1 col-lg-1">Aktif</th>
            <th class="col-sm-1 col-md-1 col-lg-1" ></th>
        </tr>
    </thead>
    <tbody>
        @foreach($produk as $dt)
        <tr>
            <td>
                {{$dt->nama}}
            </td>
            <td>
                {{$dt->kategori}}
            </td>
            <td>
                @if($dt->aktif == 'Y')
                <i class="fa fa-check" ></i>
                @else
                <i class="fa fa-close" ></i>
                @endif
            </td>
            <td>
                <a class="btn btn-xs btn-primary btn-edit-produk" >&nbsp;<i class="fa fa-edit" ></i>&nbsp;</a>
                <a class="btn btn-xs btn-danger btn-delete-produk" >&nbsp;<i class="fa fa-trash" ></i>&nbsp;</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal" id="modal-produk" data-keyboard="false" data-backdrop="static">
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

        $('#btn-add-produk').click(function () {
            //set select kategori
            $.get('admin/pages/product/kategori', null, function (data) {
                //clear input
                clearInputProduk();
                var dataObj = JSON.parse(data);
                //remove data existed in select
                $('select[name=kategori]').empty();
                //re add data
                $.each(dataObj, function (i, item) {
                    //add item to select option
                    var select = $('select[name=kategori]');
                    select.append($('<option>').attr('value', item.id).text(item.nama));
                });

                //tampilkan form new
                $('#form-new-produk').hide();
                $('#form-new-produk').removeClass('hide');
                $('#form-new-produk').slideDown(250, null, function () {
                    //fokus ke input
                    $('input[name=produk_nama]').focus();
                });
            });
        });

        //cancel add new prdouk
        $('#btn-cancel-new-produk').click(function () {
            $('#form-new-produk').slideUp(250, null, function () {
                clearInputProduk();
            });
        });
        function clearInputProduk() {
            $('#form-new-produk input[type=text]').val(null);
            $('#form-new-produk input[type=file]').val(null);
            $('#form-new-produk select').val([]);
            $('#form-new-produk #produk-img-prev').attr('src', 'backend/img/product_page/main-item.jpg');;
        }

        //tampilkan image
        $('input[name=produk_img]').change(function () {
            var width = 370;
            var height = 426;
            var inputfile = $(this);
            var imgprev = $('#produk-img-prev');

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
//                            //upload image ke database
//                            $('form[name=form-gallery-' + id + ']').submit();
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
@append