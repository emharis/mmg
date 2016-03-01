<a class="btn btn-primary btn-sm" id="btn-new" ><i class="fa fa-plus" ></i> Add</a>

<div class="clearfix" ></div>
<br/>

<div class="hide" id="form-new" >
    <form method="POST" name="form-new-slider" action="admin/pages/homepage/new-slider" enctype="multipart/form-data" >
        <table class="table table-bordered table-condensed" >
            <tbody>
                <tr>
                    <td>
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
                        {!! Form::file('img') !!}
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Title</label>
                    </td>
                    <td>
                        {!! Form::text('title',null,['class'=>'form-control']) !!}
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Subtitle</label>
                    </td>
                    <td>
                        {!! Form::text('subtitle',null,['class'=>'form-control']) !!}
                    </td>
                </tr>
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


<table class="table table-bordered table-condensed" >
    <thead>
        <tr>
            <th class="col-md-1 col-sm-1 col-lg-1">No</th>
            <th>Nama</th>
            <th class="col-md-1 col-sm-1 col-lg-1">View</th>
            <th class="col-md-1 col-sm-1 col-lg-1">Aktif</th>
            <th class="col-md-1 col-sm-1 col-lg-1" >Order</th>
        </tr>
    </thead>
    <tbody>
        @foreach($imgsliders as $dt)
        <tr>
            <td></td>
            <td>{{$dt->url}}</td>
            <td>
                {{$dt->aktif}}
            </td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>