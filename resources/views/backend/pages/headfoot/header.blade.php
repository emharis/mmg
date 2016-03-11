@section('styles')
@parent
<!-- iCheck for checkboxes and radio inputs -->
<link rel="stylesheet" href="backend/plugins/iCheck/all.css">
@stop

<h3>Social Media</h3>
<table class="table table-bordered table-condensed" >
    <thead>
        <tr>
            <th>Social Media</th>
            <th>Username</th>
            <th>Aktif</th>
            <th>Order</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sosmed as $dt)
        <tr>
            <td>{{$dt->name}}</td>
            <td>
                <input type="text" name="header_facebook" class="form-control" value="{{$dt->value}}" />
            </td>
            <td>

                <input type="checkbox" class="flat-red" checked>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@section('scripts')
<script>
    (function ($) {

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        });
    })(jQuery);
</script>
@stop