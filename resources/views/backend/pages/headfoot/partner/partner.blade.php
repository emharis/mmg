@section('styles')
@parent
<link href="css/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
@append

<h2 class="page-header"><a href="admin/pages/headfoot#partner">Partner</a></h2>
<a class="btn-add-partner btn btn-primary btn-sm" ><i class="fa fa-plus" ></i> Add Partner</a>
<div class="clearfix" ></div>
<br/>
<!--FORM INPUT NEW PARTNER-->
<form class="hide" method="POST" action="admin/pages/headfoot/new-partner" name="form-footer-new-partner" id="form-footer-new-partner" enctype="multipart/form-data" >
    <table class="table table-bordered table-condensed" >
        <tbody>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="partner_nama" class="form-control" autocomplete="off" required />
                </td>
                <td rowspan="3" class="col-md-4 col-sm-4 col-lg-4" >
                    <img id="partner_img_prev" class="col-sm-12 col-md-12 col-lg-12" />
                </td>
            </tr>
            <tr>
                <td>Logo *maxwidth = 195px; maxheight:75px</td>
                <td>
                    <input type="file" name="partner_img" required />
                </td>
            </tr>
            <tr>
                <td>Link</td>
                <td>
                    <input type="text" name="partner_link" class="form-control" autocomplete="off" placeholder="Tanpa http://"  />
                </td>
            </tr>
            <tr>
                <td></td>
                <td colspan="2" >
                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                    <a class="btn-cancel-add-partner btn btn-warning btn-sm">Cancel</a>
                </td>
            </tr>
        </tbody>
    </table>
</form>


<!--TABLE DATA PARTNER-->
<table class="table table-bordered table-condensed" id="table-partner" > 
    <thead>
        <tr>
            <th>Nama</th>
            <th class="col-sm-1 col-md-1 col-lg-1">Logo</th>
            <th>Link</th>
            <th>Aktif</th>
            <th>Order</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($partners as $dt)
        <tr id="partner_row_{{$dt->id}}" >
            <td>{{$dt->nama}}</td>
            <td>
                <?php $img = $partner_img_path . '/' . $dt->img; ?>
                <a class="single_image" href="{{$img}}">View</a>
            </td>
            <td>
                <a href="http://{{$dt->link}}" target="_blank" >{{$dt->link}}</a>
            </td>
            <td>
                <!--<input id="ck-partner-aktif-{{$dt->id}}" type="checkbox" class="flat-red ck-partner" name="ck-partner-aktif-{{$dt->id}}" value="{{$dt->id}}" {{$dt->aktif == 'Y'?'checked':''}}>-->
                @if($dt->aktif == 'Y')
                Aktif
                @else
                Not Aktif
                @endif
            </td>
            <td>
                <a class="btn btn-success btn-xs btn-shift-up-partner" data-id="{{$dt->id}}" href="admin/pages/headfoot/shift-up-partner/{{$dt->id}}" ><i class="fa fa-angle-double-up" ></i></a>
                <a class="btn btn-warning btn-xs btn-shift-down-partner" data-id="{{$dt->id}}" href="admin/pages/headfoot/shift-down-partner/{{$dt->id}}" ><i class="fa fa-angle-double-down" ></i></a>
            </td>
            <td>
                <a class="btn btn-xs btn-primary btn-edit-partner" href="admin/pages/headfoot/edit-partner/{{$dt->id}}" ><i class="fa fa-edit" ></i></a>
                <a class="btn btn-xs btn-danger btn-delete-partner" href="admin/pages/headfoot/delete-partner/{{$dt->id}}" ><i class="fa fa-trash" ></i></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!--MODAL EDIT PARTNER-->
<div class="modal" id="modal-partner" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Partner</h4>
            </div>
            <div class="modal-body"></div>
        </div> 
    </div> 
</div> 

