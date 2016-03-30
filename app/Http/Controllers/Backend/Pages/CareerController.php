<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CareerController extends Controller {

    public function index() {
        $careers = \DB::table('career')->orderBy('created_at', 'desc')->orderBy('aktif', 'desc')->get();
        return view('backend.pages.career.index', [
            'careers' => $careers
        ]);
    }

    public function newCareer(Request $request) {
        $id = \DB::table('career')
                ->insertGetId([
            'title' => $request->input('title'),
            'desc' => $request->input('desc'),
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/career');
        } else {
            $data = \DB::table('career')->find($id);
            echo json_encode($data);
        };
    }

    public function editCareer($id, Request $request) {
        $data = \DB::table('career')->find($id);
        return view('backend.pages.career.edit', [
            'data' => $data
        ]);
    }

    public function updateCareer(Request $request) {
        \DB::table('career')
                ->whereId($request->input('id'))
                ->update([
                    'title' => $request->input('title'),
                    'desc' => $request->input('desc'),
                    'aktif' => $request->input('aktif'),
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/career');
        } else {
            $data = \DB::table('career')->find($id);
            echo json_encode($data);
        };
    }

    public function deleteCareer($id,Request $request) {
        \DB::table('career')->delete($id);
        if (!$request->ajax()) {
            return redirect('admin/pages/career');
        }
    }

}
