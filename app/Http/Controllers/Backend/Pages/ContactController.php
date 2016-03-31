<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactController extends Controller {

    public function index() {
        $data = \DB::table('contact_setting')->first();
        return view('backend.pages.contact.index', [
            'data' => $data
        ]);
    }

    public function updateEmail(Request $request) {
        \DB::table('contact_setting')
                ->update([
                    'main_email' => $request->input('main_email'),
                    'cc_email' => $request->input('cc_email'),
                    'bcc_email' => $request->input('bcc_email'),
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/contact');
        };
    }

    public function office() {
        $data = \DB::table('contact_office')->orderBy('order', 'asc')->get();
        return view('backend.pages.contact.office', [
            'data' => $data
        ]);
    }

    public function newOffice(Request $request) {
        $new_order = \DB::table('contact_office')->max('order') + 1;

        $id = \DB::table('contact_office')
                ->insertGetId([
            'nama_cabang' => $request->input('nama_cabang'),
            'alamat' => $request->input('alamat'),
            'phone' => $request->input('phone'),
            'fax' => $request->input('fax'),
            'email' => $request->input('email'),
            'order' => $new_order,
            'show_map' => $request->input('show_map'),
            'lat' => $request->input('map_lat'),
            'long' => $request->input('map_long'),
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/contact/office');
        } else {
            $data = \DB::table('contact_office')->find($id);
            echo json_encode($data);
        };
    }

    //shift up office
    public function shiftUpOffice($id, Request $request) {
        $tablename = 'contact_office';
        $data = \DB::table($tablename)->find($id);
        if ($data->order > 1) {
            $upper = \DB::table($tablename)
                    ->whereOrder($data->order - 1)
                    ->first();

            //rubah posisi slider
            \DB::table($tablename)
                    ->whereId($upper->id)
                    ->update(['order' => $data->order]);

            \DB::table($tablename)
                    ->whereId($data->id)
                    ->update(['order' => $data->order - 1]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/contact/office');
        } else {
            
        };
    }

    //shift down office
    public function shiftDownOffice($id, Request $request) {
        $tablename = 'contact_office';
        $data = \DB::table($tablename)->find($id);
        $maxorder = \DB::table($tablename)->max('order');
        if ($data->order < $maxorder) {
            $lower = \DB::table($tablename)
                    ->whereOrder($data->order + 1)
                    ->first();

            //rubah posisi slider
            \DB::table($tablename)
                    ->whereId($lower->id)
                    ->update(['order' => $data->order]);

            \DB::table($tablename)
                    ->whereId($data->id)
                    ->update(['order' => $data->order + 1]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/contact/office');
        } else {
            
        };
    }

    public function editOffice($id, Request $request) {
        $data = \DB::table('contact_office')->find($id);
        return view('backend.pages.contact.edit-office', [
            'data' => $data
        ]);
    }

}
