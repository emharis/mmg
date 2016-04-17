<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CareerController extends FrontController {

    private $url_name = 'career';

    public function index(Request $request) {
        $menu = \DB::table('homepage_menu')->whereUrl($this->url_name)->first();
        $pagetitle = $menu->nama;

        $career = \DB::table('career')->get();
        $career_img_path = \App\Helpers\Helper::appsetting('career_img_path');
        $career_setting = \DB::table('career_setting')->first();

        $data = array(
            'pagetitle' => $pagetitle,
            'career' => $career,
            'career_setting' => $career_setting,
            'career_img_path' => $career_img_path,
        );
        return view('frontend.career.index', $data);
    }

    public function apply($id, Request $request) {
        $menu = \DB::table('homepage_menu')->whereUrl($this->url_name)->first();
        $pagetitle = $menu->nama;

        $lowongan_dipilih = \DB::table('career')->find($id);


        return view('frontend.career.apply', [
            'pagetitle' => $pagetitle,
            'lowongan_dipilih' => $lowongan_dipilih,
        ]);
    }

    public function applyAJob(Request $request) {
        $id = \DB::table('applicant')
                ->insertGetId([
            'career_id' => $request->input('career_id'),
            'nama' => $request->input('nama'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tgl_lahir' => $request->input('thn_lahir') . '-' . $request->input('bln_lahir') . '-' . $request->input('tgl_lahir'), //date_format('Y-m-d',strtotime($request->input('tgl_lahir').'-'.$request->input('bln_lahir') . '-' . $request->input('thn_lahir')) ),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'email' => $request->input('email'),
            'alamat' => $request->input('alamat'),
            'telp' => $request->input('telp'),
            'pendidikan_terakhir' => $request->input('pendidikan_terakhir'),
            'jurusan' => $request->input('jurusan'),
        ]);

        $applicant = \DB::table('VIEW_APPLICANT')->find($id);
        $message = \DB::table('career_setting')->first()->message_terkirim;
        $menu = \DB::table('homepage_menu')->whereUrl($this->url_name)->first();
        $pagetitle = $menu->nama;

        return redirect('career/job-submit-page');
        
//        return view('frontend.career.jobsubmit', [
//            'applicant' => $applicant,
//            'message' => $message,
//            'pagetitle' => $pagetitle,
//        ]);
    }
    
    public function showJobSubmitPage(){
        $message = \DB::table('career_setting')->first()->message_terkirim;
        $menu = \DB::table('homepage_menu')->whereUrl($this->url_name)->first();
        $pagetitle = $menu->nama;
        
        return view('frontend.career.jobsubmit', [
            'message' => $message,
            'pagetitle' => $pagetitle,
        ]);
    }

}
