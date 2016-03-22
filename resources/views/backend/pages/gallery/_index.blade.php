@extends ('backend.layouts.master')

@section('styles')
@parent

@append

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Gallery
    </h1>
</section>

<!-- Main content -->
<section class="content">
    <div class="box box-solid" >
        <div class="box-body" >
            <a class="btn btn-primary btn-sm" id="btn-add-gallery" ><i class="fa fa-plus" ></i> Add Item</a>
            <div class="clearfix" ></div>
            <br/>

            <form name="form-new-gallery" id="form-new-gallery" class="hide" method="POST" action="admin/pages/gallery/new-gallery" enctype="multipart/form-data" >
                <table id="table-new-gallery" class="table table-bordered table-condensed" >
                    <tbody>
                        <tr>
                            <td>Kategori</td>
                            <td>
                                <div class="input-group" >
                                    {!! Form::select('gallery_kategori',$kategori,null,['class'=>'form-control','required']) !!}
                                    <div class="input-group-btn" >
                                        <a class="btn btn-primary " id="btn-add-kategori" ><i class="fa fa-plus" ></i> Add Kategori</a>
                                    </div>
                                </div>
                            </td>
                            <td rowspan="5" class="col-sm-4 col-md-4 col-lg-4" >
                                <img id="new-img-prev" class="img-responsive" src="backend/img/gallery/1.jpg" />
                            </td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td >
                                <input type="file" name="gallery_img" required />
                                <i>* Rasio 370x220</i>
                            </td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>
                                <input type="text" name="gallery_title" maxlength="30" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>Subtitle</td>
                            <td>
                                <input type="text" name="gallery_subtitle" maxlength="30" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <button type="submit" class="btn btn-primary btn-sm" >Save</button>
                                <a class="btn btn-danger btn-sm" id="btn-cancel-add-gallery" >Cancel</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>

            <table class="table table-bordered table-condensed" >
                <thead>
                    <tr>
                        <th colspan="3" >Filter :</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-sm-1 col-md-1 col-lg-1" >Kategori </td>
                        <td class="col-sm-4 col-md-4 col-lg-4" >
                            {!! Form::select('kategori_filter',[],null,['class'=>'form-control']) !!}
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm" ><i class="fa fa-filter" id="btn-filter-gallery" ></i> Filter</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row" >

        <div class="col-sm-2 col-md-2 col-lg-2" >    
            <div class="box box-solid " >
                <div class="box-header" ></div>
                <div class="box-body" ></div>
                <div class="box-footer" ></div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2" >    
            <div class="box box-solid " >
                <div class="box-header" ></div>
                <div class="box-body" ></div>
                <div class="box-footer" ></div>
            </div>
        </div>

    </div>

</section><!-- /.content -->

<div class="modal" id="modal-kategori" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Add Kategori</h4>
            </div>
            <div class="modal-body">
                <form name="form-new-kategori" id="form-new-kategori" method="POST" action="admin/pages/gallery/new-kategori">
                    <table class="table table-bordered table-condensed" >
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <input type="text" class="form-control" name="kategori_nama"/>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>
                                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                    <a id="btn-cancel-add-kategori" class="btn btn-danger btn-sm" data-dismiss="modal" >Cancel</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div> 
    </div> 
</div>

@stop

@section('scripts')
<script src="backend/plugins/jqueryform/jquery.form.js" type="text/javascript"></script>
<script>
    (function ($) {
        //add gallery
        $('#btn-add-gallery').click(function () {
            $('#form-new-gallery').removeClass('hide');
            $('#form-new-gallery').hide();
            $('#form-new-gallery').slideDown(250, null, function () {

            });
        });

        //cancel input
        $('#btn-cancel-add-gallery').click(function () {
            $('#form-new-gallery').slideUp(250, null, function () {
                clearInput();
            });
        });

        //clear inpur
        function clearInput() {
            $('#form-new-gallery input[type=text]').val('');
            $('#form-new-gallery input[type=file]').val(null);
            $('#form-new-gallery select').val([]);
            $('#form-new-gallery img').attr('src', 'backend/img/gallery/1.jpg');
        }
        clearInput();

        //======================================================================

        /**
         * KATEGORI SECTION
         */

        //add new kategori
        $('#btn-add-kategori').click(function () {
            //tampilkan form input kategori
            $('#modal-kategori').modal('show');
        });

        //cancel input kategori
        $('#btn-cancel-add-kategori').click(function () {
            //clear input kategori
            clearInputKategori();
        });

        //clear input form kategori
        function clearInputKategori() {
            $('#form-new-kategori input[type=text]').val('');
        }

        //save/submit new kategori
        $('#form-new-kategori').ajaxForm({
            success: function (data) {
                data = JSON.parse(data);
                //close ,moda
                $('#modal-kategori').modal('hide');
                //tambahkan ke select kategori
                $('select[name=gallery_kategori]').append($('<option>').val(data.id).html(data.nama));
                //set select to null
                $('select[name=gallery_kategori]').val([]);
                //clear input 
                clearInputKategori();
            }
        });

        /**
         * END SECTION OF KATEGORI
         */

    })(jQuery);
</script>
@stop
