<a class="btn btn-primary btn-sm" id="btn-new" ><i class="fa fa-plus" ></i> Add Image Slider</a>

<div class="clearfix" ></div>
<br/>

@include('backend.pages.homepage.imageslider.newslider')

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
                <a  title="Edit" class="btn-edit-slider btn btn-primary btn-sm" href="admin/pages/homepage/edit-slider/{{$dt->id}}" ><i class="fa fa-edit"></i></a>
                <a title="Delete" class="btn-delete-slider btn btn-danger btn-sm" href="admin/pages/homepage/delete-slider/{{$dt->id}}" ><i class="fa fa-trash-o"></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="modal modal-slider" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Image Slider</h4>
            </div>
            <div class="modal-body">
                
            </div>
<!--            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>-->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->