<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HeadfootController extends Controller
{
    public function index(){
        $sosmed = \DB::table('header_social_media')->orderBy('order','asc')->get();
        
        return view('backend.pages.headfoot.index',[
            'sosmed' => $sosmed
        ]);
    }
}
