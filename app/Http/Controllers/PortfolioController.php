<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PortfolioController extends FrontController {
    
    private $url_name = 'portfolio';

    public function index(Request $request) {
        $menu = \DB::table('homepage_menu')->whereUrl($this->url_name)->first();
        $pagetitle =  $menu->nama;
        
        $portfolio = \DB::table('portofolio')->get();
        $portfolio_img_path = \App\Helpers\Helper::appsetting('portofolio_img_path');
        
        $data = array(
            'pagetitle' => $pagetitle,
            'portfolio' => $portfolio,
            'portfolio_img_path' => $portfolio_img_path,
        );
        return view('frontend.portfolio.index', $data);
    }

}
