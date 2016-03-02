<a class="btn btn-primary btn-sm" id="btn-new" ><i class="fa fa-plus" ></i> Add</a>

<div class="clearfix" ></div>
<br/>

<div class="hide" id="form-new" >
    <form method="POST" name="form-new-slider" id="form-new-slider" action="admin/pages/homepage/new-slider" enctype="multipart/form-data" >
        <table class="table table-bordered table-condensed" style="background-color: #e8e9ea;" >
            <tbody>
                <tr>
                    <td class="col-md-2">
                        <label>Type</label>
                    </td>
                    <td>
                        <select id="slider_type" name="slider_type" class="form-control">
                            <option value="1" data-img="backend/img/slider_type/type_1.jpg" >Type 1</option>
                            <option value="2" data-img="backend/img/slider_type/type_2.jpg" >Type 2</option>
                            <option value="3" data-img="backend/img/slider_type/type_3.jpg" >Type 3</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>

                    </td>
                    <td>
                        <img id="slider_type_preview" class="img-responsive" src="backend/img/slider_type/type_1.jpg" />
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Image *1600x595</label>
                    </td>
                    <td>
                        {!! Form::file('img',['required','autocomplete'=>'off']) !!}
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
                                {!! Form::text('title-type-1',null,['class'=>'form-control ','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-title-type-1','#F95C06',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

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
                                {!! Form::text('second-title-type-1',null,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-second-title-type-1','#FFFF00',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}
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
                                {!! Form::text('subtitle-type-1',null,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-subtitle-type-1','#fff',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

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
                                {!! Form::text('subtitle-type-2',null,['class'=>'form-control ','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-subtitle-type-2','#fff',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

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
                                {!! Form::text('title-type-2',null,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-title-type-2','#fff',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}
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
                                {!! Form::text('second-title-type-2',null,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-second-title-type-2','#fff',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

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
                                {!! Form::text('title-type-3',null,['class'=>'form-control ','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-title-type-3','#F95C06',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

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
                                {!! Form::text('second-title-type-3',null,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-second-title-type-3','#013E54',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}
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
                                {!! Form::text('list-item-1-type-3',null,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-list-item-1-type-3','#fff',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

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
                                {!! Form::text('list-item-2-type-3',null,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-list-item-2-type-3','#fff',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

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
                                {!! Form::text('list-item-3-type-3',null,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-list-item-3-type-3','#fff',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

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
                                {!! Form::text('list-item-4-type-3',null,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-list-item-4-type-3','#fff',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

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
                                {!! Form::text('list-item-5-type-3',null,['class'=>'form-control','autocomplete'=>'off']) !!}
                            </div>
                            <div class="col-md-3 col-sm-3 col-lg-3 my-colorpicker2" >
                                <div class="input-group ">
                                    <div class="input-group-addon">
                                        <i></i>
                                    </div>
                                    {!! Form::text('color-list-item-5-type-3','#fff',['class'=>'form-control ','placeholder'=>'Color','autocomplete'=>'off']) !!}

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
                        <a id="btn-cancel-new" class="btn btn-danger btn-sm" >Cancel</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

    <div class="ln_solid"></div>
</div>


<table class="table table-bordered table-condensed" id="table-slider" >
    <thead>
        <tr>
            <th class="col-md-1 col-sm-1 col-lg-1">No</th>
            <th>Nama</th>
            <th class="col-md-1 col-sm-1 col-lg-1">View</th>
            <th class="col-md-1 col-sm-1 col-lg-1">Aktif</th>
            <th class="col-md-1 col-sm-1 col-lg-1" >Order</th>
            <th class="col-md-1 col-sm-1 col-lg-1" ></th>
        </tr>
    </thead>
    <tbody>
        <?php $idx = 1; ?>
        @foreach($imgsliders as $dt)
        <tr>
            <td>{{$idx++}}</td>
            <td>{{$dt->img}}</td>
            <td>
                <?php $img = App\Helpers\Helper::appsetting('homepage_slider_img_path') . '/' . $dt->img; ?>
                <a class="single_image" href="{{$img}}">View</a>
            </td>
            <td >
                <?php $chk = '<input type="checkbox" name="ck_aktif_"' . $dt->id . ' class="ck_img_slider" ' . ($dt->aktif == 'Y' ? 'checked="checked"' : '') . ' >'; ?>
                {!!$chk!!}
            </td>
            <td>
                <a title="Shift Up" class="btn-shift-up btn btn-success btn-sm" href="admin/pages/homepage/slider-shift-up/{{$dt->id}}" ><i class="fa fa-angle-double-up" ></i></a>
                <a title="Shift Down" class="btn-shift-down btn btn-warning btn-sm" href="admin/pages/homepage/slider-shift-down/{{$dt->id}}" ><i class="fa fa-angle-double-down" ></i></a>
            </td>
            <td>
                <a title="Edit" class="btn-edit-slider btn btn-primary btn-sm" href="admin/pages/homepage/edit-slider/{{$dt->id}}" ><i class="fa fa-edit"></i></a>
                <a title="Delete" class="btn-delete-slider btn btn-danger btn-sm" href="admin/pages/homepage/delete-slider/{{$dt->id}}" ><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
