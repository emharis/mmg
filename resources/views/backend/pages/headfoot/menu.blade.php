<section id="layout">
    <h2 class="page-header"><a href="admin/pages/headfoot#menu">Menu</a></h2>
    <table class="table table-bordered table-condensed" >
        <thead>
            <tr>
                <th class="col-sm-4 col-md-4 col-lg-4"  >Nama</th>
                <th class="col-sm-2 col-md-2 col-lg-2" >Posisi</th>
                <th class="col-sm-1 col-md-1 col-lg-1"  >Aktif</th>
                <th>Order</th>
            </tr>
        </thead>
        <tbody>
            @foreach($menu as $dt)
            <tr>
                <td>
                    <div class="input-group">
                        <input type="text" name="input_menu_{{$dt->id}}" class="form-control" autocomplete="off" value="{{$dt->nama}}" />
                        <div class="input-group-btn">
                            <a class="btn btn-primary btn-save-menu" data-id="{{$dt->id}}" >Save</a>
                        </div>  
                    </div>                    
                </td>
                <td>
                    {!! Form::select('select_menu_'.$dt->id,['TP'=>'TOP','BT'=>'BOTTOM','TB'=>'BOTH'],$dt->position,['class'=>'form-control select-menu-posisi','data-id'=>$dt->id]) !!}
                </td>
                <td>
                    <input type="checkbox" class="flat-red ck-menu" name="ck-menu-aktif-{{$dt->id}}" value="{{$dt->id}}" {{$dt->aktif == 'Y'?'checked':''}}>
                </td>
                <td>
                    <a class="btn btn-success btn-xs btn-shift-menu-up" data-id="{{$dt->id}}" href="admin/pages/headfoot/shift-up-menu/{{$dt->id}}" ><i class="fa fa-angle-double-up" ></i></a>
                    <a class="btn btn-warning btn-xs btn-shift-menu-down " data-id="{{$dt->id}}" href="admin/pages/headfoot/shift-down-menu/{{$dt->id}}" ><i class="fa fa-angle-double-down" ></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@section('scripts')
<script>
    (function ($) {
        //update menu value/nama
        $('.btn-save-menu').click(function () {
            var id = $(this).data('id');
            var value = $('input[name=input_menu_' + id + ']').val();
            $.post('admin/pages/headfoot/update-menu-title', {
                'id': id,
                'value': value
            }, function () {
                alert('Data telah disimpan');
            });
            return false;
        });

        //upate posisi menu
        $('.select-menu-posisi').change(function () {
            var id = $(this).data('id');
            var value = $(this).val();
            $.post('admin/pages/headfoot/update-menu-position', {
                'id': id,
                'value': value
            }, function () {
//                alert('Data telah disimpan');
            });
            return false;
        });

        //shift up menu
        $('.btn-shift-menu-up').click(function () {
            var url = $(this).attr('href');
            var row = $(this).closest('tr');
            var row_upper = row.prev();

            $.get(url, null, function () {
                //shift row
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
        //shift down menu
        $('.btn-shift-menu-down').click(function () {
            var url = $(this).attr('href');
            var row = $(this).closest('tr');
            var row_lower = row.next();

            $.get(url, null, function () {
                //shift row
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
        //set on atau off aktif
        $('.ck-menu').on('ifChecked', function () {
            var id = $(this).val();
            //update social media aktifkan
            $.get('admin/pages/headfoot/update-aktif-menu/' + id + '/Y', null, function () {
//                alert('Data telah di aktifkan');
            });
        });
        $('.ck-menu').on('ifUnchecked', function () {
            var id = $(this).val();
            //update social media non aktifkan
            $.get('admin/pages/headfoot/update-aktif-menu/' + id + '/N', null, function () {
//                alert('Data telah di non-aktifkan');
            });
        });

    })(jQuery);
</script>
@append