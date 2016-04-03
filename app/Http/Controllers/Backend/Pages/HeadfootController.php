<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HeadfootController extends Controller {

    public function index() {
        $sosmed = \DB::table('header_social_media')->orderBy('order', 'asc')->get();
        $contact = \DB::table('header_contact')->get();
        $menu = \DB::table('homepage_menu')->orderBy('order', 'asc')->get();

        //FOOTER
        $footer_emergency = \DB::table('footer_emergency')->first();
        $footer_emergency->img = \App\Helpers\Helper::appsetting('footer_emergency_img_path') . "/" . $footer_emergency->img;

        //partners
        $partners = \DB::table('footer_partner')->orderBy('order', 'asc')->get();
        $partner_img_path = \App\Helpers\Helper::appsetting('footer_partner_img_path');


        //bottom footer
        $bottom_footer = \DB::table('footer_bottom')->first();
        if ($bottom_footer->img != "") {
            $bottom_footer->img = \App\Helpers\Helper::appsetting('footer_img_path') . "/" . $bottom_footer->img;
        }
        $offices = \DB::table('contact_office')->get();
        $slc_office = array();
        foreach ($offices as $dt) {
            $slc_office[$dt->id] = $dt->nama_cabang . ' [' . $dt->alamat . ']';
        }

        //company logo
        $complogo = \App\Helpers\Helper::appsetting('web_company_logo_img_path') . "/" . \App\Helpers\Helper::appsetting('web_company_logo');

        return view('backend.pages.headfoot.index', [
            'sosmed' => $sosmed,
            'contact' => $contact,
            'menu' => $menu,
            'emergency' => $footer_emergency,
            'partners' => $partners,
            'partner_img_path' => $partner_img_path,
            'complogo' => $complogo,
            'bottom_footer' => $bottom_footer,
            'select_office' => $slc_office,
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
                    'type' => $request->input('type')
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

    /**
     * MENU SECTION
     */
    //update menu with post
    public function updateMenuTitle(Request $request) {
        $id = $request->input('id');
        $value = $request->input('value');
        \DB::table('homepage_menu')
                ->whereId($id)
                ->update([
                    'nama' => $value
        ]);
    }

    //update posisi menu
    public function updateMenuPosition(Request $request) {
        $id = $request->input('id');
        $value = $request->input('value');
        \DB::table('homepage_menu')
                ->whereId($id)
                ->update([
                    'position' => $value
        ]);
    }

    //update aktif / non aktif menu
    public function updateAktifMenu($id, $aktif, Request $request) {
        \DB::table('homepage_menu')
                ->whereId($id)
                ->update([
                    'aktif' => $aktif
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

    //shift up menu
    public function shiftUpMenu($id, Request $request) {
        $menu = \DB::table('homepage_menu')->find($id);
        if ($menu->order > 1) {
            $menu_upper = \DB::table('homepage_menu')->whereOrder($menu->order - 1)->first();

            //shidt down menu_upper
            \DB::table('homepage_menu')
                    ->whereId($menu_upper->id)
                    ->update([
                        'order' => $menu->order
            ]);

            //shift up
            \DB::table('homepage_menu')
                    ->whereId($menu->id)
                    ->update([
                        'order' => $menu->order - 1
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

    //shift down menu
    public function shiftDownMenu($id, Request $request) {
        $menu = \DB::table('homepage_menu')->find($id);
        $last_order = \DB::table('homepage_menu')->max('order');
        if ($menu->order < $last_order) {
            $menu_lower = \DB::table('homepage_menu')->whereOrder($menu->order + 1)->first();

            //shidt up menu_lower
            \DB::table('homepage_menu')
                    ->whereId($menu_lower->id)
                    ->update([
                        'order' => $menu->order
            ]);

            //shift up
            \DB::table('homepage_menu')
                    ->whereId($menu->id)
                    ->update([
                        'order' => $menu->order + 1
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

    /**
     * END OF MENU SECTION
     */

    /**
     * FOOTER SECTION
     */
    //emergency
    //update emergency
    public function updateEmergency(Request $request) {
        \DB::table('footer_emergency')
                ->update([
                    'title' => $request->title,
                    'subtitle' => $request->subtitle,
                    'telp' => $request->telp
        ]);

        //cek apoakah ada gambar
        if ($request->hasFile('emergency_image')) {
            //delete gambar lama
            $emergency = \DB::table('footer_emergency')->first();
            if ($emergency->img != "") {
                //delete file yang lama
                \File::delete(\App\Helpers\Helper::appsetting('footer_emergency_img_path') . '/' . $emergency->img);
            }

            //upload image yang baru
            $file = $request->file('emergency_image');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('footer_emergency_img_path'), $filename);
            }

            //update nama file di database
            \DB::table('footer_emergency')
                    ->update([
                        'img' => $filename
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

    //end of emergency
    //partners
    public function newPartner(Request $request) {
        //get last order
        $last_order = \DB::table('footer_partner')->max('order');
        //insert new partner
        $id = \DB::table('footer_partner')
                ->insertGetId([
            'nama' => $request->input('partner_nama'),
            'link' => str_replace("http://", "", $request->input('partner_link')),
            'order' => $last_order + 1,
        ]);

        //cek apakah ada gambarnya
        if ($request->hasFile('partner_img')) {
            $file = $request->file('partner_img');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('footer_partner_img_path'), $filename);
            }

            //update nama file di database
            \DB::table('footer_partner')
                    ->whereId($id)
                    ->update([
                        'img' => $filename
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        } else {
            $data = \DB::table('footer_partner')->find($id);
            $data->imgpath = \App\Helpers\Helper::appsetting('footer_partner_img_path');
            echo json_encode($data);
        };
    }

    //shift up partner
    public function shiftUpPartner($id, Request $request) {
        $tablename = "footer_partner";
        $data = \DB::table($tablename)->find($id);
        if ($data->order > 1) {
            $data_upper = \DB::table($tablename)->whereOrder($data->order - 1)->first();

            //shidt down data_upper
            \DB::table($tablename)
                    ->whereId($data_upper->id)
                    ->update([
                        'order' => $data->order
            ]);

            //shift up
            \DB::table($tablename)
                    ->whereId($data->id)
                    ->update([
                        'order' => $data->order - 1
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

    public function shiftDownPartner($id, Request $request) {
        $tablename = "footer_partner";
        $data = \DB::table($tablename)->find($id);
        $last_order = \DB::table($tablename)->max('order');
        if ($data->order < $last_order) {
            $data_lower = \DB::table($tablename)->whereOrder($data->order + 1)->first();

            //shidt up data_lower
            \DB::table($tablename)
                    ->whereId($data_lower->id)
                    ->update([
                        'order' => $data->order
            ]);

            //shift up
            \DB::table($tablename)
                    ->whereId($data->id)
                    ->update([
                        'order' => $data->order + 1
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

    //delete partner
    public function deletePartner($id, Request $request) {
        $partner = \DB::table('footer_partner')
                ->find($id);

        if ($partner->img != '') {
            //delete file
            \File::delete(\App\Helpers\Helper::appsetting('footer_partner_img_path') . '/' . $partner->img);
        }

        //re order data setelahnya
        $datanext = \DB::table('footer_partner')
                ->where('order', '>', $partner->order)
                ->get();
        //update re order per data
        foreach ($datanext as $dt) {
            \DB::table('footer_partner')
                    ->whereId($dt->id)
                    ->update([
                        'order' => $dt->order - 1
            ]);
        }

        //delete data di database
        \DB::table('footer_partner')
                ->whereId($id)
                ->delete();

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

    //update aktif / non aktif menu
    public function updateAktifPartner($id, $aktif, Request $request) {
        \DB::table('footer_partner')
                ->whereId($id)
                ->update([
                    'aktif' => $aktif
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        };
    }

    //tampi.lkan form edit partner
    public function editPartner($id) {
        $partner = \DB::table('footer_partner')->find($id);
        $partner->imgpath = \App\Helpers\Helper::appsetting('footer_partner_img_path');

        return view('backend.pages.headfoot.partner.edit', [
            'partner' => $partner,
        ]);
    }

    //update data partner method post
    public function updatePartner(Request $request) {
        $partner = \DB::table('footer_partner')
                ->find($request->id);

        \DB::table('footer_partner')
                ->whereId($request->input('id'))
                ->update([
                    'nama' => $request->input('edit_partner_nama'),
                    'link' => $request->input('edit_partner_link'),
                    'aktif' => $request->input('edit_partner_aktif'),
        ]);

        //cek apakah ada gambarnya
        if ($request->hasFile('edit_partner_img')) {
            //delete file yang sudah ada
            \File::delete(\App\Helpers\Helper::appsetting('footer_partner_img_path') . '/' . $partner->img);

            //input file yang baru
            $file = $request->file('edit_partner_img');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('footer_partner_img_path'), $filename);
            }

            //update nama file di database
            \DB::table('footer_partner')
                    ->whereId($request->id)
                    ->update([
                        'img' => $filename
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        } else {
            $data = \DB::table('footer_partner')->find($request->id);
            $data->imgpath = \App\Helpers\Helper::appsetting('footer_partner_img_path');
            echo json_encode($data);
        };
    }

    //end of partners
    //Bottom Footer
    public function updateBottomFooter(Request $request) {
        $footer = \DB::table('footer_bottom')->first();

        \DB::table('footer_bottom')->update([
            'message_info_text' => $request->input('message_info_text'),
            'office_1' => $request->input('office_1'),
            'office_2' => $request->input('office_2'),
            'office_3' => $request->input('office_3'),
        ]);

        //cek apakah ada gambarnya
        if ($request->hasFile('bottomfooter_img')) {
            //delete file yang sudah ada
            \File::delete(\App\Helpers\Helper::appsetting('footer_img_path') . '/' . $footer->img);

            //input file yang baru
            $file = $request->file('bottomfooter_img');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('footer_img_path'), $filename);
            }

            //update nama file di database
            \DB::table('footer_bottom')
                    ->update([
                        'img' => $filename
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        }
    }

    //End Of Bottom Footer

    /**
     * END OF FOOTER SECTION
     */
    public function updateCompanyLogo(Request $request) {
        if ($request->hasFile('company_img')) {
            //cek gambar yang lama
            if (\App\Helpers\Helper::appsetting('web_company_logo') != "") {
                //delete file yang lama
                \File::delete(\App\Helpers\Helper::appsetting('web_company_logo_img_path') . '/' . \App\Helpers\Helper::appsetting('web_company_logo'));
            }


            $file = $request->file('company_img');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('web_company_logo_img_path'), $filename);
            }

            //update nama file di database
            \DB::table('appsetting')
                    ->whereName('web_company_logo')
                    ->update([
                        'value' => $filename
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/headfoot');
        }
    }

}
