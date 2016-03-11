<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HeadfootController extends Controller {

    public function index() {
        $sosmed = \DB::table('header_social_media')->orderBy('order', 'asc')->get();
        $contact = \DB::table('header_contact')->get();

        return view('backend.pages.headfoot.index', [
            'sosmed' => $sosmed,
            'contact' => $contact,
        ]);
    }

    public function setAktif($id, $aktif, Request $request) {
        \DB::table('header_social_media')
                ->whereId($id)
                ->update([
                    'aktif' => $aktif
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

    public function shiftUp($id, Request $request) {
        $sosmed = \DB::table('header_social_media')->find($id);
        if ($sosmed->order > 1) {
            $sosmed_upper = \DB::table('header_social_media')->whereOrder($sosmed->order - 1)->first();

            //shidt down sosmed_upper
            \DB::table('header_social_media')
                    ->whereId($sosmed_upper->id)
                    ->update([
                        'order' => $sosmed->order
            ]);

            //shift up
            \DB::table('header_social_media')
                    ->whereId($sosmed->id)
                    ->update([
                        'order' => $sosmed->order - 1
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

    public function shiftDown($id, Request $request) {
        $sosmed = \DB::table('header_social_media')->find($id);
        $last_order = \DB::table('header_social_media')->max('order');
        if ($sosmed->order < $last_order) {
            $sosmed_lower = \DB::table('header_social_media')->whereOrder($sosmed->order + 1)->first();

            //shidt up sosmed_lower
            \DB::table('header_social_media')
                    ->whereId($sosmed_lower->id)
                    ->update([
                        'order' => $sosmed->order
            ]);

            //shift up
            \DB::table('header_social_media')
                    ->whereId($sosmed->id)
                    ->update([
                        'order' => $sosmed->order + 1
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

    //update value of sosmed
    public function updateSosmed($id, $val, Request $request) {
        \DB::table('header_social_media')
                ->whereId($id)
                ->update([
                    'value' => $val
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

    //update contact header
    public function updateContact(Request $request) {
        \DB::table('header_contact')
                ->whereId($request->input('id'))
                ->update([
                    'value' => $request->input('value'),
                    'type'=>$request->input('type')
        ]);
    }
    
    public function setAktifContact($id, $aktif, Request $request) {
        \DB::table('header_contact')
                ->whereId($id)
                ->update([
                    'aktif' => $aktif
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

}