@section('scripts')
@parent
<script src="backend/plugins/jqueryform/jquery.form.js" type="text/javascript"></script>
<script src="js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script>
(function ($) {
    //fancy image
    $("a.single_image").fancybox();

    //add partneer & tampilkan form new partner
    $('.btn-add-partner').click(function () {
        $('#form-footer-new-partner').hide();
        $('#form-footer-new-partner').removeClass('hide');
        $('#form-footer-new-partner').slideDown(250, null, function () {
            //fokuskan ke input
            $('input[name=partner_nama]').focus();
        });

    });

    //cancel add partner && close form
    $('.btn-cancel-add-partner').click(function () {
        //clear form
        clearFormAddPartner();
        //close form
        $('#form-footer-new-partner').slideUp(250);
    });

    //tampilkan image dan cek ukuran gambar
    $('input[name=partner_img]').change(function () {
        var id = $(this).data('id');
        var fr = new FileReader;
        var fileUpload = this;
        fr.onload = function () {
            var img = new Image;
            var ukuransesuai = false;
            img.onload = function () {
                //cek ukuran
                if (img.width <= 195 && img.height <= 75) {
                    ukuransesuai = true;
                }

                if (ukuransesuai) {
                    //tampilkan gambar
                    if (fileUpload.files && fileUpload.files[0]) {
                        fr.onload = function (e) {
                            $('#partner_img_prev').attr('src', e.target.result);
                        }
                        fr.readAsDataURL(fileUpload.files[0]);
                    }
                } else {
                    alert('Ukuran gambar tidak sesuai');
                    //clear input
                    $('input[name=partner_img]').val(null);
                    //clear preview
                    $('#partner_img_prev').attr('src', null);
                }
                //}
            };
            img.src = fr.result;
        };
        fr.readAsDataURL(this.files[0]);
    });

    //submit form new partneer
    $('#form-footer-new-partner').ajaxForm({
        success: function (data) {
            data = JSON.parse(data);

            //tambahkan new row 
            var newrow = '<tr id="partnew_row_' + data.id + '" >\n\
            <td>' + data.nama + '</td>\n\
            <td>\n\
                <a href="' + data.imgpath + '/' + data.img + '" class="single_image" >view</a>\n\
            </td>\n\
            <td>\n\
                <a target="_blank" href="http://' + data.link + '" >' + data.link + '</a>\n\
            </td>\n\
            <td>\n\
                <input type="checkbox" class="flat-red ck-partner" name="ck-partner-aktif-' + data.id + '" value="' + data.id + '" checked>\n\
            </td>\n\
            <td>\n\
                <a class="btn btn-success btn-xs btn-shift-up-partner" data-id="' + data.id + '" href="admin/pages/headfoot/shift-up-partner/' + data.id + '" ><i class="fa fa-angle-double-up" ></i></a>\n\
                    <a class="btn btn-warning btn-xs btn-shift-down-partner" data-id="' + data.id + '" href="admin/pages/headfoot/shift-down-partner/' + data.id + '" ><i class="fa fa-angle-double-down" ></i></a>\n\
            </td>\n\
            <td>\n\
                <a class="btn btn-xs btn-primary btn-edit-partner" href="admin/pages/headfoot/edit-partner/' + data.id + '" ><i class="fa fa-edit" ></i></a>\n\
                <a class="btn btn-xs btn-danger btn-delete-partner" href="admin/pages/headfoot/delete-partner/' + data.id + '" ><i class="fa fa-trash" ></i></a>\n\
            </td>\n\
            </tr>';

            $('#table-partner tbody').append(newrow);
            //re init checkbox
            $('input[type="checkbox"].ck-partner').iCheck({
                checkboxClass: 'icheckbox_flat-green'
            });

            //clear form
            clearFormAddPartner();

            //close form
            $('#form-footer-new-partner').slideUp(250);

        }
    });

    //clear input form add partner
    function clearFormAddPartner() {
        //clear input
        $('#form-footer-new-partner input[type=text]').val('');
        $('#form-footer-new-partner input[type=file]').val(null);
    }

    //shift up order
    $(document).on('click', '.btn-shift-up-partner', function () {
        var url = $(this).attr('href');
        var row = $(this).closest('tr');
        var row_upper = row.prev();

        $.get(url, null, function () {
            //shift row
            row.fadeOut(250, null, function () {
                row.insertBefore(row_upper);
                row.fadeIn(250);

                //blinkink
                row.css("background-color", "#DCF1F7");
                setTimeout(function () {
                    row.css("background-color", "inherit");
                    setTimeout(function () {
                        row.css("background-color", "#DCF1F7");
                        setTimeout(function () {
                            row.css("background-color", "inherit");
                        }, 300);
                    }, 300);
                }, 300);

            });
        });
        return false;
    });
    //shift down order
    $(document).on('click', '.btn-shift-down-partner', function () {
        var url = $(this).attr('href');
        var row = $(this).closest('tr');
        var row_lower = row.next();

        $.get(url, null, function () {
            //shift row
            row.fadeOut(250, null, function () {
                row.insertAfter(row_lower);
                row.fadeIn(250);

                //blinkink
                row.css("background-color", "#DCF1F7");
                setTimeout(function () {
                    row.css("background-color", "inherit");
                    setTimeout(function () {
                        row.css("background-color", "#DCF1F7");
                        setTimeout(function () {
                            row.css("background-color", "inherit");
                        }, 300);
                    }, 300);
                }, 300);

            });
        });
        return false;
    });

    //delete partner
    $(document).on('click', '.btn-delete-partner', function () {
        var url = $(this).attr('href');
        var row = $(this).closest('tr');
        if (confirm('Anda akan menghapus data ini?')) {

            $.get(url, null, function () {
                //remove row
                row.fadeOut(250, null, function () {
                    row.remove();
                });
            });
        }
        return false;
    });

//    //update set aktif partner
//    $('.ck-partner').on('ifChecked', function () {
//        var id = $(this).val();
//        //update social media aktifkan
//        $.get('admin/pages/headfoot/update-aktif-partner/' + id + '/Y', null, function () {
//        });
//    });
//    $('.ck-partner').on('ifUnchecked', function () {
//        var id = $(this).val();
//        //update social media non aktifkan
//        $.get('admin/pages/headfoot/update-aktif-partner/' + id + '/N', null, function () {
//        });
//    });

    //edit partner
    $(document).on('click', '.btn-edit-partner', function () {
        var url = $(this).attr('href');
        $.get(url, null, function (data) {
            //appen content edit ke modal edit
            $('#modal-partner .modal-body').html(data);
            $('#modal-partner').modal('show');
        });
        return false;
    });

})(jQuery);
</script>
@append