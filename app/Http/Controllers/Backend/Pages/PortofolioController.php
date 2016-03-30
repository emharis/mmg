<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PortofolioController extends Controller {

    public function index() {
        $dt_portofolio = \DB::table('portofolio')->orderBy('created_at', 'desc')->get();
        $imgpath = \App\Helpers\Helper::appsetting('portofolio_img_path');
        return view('backend.pages.portofolio.index', [
            'portofolio' => $dt_portofolio,
            'data_portofolio' => $dt_portofolio,
            'imgpath' => $imgpath,
        ]);
    }

    public function newPortofolio(Request $request) {
        $id = \DB::table('portofolio')
                ->insertGetId([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
        ]);

        //cek apakah ada file yang harus di upload
        if ($request->hasFile('portofolio_img')) {
            $file = $request->file('portofolio_img');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('portofolio_img_path'), $filename);
            }

            //update nama file di database
            \DB::table('portofolio')
                    ->whereId($id)
                    ->update([
                        'img' => $filename
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/portofolio');
        } else {
            $data = \DB::table('portofolio')->find($id);
            echo json_encode($data);
        };
    }

    public function updatePortofolio(Request $request) {

        \DB::table('portofolio')
                ->whereId($request->input('id'))
                ->update([
                    'title' => $request->input('title'),
                    'subtitle' => $request->input('subtitle'),
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/portofolio');
        } else {
            $data = \DB::table('portofolio')->find($request->input('id'));
            echo json_encode($data);
        };
    }

    public function deletePortofolio($id, Request $request) {
        $data = \DB::table('portofolio')->find($id);
        //delete image
        \File::delete(\App\Helpers\Helper::appsetting('portofolio_img_path') . '/' . $data->img);
        //delete dari database
        \DB::table('portofolio')->delete($id);

        if (!$request->ajax()) {
            return redirect('admin/pages/portofolio');
        }
    }

}
