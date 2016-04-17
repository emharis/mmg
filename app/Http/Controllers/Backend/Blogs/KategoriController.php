<?php

namespace App\Http\Controllers\Backend\Blogs;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class KategoriController extends Controller {

    public function index() {
        $kategori = \DB::table('blog_kategori')->orderBy('created_at', 'asc')->get();
        return view('backend.blogs.kategori.index', [
            'kategori' => $kategori
        ]);
    }

    public function insert(Request $request) {
        $id = \DB::table('blog_kategori')->insertGetId([
            'nama' => $request->input('nama')
        ]);

        if (!$request->ajax()) {
            return redirect('admin/blogs/kategori');
        } else {
            return json_encode(\DB::table('blog_kategori')->find($id));
        }
    }

    public function edit($id, Request $request) {
        $data = \DB::table('blog_kategori')->find($id);
        return json_encode($data);
    }

    public function update(Request $request) {
        \DB::table('blog_kategori')->whereId($request->input('id'))->update([
            'nama' => $request->input('nama')
        ]);

        if (!$request->ajax()) {
            return redirect('admin/blogs/kategori');
        }else {
            return json_encode(\DB::table('blog_kategori')->find($request->input('id')));
        }
    }
    
    public function delete($id,Request $request){
        \DB::table('blog_kategori')->delete($request->id);
        if (!$request->ajax()) {
            return redirect('admin/blogs/kategori');
        }
    }

}
