<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index(){
        return view('backend.pages.about.index');
    }
}
