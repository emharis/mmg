<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of FrontController
 *
 * @author eries
 */
class FrontController extends Controller {

    public function __construct() {
        // data menu untuk header tiap halaman
        $menu = \DB::table('homepage_menu')
                ->whereAktif('Y')
                ->orderBy('order', 'asc')
                ->get();
        \View::share('menu', $menu);

        //social media
        $sosmed = \DB::table('header_social_media')
                ->whereAktif('Y')
                ->orderBy('order', 'asc')
                ->get();
        \View::share('sosmed', $sosmed);


        //company logo
        if (\App\Helpers\Helper::appsetting('web_company_logo') != "") {
            $company_logo = \App\Helpers\Helper::appsetting('web_company_logo_img_path') . "/" . \App\Helpers\Helper::appsetting('web_company_logo');
        } else {
            $company_logo = "backend/img/homepage_gallery/web_company_logo.jpg";
        }
        \View::share('company_logo', $company_logo);

        //header contact
        $contact = \DB::table('header_contact')->select(['type', 'value'])->whereAktif('Y')->get();
        $arr_contact = array();
        foreach ($contact as $dt) {
            $arr_contact[$dt->type] = $dt->value;
        }
        \View::share('header_contact', $arr_contact);

        //footer
        $footer_emergency = \DB::table('footer_emergency')->first();
        $footer_emergency->img = \App\Helpers\Helper::appsetting('footer_emergency_img_path') . "/" . $footer_emergency->img;
        \View::share('footer_emergency', $footer_emergency);
        
        //footer partner
        $partners = \DB::table('footer_partner')->orderBy('order','asc')->get();
        \View::share('footer_partner', $partners);
        \View::share('footer_partner_img_path', \App\Helpers\Helper::appsetting('footer_partner_img_path') );
        
        //footer bottom
        $footer_bottom = \DB::table('footer_bottom')->first();
        if ($footer_bottom->img != "") {
            $footer_bottom->img = \App\Helpers\Helper::appsetting('footer_img_path') . "/" . $footer_bottom->img;
        }
        \View::share('footer_bottom', $footer_bottom);
        
        $office_1 = \DB::table('contact_office')->find($footer_bottom->office_1);
        \View::share('office_1', $office_1);
        $office_2 = \DB::table('contact_office')->find($footer_bottom->office_2);
        \View::share('office_2', $office_2);
        $office_3 = \DB::table('contact_office')->find($footer_bottom->office_3);
        \View::share('office_3', $office_3);
    }

}
