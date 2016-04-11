<section id="layout">
    <h2 class="page-header"><a href="admin/pages/product#setting">Product Setting</a></h2>
    <form name="form-update-setting-harga" method="POST" action="admin/pages/product/update-setting-harga" >
        <table class="table table-bordered table-condensed" >
            <tbody>
                <tr>
                    <td class="col-sm-3 col-md-3 col-lg-3" >Tampilkan Harga</td>
                    <td>
                        <select name="tampilkan_harga" class="form-control" >
                            <option value="Y" {{$setting_harga == 'Y' ? 'selected':''}} >Tampilkan</option>
                            <option value="N" {{$setting_harga == 'N' ? 'selected':''}} >Sembunyikan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="" >Tampilkan Product Terbaru</td>
                    <td>
                        <select name="show_new_product" class="form-control" >
                            <option value="Y" {{$setting_new_produk == 'Y' ? 'selected':''}} >Tampilkan</option>
                            <option value="N" {{$setting_new_produk == 'N' ? 'selected':''}} >Sembunyikan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="" >Product Terbaru Title</td>
                    <td>
                        <input type="text" name="product_new_text" class="form-control" value="{{$product_new_text}}" />
                    </td>
                </tr>
                <tr>
                    <td class="" >Jumlah Product Terbaru</td>
                    <td>
                        <div class="row" >
                            <div class="col-sm-2 col-md-2 col-lg-2" >
                                <input type="text" name="new_product_num" value="{{$setting_new_produk_num}}" class="text-right form-control" />
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="" >Tampilkan Product Sejenis</td>
                    <td>
                        <select name="show_product_sejenis" class="form-control" >
                            <option value="Y" {{$setting_produk_sejenis == 'Y' ? 'selected':''}} >Tampilkan</option>
                            <option value="N" {{$setting_produk_sejenis == 'N' ? 'selected':''}} >Sembunyikan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td class="" >Product Sejenis Title</td>
                    <td>
                        <input type="text" name="product_related_text" class="form-control"  value="{{$product_related_text}}" />
                    </td>
                </tr>
                <tr>
                    <td class="" >Jumlah Product Sejenis</td>
                    <td>
                        <div class="row" >
                            <div class="col-sm-2 col-md-2 col-lg-2" >
                                <input type="text" name="related_product_num" value="{{$setting_produk_sejenis_num}}" class="text-right form-control" />
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td  ></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-sm"  >Save</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</section>


@section('scripts')
@parent
<script>
(function ($) {
    
    //submit form form-update-setting-harga
    $('form[name=form-update-setting-harga]').ajaxForm({
        success:function(){
            alert('Data telah disimpan');
        }
    });

})(jQuery);
</script>
@append