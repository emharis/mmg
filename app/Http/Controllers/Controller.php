<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController {

    use AuthorizesRequests,
        DispatchesJobs,
        ValidatesRequests;

    public function __construct() {
        // data menu untuk header tiap halaman
        $menu = \DB::table('homepage_menu')
                ->whereAktif('Y')
                ->orderBy('order','asc')
                ->get();
        \View::share('menu', $menu);
        //social media
        $sosmed = \DB::table('header_social_media')
                ->whereAktif('Y')
                ->orderBy('order','asc')
                ->get();
        \View::share('sosmed', $sosmed);
        //header contact
        $contact = \DB::table('header_contact')->select(['type','value'])->whereAktif('Y')->get();
        $arr_contact=array();
        foreach($contact as $dt){
            $arr_contact[$dt->type] = $dt->value;
        }
        \View::share('header_contact', $arr_contact);
    }

}
