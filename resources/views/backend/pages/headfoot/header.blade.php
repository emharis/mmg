<section id="layout">
    <h2 class="page-header"><a href="admin/pages/headfoot#sosmed">Social Media</a></h2>
    <table class="table table-bordered table-condensed" >
        <thead>
            <tr>
                <th class="col-md-2 col-sm-2 col-lg-2">Social Media</th>
                <th>Username</th>
                <th>Aktif</th>
                <th class="col-md-12 col-sm-1 col-lg-1">Order</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sosmed as $dt)
            <tr>
                <td>{{$dt->name}}</td>
                <td>
                    <div class="input-group">
                        <input autocomplete="off" type="text" name="header_facebook" class="form-control" data-id="{{$dt->id}}" value="{{$dt->value}}" />
                        <div class="input-group-btn">
                            <a class="btn btn-primary btn-save-sosmed" >Save</a>
                        </div>  
                    </div>
                </td>
                <td>
                    <input type="checkbox" class="flat-red ck-sosmed" name="ck-aktif-{{$dt->id}}" value="{{$dt->id}}" {{$dt->aktif == 'Y'?'checked':''}} />
                </td>
                <td>
                    <a class="btn btn-success btn-xs btn-shift-up" data-id="{{$dt->id}}" href="admin/pages/headfoot/shift-up/{{$dt->id}}" ><i class="fa fa-angle-double-up" ></i></a>
                    <a class="btn btn-warning btn-xs btn-shift-down " data-id="{{$dt->id}}" href="admin/pages/headfoot/shift-down/{{$dt->id}}" ><i class="fa fa-angle-double-down" ></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

<section id="layout">
    <h2 class="page-header"><a href="admin/pages/headfoot#contact">Contact Info</a></h2>
    <table class="table table-bordered table-condensed" >
        <thead>
            <tr>
                <th class="col-sm-2 col-md-2 col-lg-2" >Type</th>
                <th>Value</th>
                <th>Aktif</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contact as $dt)
            <tr>
                <td>
                    {!! Form::select('contact_type_' . $dt->id,
                    ['TL'=>'Telp','ML'=>'Email','WA'=>'Whatsapp','BB'=>'BBM'],
                    $dt->type,['class'=>'form-control']) !!}
                </td>
                <td>
                    <div class="input-group">
                        <input type="text" name="contact_value_{{$dt->id}}" value="{{$dt->value}}" class="form-control"/>
                        <div class="input-group-btn">
                            <a class="btn btn-primary btn-save-contact" data-id="{{$dt->id}}" >Save</a>
                        </div>  
                    </div>
                </td>
                <td>
                    <input type="checkbox" class="flat-red ck-contact" name="ck-contact-aktif-{{$dt->id}}" value="{{$dt->id}}" {{$dt->aktif == 'Y'?'checked':''}}>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@section('scripts')
@parent

<script>
(function ($) {
    //set on atau off aktif
    $('.ck-sosmed').on('ifChecked', function () {
        var id = $(this).val();
        //update social media aktifkan
        $.get('admin/pages/headfoot/set-aktif/' + id + '/Y', null, function () {
//            alert('Data telah di aktifkan');
        });
    });
    $('.ck-sosmed').on('ifUnchecked', function () {
        var id = $(this).val();
        //update social media non aktifkan
        $.get('admin/pages/headfoot/set-aktif/' + id + '/N', null, function () {
//            alert('Data telah di aktifkan');
        });
    });

    //shift up order
    $('.btn-shift-up').click(function () {
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
    
    //shift down order
    $('.btn-shift-down').click(function () {
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

    //simpan data sosmed
    $('.btn-save-sosmed').click(function () {
        var input = $(this).closest('div').prev();
        $.get('admin/pages/headfoot/update-sosmed/' + input.data('id') + '/' + input.val(), null, function () {
            alert('Data telah disimpan.');
        });
        return false;
    });


    /**
     * CONTACT SECTION
     */
    $('.btn-save-contact').click(function () {
        var id = $(this).data('id');
        var input_value = $('input[name=contact_value_' + id + ']');
        var select_type = $('select[name=contact_type_' + id + ']');
        //save / update
        $.post('admin/pages/headfoot/update-contact',{
            'id' : id,
            'type':select_type.val(),
            'value':input_value.val()
        },function(){
            alert('Data telah disimpan.');
        });
        return false;
    });
    
    //set on atau off aktif contact
    $('.ck-contact').on('ifChecked', function () {
        var id = $(this).val();
        //update social media aktifkan
        $.get('admin/pages/headfoot/set-aktif-contact/' + id + '/Y', null, function () {
//            alert('Data telah di aktifkan');
        });
    });
    $('.ck-contact').on('ifUnchecked', function () {
        var id = $(this).val();
        //update social media non aktifkan
        $.get('admin/pages/headfoot/set-aktif-contact/' + id + '/N', null, function () {
//            alert('Data telah di aktifkan');
        });
    });
    /**
     * END OF CONTACT SECTION
     */

})(jQuery);
</script>
@append