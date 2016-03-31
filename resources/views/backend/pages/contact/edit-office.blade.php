

<form name="form-edit-office" method="POST" action="admin/pages/contact/office/edit-office" class="hide">
    <table class="table table-bordered table-condensed" >
        <tbody>
            <tr>
                <td class="col-sm-2 col-md-2 col-lg-2">Nama Cabang</td>
                <td>
                    <input autocomplete="off" type="text" class="form-control" name="nama_cabang" value="{{$data->nama_cabang}}" required >
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>
                    <input autocomplete="off" type="text" class="form-control" name="alamat" value="{{$data->alamat}}" >
                </td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>
                    <input autocomplete="off" type="text" class="form-control" name="phone" value="{{$data->phone}}" >
                </td>
            </tr>
            <tr>
                <td>Fax</td>
                <td>
                    <input autocomplete="off" type="text" class="form-control" name="fax" value="{{$data->fax}}" >
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <input autocomplete="off" type="email" class="form-control" name="email" value="{{$data->email}}" >
                </td>
            </tr>
            <tr>
                <td>Show Map</td>
                <td>
                    <select class="form-control" name="show_map" >
                        <option value="N" {{$data->show_map == 'Y'?'selected':''}} >No</option>
                        <option value="Y" {{$data->show_map == 'Y'?'selected':''}} >Yes</option>
                    </select>
                </td>
            </tr>
            <tr id="map-input" class="hide" >
                <td>
                    Location Point
                </td>
                <td>
                    <div class="row" >
                        <div class="col-sm-6 col-md-6 col-lg-6" >
                            <input name="map_lat" class="form-control" autocomplete="OFF" placeholder="Lattitude" value="{{$data->lat}}" />
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6" >
                            <input name="map_long" class="form-control" autocomplete="OFF" placeholder="Longitude" value="{{$data->long}}" />
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" class="btn btn-primary btn-sm" >Save</button>
                    <a id="btn-cancel-edit-office" class="btn btn-danger btn-sm" >Cancel</a>
                </td>
            </tr>
        </tbody>
    </table>
</form>

<script>
    (function ($) {

//        //clear input
//        function clearinput() {
//            $('form[name=form-edit-office] input[type=text]').val(null);
//        }
//        $('#btn-cancel-edit-office').click(function () {
//            clearinput();
//        });

//        //tampilkan form add office
//        $('#btn-add-office').click(function () {
//            $('form[name=form-edit-office]').hide();
//            $('form[name=form-edit-office]').removeClass('hide');
//            $('form[name=form-edit-office]').slideDown(250, null, function () {
//
//            });
//        });

//        //cancel add new & close form
//        $('#btn-cancel-edit-office').click(function () {
//            $('form[name=form-edit-office]').slideUp(250, null, function () {
//                clearinput();
//            });
//        });

        //tampilkan map input
        $('select[name=show_map]').change(function () {
            var val = $(this).val();
            if (val == 'Y') {
                $('#map-input').hide();
                $('#map-input').removeClass('hide');
                $('#map-input').slideDown(250, null, function () {

                });
            } else {
                $('#map-input').slideUp(250, null, function () {
                    $('input[name=map_lat]').val(null);
                    $('input[name=map_long]').val(null);
                });
            }
        });

    })(jQuery);
</script>