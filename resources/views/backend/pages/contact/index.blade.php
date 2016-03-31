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
            <li class="active"><a href="#tab_1" data-toggle="tab">Contact Setting</a></li>
            <li><a href="admin/pages/contact/office" >Office</a></li>

        </ul>
        <div class="tab-content">            
            <div class="tab-pane active" id="tab_1">
                <section id="layout">
                    <h2 class="page-header"><a href="">Email</a></h2>
                    <form role="form" method="POST" action="admin/pages/contact/update-email">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Utama</label>
                                <input autocomplete="off" value="{{$data->main_email}}" type="email" class="form-control" name="main_email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Forward</label>
                                <input autocomplete="off" value="{{$data->cc_email}}" type="email" class="form-control" name="cc_email"  placeholder="Enter email">
                                <br/>
                                <input autocomplete="off" value="{{$data->bcc_email}}" type="email" class="form-control" name="bcc_email"  placeholder="Enter email">
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
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


})(jQuery);
</script>
@stop
