<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomepageController extends Controller {

    public function index() {
        $imgsliders = \DB::table('homepage_slider')
                ->orderBy('order', 'asc')
                ->get();
        //midcontent
        $leftmidcontent = \DB::table('homepage_midcontent')
                ->wherePosition('left')
                ->first();
        $midmidcontent = \DB::table('homepage_midcontent')
                ->wherePosition('mid')
                ->first();
        $rightmidcontent = \DB::table('homepage_midcontent')
                ->wherePosition('right')
                ->first();

        //layanan
        $layanan = \DB::table('homepage_layanan')
                ->orderBy('order', 'asc')
                ->get();

        return view('backend.pages.homepage.index', [
            'imgsliders' => $imgsliders,
            'leftmidcontent' => $leftmidcontent,
            'midmidcontent' => $midmidcontent,
            'rightmidcontent' => $rightmidcontent,
            'layanan' => $layanan
        ]);
    }

    public function newSlider(Request $request) {
        //get fille
        $file = $request->file('img');
        $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
        if ($file->isValid()) {
            $file->move(\App\Helpers\Helper::appsetting('homepage_slider_img_path'), $filename);
        }

        $type = $request->input('slider_type');

        //get max order 
        $order = \DB::table('homepage_slider')->max('order');

        $id = \DB::table('homepage_slider')->insertGetId([
            'img' => $filename,
            'aktif' => 'Y',
            'order' => $order + 1,
            'type' => $type,
            'title' => $request->input('title-type-' . $type),
            'title_color' => $request->input('color-title-type-' . $type),
            'second_title' => $request->input('second-title-type-' . $type),
            'second_title_color' => $request->input('color-second-title-type-' . $type),
            'subtitle' => $request->input('subtitle-type-' . $type),
            'subtitle_color' => $request->input('color-subtitle-type-' . $type),
        ]);

        if ($type == 3) {
            \DB::table('homepage_slider')
                    ->where('id', '=', $id)
                    ->update([
                        'list_item_1' => $request->input('list-item-1-type-3'),
                        'list_item_1_color' => $request->input('color-list-item-1-type-3'),
                        'list_item_2' => $request->input('list-item-2-type-3'),
                        'list_item_2_color' => $request->input('color-list-item-2-type-3'),
                        'list_item_3' => $request->input('list-item-3-type-3'),
                        'list_item_3_color' => $request->input('color-list-item-3-type-3'),
                        'list_item_4' => $request->input('list-item-4-type-3'),
                        'list_item_4_color' => $request->input('color-list-item-4-type-3'),
                        'list_item_5' => $request->input('list-item-5-type-3'),
                        'list_item_5_color' => $request->input('color-list-item-5-type-3'),
            ]);
        }

        if ($request->ajax()) {
            $newslider = \DB::table('homepage_slider')->find($id);
//            $newslider['imgpath']= \App\Helpers\Helper::appsetting('homepage_slider_img_path');
            $newslider->imgpath = \App\Helpers\Helper::appsetting('homepage_slider_img_path');
            return json_encode($newslider);
        } else {
            return redirect('admin/pages/homepage');
        };
    }

    public function editSlider($id) {
        $slider = \DB::table('homepage_slider')
                ->find($id);
        return view('backend.pages.homepage.imageslider.editslider', [
            'data' => $slider
        ]);
    }

    public function updateSlider(Request $request) {
        $slider = \DB::table('homepage_slider')->find($request->input('slider_id'));
        $slider->title = $request->input('title');
        $type = $request->input('slider_type');

        //cek apakah ada file yang di upload

        if ($request->hasFile('img')) {
            //hapus dulu file yang lama
            \File::delete(\App\Helpers\Helper::appsetting('homepage_slider_img_path') . '/' . $slider->img);

            $file = $request->file('img');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('homepage_slider_img_path'), $filename);
            }

            //update nama file di database
            \DB::table('homepage_slider')
                    ->whereId($slider->id)
                    ->update([
                        'img' => $filename
            ]);
        }

        \DB::table('homepage_slider')
                ->whereId($slider->id)
                ->update([
                    'title' => $request->input('title-type-' . $type),
                    'title_color' => $request->input('color-title-type-' . $type),
                    'second_title' => $request->input('second-title-type-' . $type),
                    'second_title_color' => $request->input('color-second-title-type-' . $type),
                    'subtitle' => $request->input('subtitle-type-' . $type),
                    'subtitle_color' => $request->input('color-subtitle-type-' . $type),
        ]);

        if ($type == 3) {
            \DB::table('homepage_slider')
                    ->where('id', '=', $id)
                    ->update([
                        'list_item_1' => $request->input('list-item-1-type-3'),
                        'list_item_1_color' => $request->input('color-list-item-1-type-3'),
                        'list_item_2' => $request->input('list-item-2-type-3'),
                        'list_item_2_color' => $request->input('color-list-item-2-type-3'),
                        'list_item_3' => $request->input('list-item-3-type-3'),
                        'list_item_3_color' => $request->input('color-list-item-3-type-3'),
                        'list_item_4' => $request->input('list-item-4-type-3'),
                        'list_item_4_color' => $request->input('color-list-item-4-type-3'),
                        'list_item_5' => $request->input('list-item-5-type-3'),
                        'list_item_5_color' => $request->input('color-list-item-5-type-3'),
            ]);
        }
