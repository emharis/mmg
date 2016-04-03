<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends FrontController {

    public function index() {
        //slider
        $slider = \DB::table('homepage_slider')
                ->orderBy('order', 'asc')
                ->get();
        $slider_img_path = \App\Helpers\Helper::appsetting('homepage_slider_img_path');

        //midcontent
        $midcontents_left = \DB::table('homepage_midcontent')
                ->wherePosition('left')
                ->first();
        $midcontents_right = \DB::table('homepage_midcontent')
                ->wherePosition('right')
                ->first();
        $midcontents_mid = \DB::table('homepage_midcontent')
                ->wherePosition('mid')
                ->first();
        $midcontent_img_path = \App\Helpers\Helper::appsetting('homepage_slider_img_path');

        //LAYANAN
        $layanan_title = \App\Helpers\Helper::appsetting('homepage_layanan_title');
        $layanan_img_path = \App\Helpers\Helper::appsetting('homepage_layanan_img_path');
        $layanan = \DB::table('homepage_layanan')->get();
        
        //AKTIFITAS artau gallery
        $aktifitas_title = \App\Helpers\Helper::appsetting('homepage_gallery_section_title');
        $gals = \DB::table('homepage_gallery')->get();
        $gallery=array();
        foreach($gals as $dt){
            $gallery[$dt->img_no] = \App\Helpers\Helper::appsetting('homepage_gallery_img_path') .'/'.$dt->img;
            $gallery[$dt->img_no . '_title'] = $dt->title;
        }

        return view('index', [
            'slider' => $slider,
            'slider_img_path' => $slider_img_path,
            'midcontent_left' => $midcontents_left,
            'midcontent_right' => $midcontents_right,
            'midcontent_mid' => $midcontents_mid,
            'midcontent_img_path' => $midcontent_img_path,
            'layanan_title' => $layanan_title,
            'layanan_img_path' => $layanan_img_path,
            'layanan' => $layanan,
            'aktifitas_title' => $aktifitas_title,
            'gallery'=>$gallery,
        ]);
    }

}
