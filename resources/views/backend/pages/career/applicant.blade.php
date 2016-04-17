@section('styles')
<style>
    #modal-pelamar .modal-dialog {
        width: 60%;
        height: 75%;
    }
</style>
@append

<section>
    <!--<form action="admin/pages/career/filter" method="POST" >
        <table class="table table-bordered table-condensed">
            <tbody>
                <tr>
                    <td class="col-sm-2 col-md-2 col-lg-2" >Filter</td>
                    <td>
                        {!! Form::select('lowongan',$slc_lowongan,null,['class'=>'form-control']) !!}
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>-->

    <?php $rownum = 1; ?>
    <table class="table table-bordered table-condensed" id="table-applicant">
        <thead>
            <tr>
                <th class="col-sm-1 col-md-1 col-lg-1">No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Posisi</th>
                <th>Pendidikan Terakhir</th>
                <th>Jurusan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($pelamar as $dt)
            <tr data-id="{{$dt->id}}" >
                <td class="text-right">
                    {{$rownum++}}
                </td>
                <td>
                    {{$dt->nama}}
                </td>
                <td>
                    @if($dt->jenis_kelamin == 'P')
                    Pria
                    @else
                    Wanita
                    @endif
                </td>
                <td>
                    {{$dt->career}}
                </td>
                <td>
                    {{$dt->pendidikan_terakhir}}
                </td>
                <td>
                    {{$dt->jurusan}}
                </td>
                <td class="text-center" >
                    <a class="btn btn-primary btn-xs btn-view-applicant " ><i class="fa fa-eye" ></i></a>
                    <a class="btn btn-danger btn-xs btn-delete-applicant " ><i class="fa fa-trash" ></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

<div class="modal" id="modal-pelamar" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Data Pelamar</h4>
            </div>
            <div class="modal-body">
                <table class="table table-bordered table-condensed" >
                    <tbody>
                        <tr>
                            <td>Posisi</td>
                            <td>
                                <input type="text" name="posisi" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input type="text" name="nama" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>
                                <input type="text" name="jenis_kelamin" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>Tempat, Tanggal Lahir</td>
                            <td>
                                <div class="row" >
                                    <div class="col-sm-8 col-md-8 col-lg-8" >
                                        <input type="text" name="tempat_lahir" class="form-control"/>
                                    </div>
                                    <div class="col-sm-4 col-md-4 col-lg-4" >
                                        <input type="text" name="tanggal_lahir" class="form-control"/>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>
                                <textarea name="alamat" class="form-control" rows="2" ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>Telp</td>
                            <td>
                                <input type="text" name="telp" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>
                                <input type="text" name="email" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>Pendidikan Terakhir</td>
                            <td>
                                <input type="text" name="pendidikan_terakhir" class="form-control" />
                            </td>
                        </tr>
                        <tr>
                            <td>Jurusan</td>
                            <td>
                                <input type="text" name="jurusan" class="form-control" />
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer" >
                <a class="btn btn-danger" data-dismiss="modal" >Close</a>
            </div>
        </div>
    </div>
</div>

@section('scripts')
<script>
    (function ($) {
        
        //tampilkan data applicant
        $('.btn-view-applicant').click(function () {
            var id = $(this).parent().parent().data('id');
            //get data applicant
//            location.href = 'admin/pages/career/get-applicant/' + id;
            $.get('admin/pages/career/get-applicant/' + id, null, function (ref_data) {
                var data = JSON.parse(ref_data);
                $('#modal-pelamar input[name=posisi]').val(data.career);
                $('#modal-pelamar input[name=nama]').val(data.nama);
                if (data.jenis_kelamin == 'P') {
                    $('#modal-pelamar input[name=jenis_kelamin]').val('Pria');
                } else {
                    $('#modal-pelamar input[name=jenis_kelamin]').val('Wanita');
                }
                $('#modal-pelamar input[name=tempat_lahir]').val(data.tempat_lahir);
                $('#modal-pelamar input[name=tanggal_lahir]').val(data.tanggal_lahir);
                $('#modal-pelamar textarea[name=alamat]').val(data.alamat);
                $('#modal-pelamar input[name=telp]').val(data.telp);
                $('#modal-pelamar input[name=email]').val(data.email);
                $('#modal-pelamar input[name=pendidikan_terakhir]').val(data.pendidikan_terakhir);
                $('#modal-pelamar input[name=jurusan]').val(data.jurusan);
                
                
                //tammpilkan view form
                $('#modal-pelamar').modal('show');
            });
        });
        
        //hapus data applicant
        $('.btn-delete-applicant').click(function(){
            if(confirm('Anda akan menghapus data ini?')){
                var id = $(this).parent().parent().data('id');
                var row = $(this).parent().parent();
                $.get('admin/pages/career/delete-applicant/'+id,null,function(){
                    row.fadeOut(250,null,function(){
                        row.remove();
                        
                        //reorder row number
                        var rownum=1;
                        $('#table-applicant tbody tr').each(function(i,data){
                            $(this).children('td:first').html(rownum++);
                        });
                    });
                });
            }
        });

    })(jQuery);
</script>
@append