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
    Route::get('home', function() {
        return view('index');
    });
    Route::get('about', function() {
        $data = array('pagetitle' => 'about us');
        return view('about', $data);
    });
    Route::get('services', function() {
        $data = array('pagetitle' => 'Services');
        return view('service', $data);
    });
    Route::get('services/detail/gas-industri', function() {
        $data = array('pagetitle' => 'Gas Industri');
        return view('gasindustri', $data);
    });
    Route::get('services/detail/gas-medis', function() {
        $data = array('pagetitle' => 'Gas Medis');
        return view('gasmedis', $data);
    });
    Route::get('services/detail/suku-cadang', function() {
        $data = array('pagetitle' => 'Suku Cadang');
        return view('sukucadang', $data);
    });
    Route::get('products', function() {
        $data = array('pagetitle' => 'Products');
        return view('product', $data);
    });
    Route::get('gallery', function() {
        $data = array('pagetitle' => 'Gallery');
        return view('gallery', $data);
    });
    Route::get('blog', function() {
        $data = array('pagetitle' => 'Blogs');
        return view('blog', $data);
    });
    Route::get('contact-us', function() {
        $data = array('pagetitle' => 'Contact Us');
        return view('contact', $data);
    });
});

//Backend
Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function () {
    Route::get('/',function(){
       return redirect('admin/login'); 
    });
    
    Route::get('login',function (){
        return view('backend.login');
    });
    
    Route::get('home',function (){
        return view('backend.home');
    });
    
    //Pages >> Homepage
    Route::get('pages/homepage',['as'=>'admin.pages.homepage','uses'=>'Pages\HomepageController@index']);
    Route::post('pages/homepage/new-slider',['as'=>'admin.pages.homepage.new-slider','uses'=>'Pages\HomepageController@newSlider']);
    
    //Pages >> About
    Route::get('pages/about',['as'=>'admin.pages.about','uses'=>'Pages\AboutController@index']);
    
    
    
    
//    Route::group(['middleware' => 'auth'], function () {
//        // Dashboard
//        Route::get('/', ['as' => 'admin.dashboard', 'uses' => 'DashboardController@index']);
//
//        // Settings
//        Route::get('settings', ['as' => 'admin.settings.edit', 'uses' => 'SettingsController@edit']);
//        Route::put('settings', ['as' => 'admin.settings.update', 'uses' => 'SettingsController@update']);
//
//        // Posts
//        Route::resource('posts', 'PostsController');
//        Route::get('posts/delete/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsController@destroy']);
//
//        // Works
//        Route::resource('works', 'WorksController');
//        Route::get('works/delete/{id}', ['as' => 'admin.works.destroy', 'uses' => 'WorksController@destroy']);
//
//        // Customers
//        Route::resource('customers', 'CustomersController');
//        Route::get('customers/delete/{id}', ['as' => 'admin.customers.destroy', 'uses' => 'CustomersController@destroy']);
//
//        // Users
//        Route::resource('users', 'UsersController');
//        Route::get('users/delete/{id}', ['as' => 'admin.users.destroy', 'uses' => 'UsersController@destroy']);
//
//        // Tags
//        Route::resource('tags', 'TagsController');
//        Route::get('tags/delete/{id}', ['as' => 'admin.tags.destroy', 'uses' => 'TagsController@destroy']);
//        Route::get('tags.json', ['as' => 'admin.tags.indexRaw', 'uses' => 'TagsController@indexRaw']);
//
//        // Profile
//        Route::get('profile', ['as' => 'admin.auth.profile', 'uses' => 'Auth\ProfileController@index']);
//    });

//    // Authentication
//    Route::get('auth/login', ['as' => 'admin.auth.login', 'middleware' => 'guest', 'uses' => 'Auth\AuthController@getLogin']);
//    Route::post('auth/login', ['as' => 'admin.auth.login', 'middleware' => 'guest', 'uses' => 'Auth\AuthController@postLogin']);
//    Route::get('auth/logout', ['as' => 'admin.auth.logout', 'middleware' => 'auth', 'uses' => 'Auth\AuthController@getLogout']);
//
//    // Password Reset Request
//    Route::get('auth/remind', ['as' => 'admin.auth.remind', 'middleware' => 'guest', 'uses' => 'Auth\PasswordController@getEmail']);
//    Route::post('auth/remind', ['as' => 'admin.auth.remind', 'middleware' => 'guest', 'uses' => 'Auth\PasswordController@postEmail']);
//
//    // Password Reset
//    Route::get('auth/reset/{token}', ['as' => 'admin.auth.reset', 'middleware' => 'guest', 'uses' => 'Auth\PasswordController@getReset']);
//    Route::post('auth/reset', ['as' => 'admin.auth.reset', 'middleware' => 'guest', 'uses' => 'Auth\PasswordController@postReset']);
});
