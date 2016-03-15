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
    Route::get('/', function() {
        return redirect('admin/login');
    });

    Route::get('login', function () {
        return view('backend.login');
    });

    Route::get('home', function () {
//        echo App\Helpers\Helper::appsetting('homepage_slider_img_path');
        return view('backend.home');
    });

    //Pages >> Homepage >> Image Slider
    Route::get('pages/homepage', ['as' => 'admin.pages.homepage', 'uses' => 'Pages\HomepageController@index']);
    Route::post('pages/homepage/new-slider', ['as' => 'admin.pages.homepage.new-slider', 'uses' => 'Pages\HomepageController@newSlider']);
    Route::get('pages/homepage/slider-shift-up/{id}', ['as' => 'admin.pages.homepage.slider-shift-up', 'uses' => 'Pages\HomepageController@sliderShiftUp']);
    Route::get('pages/homepage/slider-shift-down/{id}', ['as' => 'admin.pages.homepage.slider-shift-down', 'uses' => 'Pages\HomepageController@sliderShiftDown']);
    Route::get('pages/homepage/delete-slider/{id}', ['as' => 'admin.pages.homepage.delete-slider', 'uses' => 'Pages\HomepageController@deleteSlider']);
    Route::get('pages/homepage/edit-slider/{id}', ['as' => 'admin.pages.homepage.edit-slider', 'uses' => 'Pages\HomepageController@editSlider']);
    Route::post('pages/homepage/update-slider', ['as' => 'admin.pages.homepage.update-slider', 'uses' => 'Pages\HomepageController@updateSlider']);
    //Pages >> Homepage >> Midcontent
    Route::post('pages/homepage/update-midcontent', ['as' => 'admin.pages.homepage.update-midcontent', 'uses' => 'Pages\HomepageController@updateMidcontent']);
    Route::get('pages/homepage/delete-midcontent-img/{position}', ['as' => 'admin.pages.homepage.delete-midcontent-img', 'uses' => 'Pages\HomepageController@deleteMidcontentImg']);
    //pages >> Homepage >> Layanan
    Route::post('pages/homepage/new-layanan', ['as' => 'admin.pages.homepage.new-layanan', 'uses' => 'Pages\HomepageController@newLayanan']);
    Route::get('pages/homepage/layanan-shift-up/{id}', ['as' => 'admin.pages.homepage.layanan-shift-up', 'uses' => 'Pages\HomepageController@layananShiftUp']);
    Route::get('pages/homepage/layanan-shift-down/{id}', ['as' => 'admin.pages.homepage.layanan-shift-down', 'uses' => 'Pages\HomepageController@layananShiftDown']);
    Route::get('pages/homepage/delete-layanan/{id}', ['as' => 'admin.pages.homepage.delete-layanan', 'uses' => 'Pages\HomepageController@deleteLayanan']);
    Route::get('pages/homepage/edit-layanan/{id}', ['as' => 'admin.pages.homepage.edit-layanan', 'uses' => 'Pages\HomepageController@editLayanan']);
    Route::post('pages/homepage/update-section-layanan', ['as' => 'admin.pages.homepage.update-section-layanan', 'uses' => 'Pages\HomepageController@updateSectionLayanan']);
    Route::post('pages/homepage/update-layanan', ['as' => 'admin.pages.homepage.update-layanan', 'uses' => 'Pages\HomepageController@updateLayanan']);
    //pages >> Homepage >> Gallery
    Route::post('pages/homepage/update-section-gallery', ['as' => 'admin.pages.homepage.update-section-gallery', 'uses' => 'Pages\HomepageController@updateSectionGallery']);
    Route::post('pages/homepage/set-image-gallery', ['as' => 'admin.pages.homepage.set-image-gallery', 'uses' => 'Pages\HomepageController@setImageGallery']);
    //pages >> Homepage >> Blog
    Route::post('pages/homepage/update-section-title-blog', ['as' => 'admin.pages.homepage.update-section-title-blog', 'uses' => 'Pages\HomepageController@updateSectionTitleBlog']);

    //Pages >> Header & Footer >> SOSMED
    Route::get('pages/headfoot', ['as' => 'admin.pages.headfoot', 'uses' => 'Pages\HeadfootController@index']);
    Route::get('pages/headfoot/set-aktif/{id}/{aktif}', ['as' => 'admin.pages.headfoot.set-aktif', 'uses' => 'Pages\HeadfootController@setAktif']);
    Route::get('pages/headfoot/shift-up/{id}', ['as' => 'admin.pages.headfoot.shift-up', 'uses' => 'Pages\HeadfootController@shiftUp']);
    Route::get('pages/headfoot/shift-down/{id}', ['as' => 'admin.pages.headfoot.shift-down', 'uses' => 'Pages\HeadfootController@shiftDown']);
    Route::get('pages/headfoot/update-sosmed/{id}/{val}', ['as' => 'admin.pages.headfoot.update-sosmed', 'uses' => 'Pages\HeadfootController@updateSosmed']);
    Route::post('pages/headfoot/update-contact', ['as' => 'admin.pages.headfoot.update-contact', 'uses' => 'Pages\HeadfootController@updateContact']);
    //Pages >> Header & Footer >> Contact
    Route::get('pages/headfoot/set-aktif-contact/{id}/{aktif}', ['as' => 'admin.pages.headfoot.set-aktif-contact', 'uses' => 'Pages\HeadfootController@setAktifContact']);
    Route::post('pages/headfoot/update-menu-title', ['as' => 'admin.pages.headfoot.update-menu-title', 'uses' => 'Pages\HeadfootController@updateMenuTitle']);
    Route::post('pages/headfoot/update-menu-position', ['as' => 'admin.pages.headfoot.update-menu-position', 'uses' => 'Pages\HeadfootController@updateMenuPosition']);
    Route::get('pages/headfoot/shift-up-menu/{id}', ['as' => 'admin.pages.headfoot.shift-up-menu', 'uses' => 'Pages\HeadfootController@shiftUpMenu']);
    Route::get('pages/headfoot/shift-down-menu/{id}', ['as' => 'admin.pages.headfoot.shift-down-menu', 'uses' => 'Pages\HeadfootController@shiftDownMenu']);
    Route::get('pages/headfoot/update-aktif-menu/{id}/{aktif}', ['as' => 'admin.pages.headfoot.update-aktif-menu', 'uses' => 'Pages\HeadfootController@updateAktifMenu']);
    //Pages >> Header & Footer >> Emergency
    Route::post('pages/headfoot/update-emergency', ['as' => 'admin.pages.headfoot.update-emergency', 'uses' => 'Pages\HeadfootController@updateEmergency']);
    //Pages >> Header & Footer >> partner
    Route::post('pages/headfoot/new-partner', ['as' => 'admin.pages.headfoot.new-partner', 'uses' => 'Pages\HeadfootController@newPartner']);
    Route::get('pages/headfoot/shift-up-partner/{id}', ['as' => 'admin.pages.headfoot.shift-up-partner', 'uses' => 'Pages\HeadfootController@shiftUpPartner']);
    Route::get('pages/headfoot/shift-down-partner/{id}', ['as' => 'admin.pages.headfoot.shift-down-partner', 'uses' => 'Pages\HeadfootController@shiftDownPartner']);
    Route::get('pages/headfoot/delete-partner/{id}', ['as' => 'admin.pages.headfoot.delete-partner', 'uses' => 'Pages\HeadfootController@deletePartner']);
    Route::get('pages/headfoot/update-aktif-partner/{id}/{aktif}', ['as' => 'admin.pages.headfoot.update-aktif-partner', 'uses' => 'Pages\HeadfootController@updateAktifPartner']);
    Route::get('pages/headfoot/edit-partner/{id}', ['as' => 'admin.pages.headfoot.edit-partner', 'uses' => 'Pages\HeadfootController@editPartner']);
    Route::post('pages/headfoot/update-partner', ['as' => 'admin.pages.headfoot.update-partner', 'uses' => 'Pages\HeadfootController@updatePartner']);
    
    //Pages >> About
    Route::get('pages/about', ['as' => 'admin.pages.about', 'uses' => 'Pages\AboutController@index']);
    Route::get('pages/about/shift-up-desc/{id}', ['as' => 'admin.pages.about.shift-up-desc', 'uses' => 'Pages\AboutController@shiftUpDesc']);
    Route::get('pages/about/shift-down-desc/{id}', ['as' => 'admin.pages.about.shift-down-desc', 'uses' => 'Pages\AboutController@shiftDownDesc']);
    Route::get('pages/about/delete-desc/{id}', ['as' => 'admin.pages.about.delete-desc', 'uses' => 'Pages\AboutController@deleteDesc']);
