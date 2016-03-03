<div id="form-edit" >
    <form method="POST" name="form-edit-slider" id="form-new-slider" action="admin/pages/homepage/update-slider" enctype="multipart/form-data" >
        {!! Form::hidden('slider_id',$data->id) !!}
        <table class="table table-bordered table-condensed" style="background-color: #e8e9ea;" >
            <tbody>
                <tr>
                    <td class="col-md-2">
                        <label>Type</label>
                    </td>
                    <td>
                        <select id="slider_type_edit" name="slider_type" class="form-control">
                            <option {{$data->type == 1 ? 'selected':''}}  value="1" data-img="backend/img/slider_type/type_1.jpg" >Type 1</option>
                            <option  {{$data->type == 2 ? 'selected':''}} value="2" data-img="backend/img/slider_type/type_2.jpg" >Type 2</option>
                            <option {{$data->type == 3 ? 'selected':''}} value="3" data-img="backend/img/slider_type/type_3.jpg" >Type 3</option>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <img id="slider_type_preview_edit" class="img-responsive" src="backend/img/slider_type/type_1.jpg" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Image *1600x595</label>
                    </td>
                    <td>
                        {!! Form::file('img',['autocomplete'=>'off']) !!}
                    </td>
                </tr>
                <!--Slider Type 1-->
                
                <tr class="slider-type-1" >
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('title-type-1',$data->title,['class'=>'form-control ','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-title-type-1',$data->title_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="slider-type-1" >
                    <td>
                        <label>Second line title</label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('second-title-type-1',$data->second_title,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-second-title-type-1',$data->second_title_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                <tr class="slider-type-1" >
                    <td>
                        <label>Subtitle</label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('subtitle-type-1',$data->subtitle,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-subtitle-type-1',$data->subtitle_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                
                <!--End of Slider Type 1-->

                <!--Slider Type 2-->
                
                <tr class="slider-type-2" >
                    <td>
                        <label>Subtitle</label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('subtitle-type-2',$data->subtitle,['class'=>'form-control ','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-subtitle-type-2',$data->subtitle_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="slider-type-2" >
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('title-type-2',$data->title,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-title-type-2',$data->title_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                <tr class="slider-type-2" >
                    <td>
                        <label>Second line title</label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('second-title-type-2',$data->second_title,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-second-title-type-2',$data->second_title_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                
                <!--End of Slider Type 2-->

                <!--Slider Type 3-->
                
                <tr class="slider-type-3" >
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('title-type-3',$data->title,['class'=>'form-control ','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-title-type-3',$data->title_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="slider-type-3" >
                    <td>
                        <label>Second line title</label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('second-title-type-3',$data->second_title,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-second-title-type-3',$data->second_title_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>
                <tr class="slider-type-3" >
                    <td>
                        <label>List item</label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('list-item-1-type-3',$data->list_item_1,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-list-item-1-type-3',$data->list_item_1_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

                                </div>
                            </div>
                        </div>                        
                    </td>
                </tr>
                <tr class="slider-type-3" >
                    <td>
                        <label></label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('list-item-2-type-3',$data->list_item_2,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-list-item-2-type-3',$data->list_item_2_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

                                </div>
                            </div>
                        </div>                        
                    </td>
                </tr>
                <tr class="slider-type-3" >
                    <td>
                        <label></label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('list-item-3-type-3',$data->list_item_3,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-list-item-3-type-3',$data->list_item_3_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

                                </div>
                            </div>
                        </div>                        
                    </td>
                </tr>
                <tr class="slider-type-3" >
                    <td>
                        <label></label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('list-item-4-type-3',$data->list_item_4,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-list-item-4-type-3',$data->list_item_4_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

                                </div>
                            </div>
                        </div>                        
                    </td>
                </tr>
                <tr class="slider-type-3" >
                    <td>
                        <label></label>
                    </td>
                    <td>
                        <div class="row" >
                            <div class="col-md-6 col-sm-6 col-lg-6" >
                                {!! Form::text('list-item-5-type-3',$data->list_item_5,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-list-item-5-type-3',$data->list_item_5_color,['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

                                </div>
                            </div>
                        </div>                        
                    </td>
                </tr>
                
                <!--End of Slider Type 3-->

                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-sm" >Save</button>
                        <a id="btn-cancel-new" class="btn btn-danger btn-sm" data-dismiss="modal" >Cancel</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <div class="ln_solid"></div>
</div>

<script>
    (function ($) {
        //pilih image slider type
        $('#slider_type_edit').change(function () {
            showFormSlider();
        });
        function showFormSlider() {
            var img_url = $('#slider_type_edit option:selected').data('img');
            var val = $('#slider_type_edit').val();
            //ganti gambar preview
            $('#slider_type_preview_edit').fadeOut(200, null, function () {
                $('#slider_type_preview_edit').attr('src', img_url);
                $('#slider_type_preview_edit').fadeIn(250);
            });
            //ganti form
            $('#form-edit .slider-type-1,.slider-type-2,.slider-type-3').hide();
            $('#form-edit .slider-type-' + val).fadeIn(250);
        }
        showFormSlider();

        //color picker with addon
        $("#form-edit .my-colorpicker2").colorpicker();
        
        //check image size
        $('#form-edit input[name=img]').change(function () {
            var fr = new FileReader;
            fr.onload = function () {
                var img = new Image;
                img.onload = function () {
                    if (img.width < 1600 || img.height < 565) {
                        alert('Ukuran gambar tidak sesuai');
                        $('#form-edit input[name=img]').val(null);
                        img = null;
                    }
                };
                img.src = fr.result;
            };
            fr.readAsDataURL(this.files[0]);
        });
        
        //        initialize jquery form
        $('#form-edit-slider').ajaxForm({
            success: function (data) {
                //bersihkan form
                $('#form-edit-slider input[type=text]').each(function () {
                    $(this).val('');
                });
                $('#form-edit-slider select').val([]);
                //clear img search
                $('#slider_type_preview_edit').attr('src', '');
                
                //reload saja
                location.reload();
            }
        });
        
        
    })(jQuery);
</script>