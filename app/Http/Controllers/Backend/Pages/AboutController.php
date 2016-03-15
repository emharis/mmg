<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller {

//    public function index() {
//        $about = \DB::table('about_page')->first();
//        return view('backend.pages.about.index', [
//            'about' => $about
//        ]);
//    }
//
//    //update description
//    public function updateAboutDesc(Request $request) {
//        \DB::table('about_page')
//                ->update([
//                    'section_title' => $request->input('about_section_title'),
//                    'first_line_desc' => $request->input('about_first_line_desc'),
//                    'second_line_desc' => $request->input('about_second_line_desc'),
//                    'motto' => $request->input('about_motto'),
//                    'visi' => $request->input('about_visi'),
//        ]);
//
//        if (!$request->ajax()) {
//            return redirect('admin/pages/about');
//        };
//    }

    public function index() {
        $desc = \DB::table('about_description')
                ->orderBy('order', 'asc')
                ->get();
        $section_title = \App\Helpers\Helper::appsetting('about_page_section_title');
        return view('backend.pages.about.index', [
            'section_title' => $section_title,
            'desc' => $desc,
        ]);
    }

    public function newDesc(Request $request) {
        //get last order
        $last_order = \DB::table('about_description')->max('order');

        $type = $request->input('type');

        //input ke database 
        $id = \DB::table('about_description')
                ->insertGetId([
            'type' => $type,
            'title' => $request->input('title'),
            'desc' => ($type == 'NI' ? $request->input('desc_no_image') : $request->input('desc')),
            'order' => $last_order + 1
        ]);

        //cek apakah ada gambar
        if ($request->hasFile('about_img')) {
            $file = $request->file('about_img');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('about_page_description_img_path'), $filename);
            }

            //update ke database image nya
            \DB::table('about_description')
                    ->whereId($id)
                    ->update([
                        'img' => $filename
            ]);
        }

        //CEK LIST ITEM

        if ($type == 'LS') {
            $list_num = $request->input('list_item_num');
            //input kan list item ke tabel list item
            for ($i = 0; $i < $list_num; $i++) {
                $cansave = false;
                
                //cek cansave
                if($request->input('list_item_title_' . ($i + 1)) != '' && $request->input('list_item_desc_' . ($i + 1)) != ''){
                    $cansave = true;
                }
                
                if($cansave) {
                    \DB::table('about_description_list_item')
                            ->insert([
                                'about_description_id' => $id,
                                'title' => $request->input('list_item_title_' . ($i + 1)),
                                'content' => $request->input('list_item_desc_' . ($i + 1)),
                    ]);
                }
            }
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/about');
        };
    }

    public function deleteDesc($id, Request $request) {
        $desc = \DB::table('about_description')->find($id);
        
        if($desc->type == 'IL' || $desc->type == 'IR'){
            //delete file yang ada
            \File::delete(\App\Helpers\Helper::appsetting('about_page_description_img_path') . '/' . $desc->img);
        }
        
        \DB::table('about_description')
                ->whereId($id)
                ->delete();
        
        if (!$request->ajax()) {
            return redirect('admin/pages/about');
        };
    }
    
    public function shiftUpDesc($id,Request $request){
        $tablename = 'about_description';
        $data = \DB::table($tablename)->find($id);
        if ($data->order > 1) {
            $upper = \DB::table($tablename)
                    ->whereOrder($data->order - 1)
                    ->first();

            //rubah posisi slider
            \DB::table($tablename)
                    ->whereId($upper->id)
                    ->update(['order' => $data->order]);

            \DB::table($tablename)
                    ->whereId($data->id)
                    ->update(['order' => $data->order - 1]);
        }

        if ($request->ajax()) {
            
        } else {
            return redirect('admin/pages/about');
        };
    }
    
    public function shiftDownDesc($id,Request $request) {
        $tablename = 'about_description';
        $data = \DB::table($tablename)->find($id);
        $maxorder = \DB::table($tablename)->max('order');
        if ($data->order < $maxorder) {
            $lower = \DB::table($tablename)
                    ->whereOrder($data->order + 1)
                    ->first();

            //rubah posisi slider
            \DB::table($tablename)
                    ->whereId($lower->id)
                    ->update(['order' => $data->order]);

            \DB::table($tablename)
                    ->whereId($data->id)
                    ->update(['order' => $data->order + 1]);
        }

        if ($request->ajax()) {
            
        } else {
            return redirect('admin/pages/about');
        };
    }
    
    //edit about description
    public function edit($id){
        $desc = \DB::table('about_description')->find($id);
        $list = null;
        if($desc->type == 'LS'){
            $list = \DB::table('about_description_list_item')
                    ->where('about_description_id','=',$id)
                    ->get();
        }
        return view('backend.pages.about.edit', [
            'desc' => $desc,
            'list' => $list,
        ]);
    }

}
