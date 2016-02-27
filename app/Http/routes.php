<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('home',function(){
       return view('index'); 
    });
    Route::get('about',function(){
        $data = array('pagetitle'=>'about us');
       return view('about',$data);
    });
    Route::get('services',function(){
        $data = array('pagetitle'=>'Services');
       return view('service',$data); 
    });
    Route::get('services/detail/gas-industri',function(){
        $data = array('pagetitle'=>'Gas Industri');
       return view('gasindustri',$data); 
    });
    Route::get('services/detail/gas-medis',function(){
        $data = array('pagetitle'=>'Gas Medis');
       return view('gasmedis',$data); 
    });
    Route::get('services/detail/suku-cadang',function(){
        $data = array('pagetitle'=>'Suku Cadang');
       return view('sukucadang',$data); 
    });
    Route::get('products',function(){
        $data = array('pagetitle'=>'Products');
       return view('product',$data); 
    });
    Route::get('gallery',function(){
        $data = array('pagetitle'=>'Gallery');
       return view('gallery',$data); 
    });
    Route::get('blog',function(){
        $data = array('pagetitle'=>'Blogs');
       return view('blog',$data); 
    });
    Route::get('contact-us',function(){
        $data = array('pagetitle'=>'Contact Us');
       return view('contact',$data); 
    });
});
