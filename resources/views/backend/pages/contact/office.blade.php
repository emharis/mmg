@extends('backend.layouts.master')

@section('styles')
<!-- bootstrap wysihtml5 - text editor -->
<link rel="stylesheet" href="backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<style>
    .modal-dialog{
        width: 60%;
        height: 75%;
    }
</style>
@stop

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Contact 
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li ><a href="admin/pages/contact" >Contact Setting</a></li>
            <li class="active"  ><a href="#tab_2" data-toggle="tab" >Office</a></li>

        </ul>
        <div class="tab-content">            
            <div class="tab-pane active" id="tab_2">
                <section id="layout">
                    <h2 class="page-header"><a href="">Data Office</a></h2>

                    <a class="btn btn-primary btn-sm" id="btn-add-office" ><i class="fa fa-plus" ></i> Add Office</a>
                    <div class="clearfix" ></div>
                    <br/>

                    <form name="form-new-office" method="POST" action="admin/pages/contact/office/new-office" class="hide">
                        <table class="table table-bordered table-condensed" >
                            <tbody>
                                <tr>
                                    <td class="col-sm-2 col-md-2 col-lg-2">Nama Cabang</td>
                                    <td>
                                        <input autocomplete="off" type="text" class="form-control" name="nama_cabang" required >
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>
                                        <input autocomplete="off" type="text" class="form-control" name="alamat" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td>
                                        <input autocomplete="off" type="text" class="form-control" name="phone" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fax</td>
                                    <td>
                                        <input autocomplete="off" type="text" class="form-control" name="fax" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>
                                        <input autocomplete="off" type="text" class="form-control" name="email" >
                                    </td>
                                </tr>
                                <tr>
                                    <td>Show Map</td>
                                    <td>
                                        <select class="form-control" name="show_map" >
                                            <option value="N" >No</option>
                                            <option value="Y" >Yes</option>
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
                                                <input name="map_lat" class="form-control" autocomplete="OFF" placeholder="Lattitude" />
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-6" >
                                                <input name="map_long" class="form-control" autocomplete="OFF" placeholder="Longitude" />
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <button type="submit" class="btn btn-primary btn-sm" >Save</button>
                                        <a id="btn-cancel-new-office" class="btn btn-danger btn-sm" >Cancel</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>

                    <table class="table table-bordered table-condensed" >
                        <thead>
                            <tr>
                                <th>Nama Cabang</th>
                                <th>Alamat</th>
                                <th>Phone</th>
                                <th>Fax</th>
                                <th>Email</th>
                                <th class="col-sm-1 col-md-1 col-lg-1 " >Order</th>
                                <th class="col-sm-1 col-md-1 col-lg-1" ></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $dt)
                            <tr>
                                <td>{{$dt->nama_cabang}}</td>
                                <td>{{$dt->alamat}}</td>
                                <td>{{$dt->phone}}</td>
                                <td>{{$dt->fax}}</td>
                                <td>{{$dt->email}}</td>
                                <td class="text-center" >
                                    <a class="btn btn-success btn-xs" href="admin/pages/contact/office/shift-up-office/{{$dt->id}}" ><i class="fa fa-angle-double-up" ></i></a>
                                    <a class="btn btn-warning btn-xs" href="admin/pages/contact/office/shift-down-office/{{$dt->id}}" ><i class="fa fa-angle-double-down" ></i></a>
                                </td>
                                <td class="text-center" >
                                    <a class="btn btn-primary btn-xs" href="admin/pages/contact/office/edit-office/{{$dt->id}}" ><i class="fa fa-edit" ></i></a>
                                    <a class="btn btn-danger btn-xs" ><i class="fa fa-trash" ></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </section>
            </div>
        </div><!-- /.tab-content -->
    </div>


    <div class="modal" id="modal-contact" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Edit Career</h4>
                </div>
                <div class="modal-body"></div>
            </div> 
        </div> 
    </div>

</section><!-- /.content -->


@stop

@section('scripts')
<script src="backend/plugins/jqueryform/jquery.form.js" type="text/javascript"></script>

<script>
(function ($) {
    
    //clear input
    function clearinput(){
        $('form[name=form-new-office] input[type=text]').val(null);
    }
//    $('#btn-cancel-new-office').click(function(){
//        clearinput();
//    });
    
    //tampilkan form add office
    $('#btn-add-office').click(function(){
        $('form[name=form-new-office]').hide();
        $('form[name=form-new-office]').removeClass('hide');
        $('form[name=form-new-office]').slideDown(250,null,function(){
            //fokuskan
            $('input[name=nama_cabang]').focus();
        });
    });
    
    //cancel add new & close form
    $('#btn-cancel-new-office').click(function(){
        $('form[name=form-new-office]').slideUp(250,null,function(){
            clearinput();
        });
    });
    
    //tampilkan map input
    $('select[name=show_map]').change(function(){
        var val = $(this).val();
        if(val == 'Y'){
            $('#map-input').hide();
            $('#map-input').removeClass('hide');
            $('#map-input').slideDown(250,null,function(){
                
            });
        }else{
            $('#map-input').slideUp(250,null,function(){
                $('input[name=map_lat]').val(null);
                $('input[name=map_long]').val(null);
            });
        }
    });

})(jQuery);
</script>
@stop
