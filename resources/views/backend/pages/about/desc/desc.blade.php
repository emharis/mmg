<section id="layout">
    <h2 class="page-header"><a href="admin/pages/headfoot#title">Title</a></h2>
    <form>
        <div class="input-group">
            <input type="text" name="input_menu_" class="form-control" autocomplete="off" value="{{$section_title}}" />
            <div class="input-group-btn">
                <a class="btn btn-primary btn-save-menu" data-id="" >Save</a>
            </div>  
        </div>   
    </form>
</section>

<section id="layout">
    <h2 class="page-header"><a href="admin/pages/headfoot#desc">Description</a></h2>

    <a class="btn btn-primary btn-sm" id="btn-add-description" ><i class="fa fa-plus" ></i> Add Description</a>

    <form name="form-new-description" method="POST" action="admin/pages/about/new-description" enctype="multipart/form-data" > 
        <div class="box-body">
            <div class="form-group">
                <label>Type</label>
                <select name="about_desc_type" class="form-control">
                    <option value="IL" data-img="backend/img/about_page/layout_img_left.jpg" >Image Left</option>
                    <option value="IR" data-img="backend/img/about_page/layout_about_desc_img_right.jpg" >Image Right</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputFile">Image</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">*470x266px</p>
            </div>
        </div><!-- /.box-body -->

    </form>

    <table class="table table-bordered table-condensed" >
        <thead>
            <tr>
                <th>Type</th>
                <th>Aktif</th>
                <th>Order</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($desc as $dt)
            <tr>
                <td>
                    @if($dt->type == 'IL')
                    Image Left
                    @elseif($dt->type == 'IR')
                    Image Right
                    @endif
                </td>
                <td>
                    @if($dt->aktif == 'Y')
                    <i class="fa fa-check" ></i>
                    @else
                    @endif
                </td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>


@section('scripts')
@parent
<script>
    (function ($) {
        //add new description
        $('#btn-add-description').click(function () {

        });
        
        //tampilkan image type
        $('select[name=about_desc_type]').change(function(){
            var img = $(this).data('img');
            alert(img);
        });
    })(jQuery);
</script>
@append