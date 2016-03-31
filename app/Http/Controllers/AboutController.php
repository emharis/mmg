<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller {

    public function index() {
        $data = array('pagetitle' => 'about us');
        return view('about', $data);    
    }

}
