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
        $is_show_new_product = \App\Helpers\Helper::appsetting('product_show_latest');
        $new_product_num = \App\Helpers\Helper::appsetting('product_show_latest_num');
        $new_product_text = \App\Helpers\Helper::appsetting('product_new_text');
        $new_product = \DB::table('VIEW_PRODUK')->orderBy('created_at','desc')->take($new_product_num)->get();
        
        $product_img_path = \App\Helpers\Helper::appsetting('product_img_path');
        
        $show_price = \App\Helpers\Helper::appsetting('product_price_enable');
        
        $data=[
            'pagetitle' => $pagetitle,
            'kategori' => $kategori,
            'products' => $product,
            'current_kategori' => $first_kategori,
            'product_img_path' => $product_img_path,
            'show_price' => $show_price,
            'is_show_new_product' => $is_show_new_product,
            'new_product' => $new_product,
            'new_product_num' => $new_product_num,
            'new_product_text' => $new_product_text,
        ];
        
        return view('frontend/products/product', $data);
    }
    
    public function byCategory($id,Request $request){
        $menu = \DB::table('homepage_menu')->whereUrl($this->url_name)->first();
        $pagetitle =  $menu->nama;
        
        $kategori = \DB::table('kategori')->whereAktif('Y')->orderBy('order','asc')->get();
        
        $current_kategori = \DB::table('kategori')->find($id);
        $product = \DB::table('produk')->whereAktif('Y')->whereKategoriId($current_kategori->id)->get();
        
        $product_img_path = \App\Helpers\Helper::appsetting('product_img_path');
        
        $show_price = \App\Helpers\Helper::appsetting('product_price_enable');
        
        $is_show_new_product = \App\Helpers\Helper::appsetting('product_show_latest');
        $new_product_num = \App\Helpers\Helper::appsetting('product_show_latest_num');
        $new_product_text = \App\Helpers\Helper::appsetting('product_new_text');
        $new_product = \DB::table('VIEW_PRODUK')->orderBy('created_at','desc')->take($new_product_num)->get();
        
        $data=[
            'pagetitle' => $pagetitle,
            'kategori' => $kategori,
            'products' => $product,
            'current_kategori' => $current_kategori,
            'product_img_path' => $product_img_path,
            'show_price' => $show_price,
            'is_show_new_product' => $is_show_new_product,
            'new_product' => $new_product,
            'new_product_num' => $new_product_num,
            'new_product_text' => $new_product_text,
        ];
        
        return view('frontend/products/product', $data);
    }
    
    public function detail($id, Request $request){
        $menu = \DB::table('homepage_menu')->whereUrl($this->url_name)->first();
        $pagetitle =  $menu->nama;
        
        $kategori = \DB::table('kategori')->whereAktif('Y')->orderBy('order','asc')->get();
        
        $product_img_path = \App\Helpers\Helper::appsetting('product_img_path');
        
        $show_price = \App\Helpers\Helper::appsetting('product_price_enable');
        
        $product = \DB::table('VIEW_PRODUK')->find($id);
        $current_kategori = \DB::table('kategori')->find($product->kategori_id);
        
        $show_related = \App\Helpers\Helper::appsetting('product_show_related');
        $show_related_num = 0;
        $related_products = null;
        if($show_related == 'Y'){
            $show_related_num = \App\Helpers\Helper::appsetting('product_show_related_num');
            $related_products = \DB::table('VIEW_PRODUK')
                                ->where('id','!=',$product->id)
                                ->whereKategoriId($product->kategori_id)
                                ->take($show_related_num)
                                ->get();
        }
        $related_product_text = \App\Helpers\Helper::appsetting('product_related_text');
        
        $is_show_new_product = \App\Helpers\Helper::appsetting('product_show_latest');
        $new_product_num = \App\Helpers\Helper::appsetting('product_show_latest_num');
        $new_product_text = \App\Helpers\Helper::appsetting('product_new_text');
        $new_product = \DB::table('VIEW_PRODUK')->orderBy('created_at','desc')->take($new_product_num)->get();
                
        
        $data = [
            'pagetitle' => $pagetitle,
            'kategori' => $kategori,
            'current_kategori' => $current_kategori,
            'product_img_path' => $product_img_path,
            'show_price' => $show_price,
            'product' => $product,
            'show_related' => $show_related,
            'show_related_num' => $show_related_num,
            'related_products' => $related_products,
            'is_show_new_product' => $is_show_new_product,
            'new_product' => $new_product,
            'new_product_num' => $new_product_num,
            'new_product_text' => $new_product_text,
            'related_product_text' => $related_product_text,
        ];
        return view('frontend/products/detail',$data);
    }

}