//        $slider->title = $request->input('title_color');
//        $slider->title = $request->input('second_title');
//        $slider->title = $request->input('second_title_color');
//        $slider->title = $request->input('subtitle');
//        $slider->title = $request->input('subtitle_color');
//        $slider->save();

        if (!$request->ajax()) {
            return redirect('admin/pages/homepage');
        };
    }

    public function deleteSlider($id, Request $request) {
        //delete file
        $slider = \DB::table('homepage_slider')
                ->whereId($id)
                ->first();

//        \Storage::delete( \App\Helpers\Helper::appsetting('homepage_slider_img_path') .'/' . $slider->img);
        \File::delete(\App\Helpers\Helper::appsetting('homepage_slider_img_path') . '/' . $slider->img);

        //rubah order data yang lain
        $sliders = \DB::table('homepage_slider')
                ->where('order', '>', $slider->order)
                ->get();
        foreach ($sliders as $dt) {
            \DB::table('homepage_slider')
                    ->whereId($dt->id)
                    ->update([
                        'order' => $dt->order - 1
            ]);
        }

        //delete from database
        \DB::table('homepage_slider')
                ->whereId($id)
                ->delete();
        if (!$request->ajax()) {
            return redirect('admin/pages/homepage');
        };
    }

    public function sliderShiftUp($id, Request $request) {
        $slider = \DB::table('homepage_slider')->find($id);
        if ($slider->order > 1) {
            $upper = \DB::table('homepage_slider')
                    ->whereOrder($slider->order - 1)
                    ->first();

            //rubah posisi slider
            \DB::table('homepage_slider')
                    ->whereId($upper->id)
                    ->update(['order' => $slider->order]);

            \DB::table('homepage_slider')
                    ->whereId($slider->id)
                    ->update(['order' => $slider->order - 1]);
        }

        if ($request->ajax()) {
            
        } else {
            return redirect('admin/pages/homepage');
        };
    }

    public function sliderShiftDown($id) {
        $slider = \DB::table('homepage_slider')->find($id);
        $maxorder = \DB::table('homepage_slider')->max('order');
        if ($slider->order < $maxorder) {
            $lower = \DB::table('homepage_slider')
                    ->whereOrder($slider->order + 1)
                    ->first();

            //rubah posisi slider
            \DB::table('homepage_slider')
                    ->whereId($lower->id)
                    ->update(['order' => $slider->order]);

            \DB::table('homepage_slider')
                    ->whereId($slider->id)
                    ->update(['order' => $slider->order + 1]);
        }

//        if ($request->ajax()) {
//            
//        } else {
//            return redirect('admin/pages/homepage');
//        };
    }

    /**
     * Midcontent Section
     */
    public function updateMidcontent(Request $request) {
        $position = $request->input('position');
        $midcontent = \DB::table('homepage_midcontent')
                ->wherePosition($position)
                ->first();
        //get fille
        $filename = $midcontent->img;
        if ($request->hasFile('midcontent_img')) {
            $file = $request->file('midcontent_img');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('homepage_slider_img_path'), $filename);
            }
        }


        \DB::table('homepage_midcontent')
                ->wherePosition($position)
                ->update([
                    'title' => $request->input('title'),
                    'content' => $request->input('content'),
                    'img' => $filename
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/homepage');
        };
    }

    public function deleteMidcontentImg($position) {
        $img = \DB::table('homepage_midcontent')
                        ->wherePosition($position)
                        ->first()->img;
        \File::delete(\App\Helpers\Helper::appsetting('homepage_slider_img_path') . '/' . $img);
        //update database
        \DB::table('homepage_midcontent')
                ->wherePosition($position)
                ->update([
                    'img' => ''
        ]);
    }

    /**
     * End Midcontent Section
     */

    /**
     * Layanan Section
     */
    public function newLayanan(Request $request) {
        echo 'simpan data layanan baru';

        $type = $request->input('layanan_type');
        //get order terakhir
        $order = \DB::table('homepage_layanan')->max('order');

        $id = \DB::table('homepage_layanan')
                ->insertGetId([
            'type' => $type,
            'title' => $request->input('title-type-' . $type),
            'content' => $request->input('content-type-' . $type),
            'order' => $order + 1
        ]);

//        cek apakah punya gambar
        if ($request->hasFile('img-bottom-type-1')) {
            $file = $request->file('img-bottom-type-1');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('homepage_layanan_img_path'), $filename);
            }
            //update ke database
            \DB::table('homepage_layanan')
                    ->whereId($id)
                    ->update([
                        'img_1' => $filename
            ]);
        }
        if ($request->hasFile('img-side-type-1')) {
            $file = $request->file('img-side-type-1');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('homepage_layanan_img_path'), $filename);
            }
            //update ke database
            \DB::table('homepage_layanan')
                    ->whereId($id)
                    ->update([
                        'img_2' => $filename
            ]);
        }
        if ($request->hasFile('img-type-2')) {
            $file = $request->file('img-type-2');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('homepage_layanan_img_path'), $filename);
            }
            //update ke database
            \DB::table('homepage_layanan')
                    ->whereId($id)
                    ->update([
                        'img_1' => $filename
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/homepage');
        }else{
            return json_encode(\DB::table('homepage_layanan')->find($id));
        };
    }

    /**
     * End Of Layanan Section
     */
}
