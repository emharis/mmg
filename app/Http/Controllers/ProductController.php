<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends FrontController {
    
    private $url_name = 'products';

    public function index(Request $request) {
        
        $menu = \DB::table('homepage_menu')->whereUrl($this->url_name)->first();
        $pagetitle =  $menu->nama;
        
        $kategori = \DB::table('kategori')->whereAktif('Y')->orderBy('order','asc')->get();
        
        $first_kategori = \DB::table('kategori')->orderBy('order','asc')->first();
        $product = \DB::table('produk')->whereAktif('Y')->whereKategoriId($first_kategori->id)->get();
        
        $product_img_path = \App\Helpers\Helper::appsetting('product_img_path');
        
        $show_price = \App\Helpers\Helper::appsetting('product_price_enable');
        
        $data=[
            'pagetitle' => $pagetitle,
            'kategori' => $kategori,
            'products' => $product,
            'current_kategori' => $first_kategori,
            'product_img_path' => $product_img_path,
            'show_price' => $show_price,
        ];
        
        return view('product', $data);
    }
    
    public function byCategory($id,Request $request){
        $menu = \DB::table('homepage_menu')->whereUrl($this->url_name)->first();
        $pagetitle =  $menu->nama;
        
        $kategori = \DB::table('kategori')->whereAktif('Y')->orderBy('order','asc')->get();
        
        $current_kategori = \DB::table('kategori')->find($id);
        $product = \DB::table('produk')->whereAktif('Y')->whereKategoriId($current_kategori->id)->get();
        
        $product_img_path = \App\Helpers\Helper::appsetting('product_img_path');
        
        $show_price = \App\Helpers\Helper::appsetting('product_price_enable');
        
        $data=[
            'pagetitle' => $pagetitle,
            'kategori' => $kategori,
            'products' => $product,
            'current_kategori' => $current_kategori,
            'product_img_path' => $product_img_path,
            'show_price' => $show_price,
        ];
        
        return view('product', $data);
    }

}
