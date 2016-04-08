<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends FrontController {

    public function index(Request $request) {
        $menu = \DB::table('homepage_menu')->whereUrl($request->path())->first();
        $pagetitle =  $menu->nama;
        
        $about = \DB::table('about_description')->whereAktif('Y')->orderBy('order','asc')->get();
        foreach($about as $dt){
            if ($dt->type == "LS"){
                $dt->list = \DB::table('about_description_list_item')->where('about_description_id','=',$dt->id)->get();
            }
        }
        $about_img_path = \App\Helpers\Helper::appsetting('about_page_description_img_path');
        
        $data = array(
            'pagetitle' => $pagetitle,
            'about' => $about,
            'about_img_path' => $about_img_path,
        );
        return view('about', $data);
    }

}
