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
                        <a id="btn-cancel-new" class="btn btn-danger btn-sm" >Cancel</a>
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
    })(jQuery);
</script>
@stop