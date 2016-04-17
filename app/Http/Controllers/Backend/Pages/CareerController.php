<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CareerController extends Controller {

    public function index() {
        $careers = \DB::table('career')->orderBy('created_at', 'desc')->orderBy('aktif', 'desc')->get();
        $slc_lowongan = array(0 => 'All');
        foreach ($careers as $dt) {
            $slc_lowongan[$dt->id] = $dt->title;
        }

        $pelamar = \DB::table('VIEW_APPLICANT')->orderBy('created_at', 'desc')->get();

        return view('backend.pages.career.index', [
            'careers' => $careers,
            'pelamar' => $pelamar,
            'slc_lowongan' => $slc_lowongan,
        ]);
    }

    public function newCareer(Request $request) {
        $id = \DB::table('career')->insertGetId(['title' => $request->input('title'), 'desc' => $request->input('desc'),]);

        //cek jika ada gambar yang di upload
        if ($request->hasFile('career_img')) {
            $file = $request->file('career_img');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('career_img_path'), $filename);
            }

            //update nama file di database
            \DB::table('career')->whereId($id)->update(['img' => $filename]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/career');
        } else {
            $data = \DB::table('career')->find($id);
            echo json_encode($data);
        };
    }

    public function editCareer($id, Request $request) {
        $data = \DB::table('career')->find($id);
        $career_img_path = \App\Helpers\Helper::appsetting('career_img_path');
        return view('backend.pages.career.edit', ['data' => $data, 'career_img_path' => $career_img_path,]);
    }

    public function updateCareer(Request $request) {
        //data career
        $career = \DB::table('career')->find($request->input('id'));

        //update database
        \DB::table('career')->whereId($request->input('id'))->update(['title' => $request->input('title'), 'desc' => $request->input('desc'), 'aktif' => $request->input('aktif'),]);

        //cek adakah image yang di update
        if ($request->hasFile('career_edit_img')) {
            //delete file yang lama
            \File::delete(\App\Helpers\Helper::appsetting('career_img_path') . '/' . $career->img);

            //upload file yang baru
            $file = $request->file('career_edit_img');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('career_img_path'), $filename);
            }

            //update nama file di database
            \DB::table('career')->whereId($request->input('id'))->update(['img' => $filename]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/career');
        } else {
            $data = \DB::table('career')->find($id);
            echo json_encode($data);
        };
    }

    public function deleteCareer($id, Request $request) {
        \DB::table('career')->delete($id);
        if (!$request->ajax()) {
            return redirect('admin/pages/career');
        }
    }

    public function getApplicant($id, Request $request) {
        $applicant = \DB::table('VIEW_APPLICANT')->find($id);
        return json_encode($applicant);
    }

    public function deleteApplicant($id, Request $request) {
        \DB::table('applicant')->delete($id);
        if (!$request->ajax()) {
            return redirect('admin/pages/career');
        }
    }

}
