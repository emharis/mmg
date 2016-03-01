<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomepageController extends Controller {

    public function index() {
        $imgsliders = \DB::table('homepage_slider')->orderBy('order', 'asc')->get();
        return view('backend.pages.homepage.index', [
            'imgsliders' => $imgsliders
        ]);
    }
    
    public function newSlider(Request $request){
        if( $request->ajax()){
            echo 'ajax';
        }else{
            echo 'classic method';
        };
    }

}
