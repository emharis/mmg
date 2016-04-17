@extends('frontend.layouts.layouts') 

@section('styles')
<style>
    .fa-green {
        color: green;
    }

    .table-form tbody tr td{
        border:none;
        padding-top: 0;
    }
</style>
@append 

@section('content') 

@include('frontend.layouts.pagetitle')
<!-- #faq -->
<section id="form-apply" class="faq" >
    <div class="container">
        <div class="row">
            <!-- .faq-content -->
            <div class="col-lg-12 col-md-12 col-sm-12 faq-content">
                <!-- article -->
                <article  >
                    <div class="row"  >
                        <div class="col-lg-12 faq-title">
                            <h2>Apply Job Vancancy</h2>
                        </div>
                    </div>
                    <div class="row" >
                        <div class="col-lg-12">
                            <p class="text-center">Inputkan data biografi anda di bawah ini dengan sebenar-benarnya.</p>
                            <form role="form" method="POST" action="career/apply-a-job" name="form-apply-job"  >
                                <input name="career_id" type="hidden" value="{{$lowongan_dipilih->id}}"/>
                                <!-- text input -->
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Lowongan yang dipilih</label>
                                            <input disabled type="text" name="nama_lowongan" value="{{$lowongan_dipilih->title}}" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input name="nama" type="text" class="form-control" autocomplete="OFF" placeholder="Nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select required name="jenis_kelamin" class="form-control">
                                                <option value="P">Pria</option>
                                                <option value="W">Wanita</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat, Tanggal Lahir (dd/mm/yyyy)</label>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <input required name="tempat_lahir" type="text" class="form-control" autocomplete="OFF" placeholder="Tempat Lahir">
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <!--<input name="tanggal_lahir" type="text" class="form-control" autocomplete="OFF" placeholder="Tanggal Lahir (dd/mm/yyyy)">-->
                                                    <table class="table table-form" >
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <select required name="tgl_lahir" class="form-control" >
                                                                        @for($i=1; $i<=31; $i++)
                                                                        <option value="{{$i}}" >{{$i}}</option>
                                                                        @endfor
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select required name="bln_lahir" class="form-control" >
                                                                        @for($i=1; $i<=12; $i++)
                                                                        <option value="{{$i}}" >{{$i}}</option>
                                                                        @endfor
                                                                    </select>
                                                                </td>
                                                                <td>
                                                                    <select required name="thn_lahir" class="form-control" >
                                                                        @for($i=1950; $i<=date('Y')-17; $i++)
                                                                        <option value="{{$i}}" >{{$i}}</option>
                                                                        @endfor
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                             <label>Alamat</label>
                                             <textarea name="alamat" rows="2" class="form-control" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Telp</label>
                                            <input name="telp" type="text" class="form-control" autocomplete="OFF" placeholder="Telp" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input name="email" type="email" class="form-control" autocomplete="OFF" placeholder="Email" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Pendidikan Terakhir</label>
                                            <select name="pendidikan_terakhir" class="form-control" required>
                                                <option value="smp" >SMP/Sederajat</option>
                                                <option value="sma" >SMA/SMK/SMEA/Sederajat</option>
                                                <option value="d1" >D1</option>
                                                <option value="d2" >D2</option>
                                                <option value="d3" >D3</option>
                                                <option value="d4" >D4</option>
                                                <option value="s1" >S1</option>
                                                <option value="s2" >S2</option>
                                                <option value="s3" >S3</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Jurusan *untuk SMK/SMEA/Perguruan Tinggi</label>
                                            <input name="jurusan" type="text" class="form-control" autocomplete="OFF" placeholder="Jurusan" >
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-12 col-lg-12" >
                                        <div class="form-group">
                                            <button class="btn btn-primary" type="submit">Kirim Lamaran</button>
                                            <a class="btn btn-danger" href="career" >Cancel</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                </article>
                <!-- /article -->
            </div>
        </div>
    </div>
</section>
<!-- /#Testimonial-V1 -->
<div class="clearfix" ></div>
<br/>
<br/>
@stop 

@section('scripts')
<script src="https://cdn.jsdelivr.net/jquery.nailthumb/1.1/jquery.nailthumb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-media.js"></script>
<script>
(function ($) {
//ubah style ul li
    $('.panel .panel-body ul li').each(function (i, data) {
        var new_text = $(this).text();
// $(this).text( '<i class="fa fa-check" ></i> ' .$(this).text());
        $(this).html('<i class="fa fa-check-circle fa-green" ></i> ' + new_text);
    });

    //set select element to null
    $('form[name=form-apply-job] select').val([]);
})(jQuery);
</script>
@append