//    Route::post('pages/about/update-about-desc', ['as' => 'admin.pages.about.update-about-desc', 'uses' => 'Pages\AboutController@updateAboutDesc']);
    Route::post('pages/about/new-desc', ['as' => 'admin.pages.about.new-desc', 'uses' => 'Pages\AboutController@newDesc']);
    Route::get('pages/about/edit/{id}', ['as' => 'admin.pages.about.edit', 'uses' => 'Pages\AboutController@edit']);

    //Pages >> Product >> Kateori
    Route::get('pages/product', ['as' => 'admin.pages.product', 'uses' => 'Pages\ProductController@index']);
    Route::post('pages/product/new-kategori', ['as' => 'admin.pages.product.new-kategori', 'uses' => 'Pages\ProductController@newKategori']);
    Route::get('pages/product/edit-kategori/{id}', ['as' => 'admin.pages.product.edit-kategori', 'uses' => 'Pages\ProductController@editKategori']);
    Route::post('pages/product/update-kategori', ['as' => 'admin.pages.product.update-kategori', 'uses' => 'Pages\ProductController@updateKategori']);
    Route::get('pages/product/delete-kategori/{id}', ['as' => 'admin.pages.product.delete-kategori', 'uses' => 'Pages\ProductController@deleteKategori']);
    Route::get('pages/product/shift-up-kategori/{id}', ['as' => 'admin.pages.product.shift-up-kategori', 'uses' => 'Pages\ProductController@shiftUpKategori']);
    Route::get('pages/product/shift-down-kategori/{id}', ['as' => 'admin.pages.product.shift-down-kategori', 'uses' => 'Pages\ProductController@shiftDownKategori']);
    Route::get('pages/product/kategori', ['as' => 'admin.pages.product.kategori', 'uses' => 'Pages\ProductController@kategori']);    
    //Pages >> Product >> Produk
    Route::post('pages/product/new-produk', ['as' => 'admin.pages.product.new-produk', 'uses' => 'Pages\ProductController@newProduk']);

    Route::get('test', function() {
        $img = \DB::table('homepage_gallery')->lists('img', 'img_no');
        print_r($img);
    });

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
