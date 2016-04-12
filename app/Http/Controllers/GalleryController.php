<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends FrontController {
    
    private $url_name = 'gallery';

    public function index(Request $request) {
        $menu = \DB::table('homepage_menu')->whereUrl($this->url_name)->first();
        $pagetitle =  $menu->nama;
        
        $kategori = \DB::table('gallery_kategori')->orderBy('order','asc')->get();        
        $gallery = \DB::table('gallery')->orderByRaw('rand()')->get();        
        $gallery_img_path = \App\Helpers\Helper::appsetting('gallery_img_path');
        
        $data = array(
            'pagetitle' => $pagetitle,
            'kategori' => $kategori,
            'gallery' => $gallery,            
            'gallery_img_path' => $gallery_img_path,            
        );
        return view('frontend.gallery.index', $data);
    }

}
