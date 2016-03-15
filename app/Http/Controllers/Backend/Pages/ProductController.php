<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller {

    public function index() {
        $kategori = \DB::table('kategori')->orderBy('order', 'asc')->get();
        
        $produk = \DB::table('VIEW_PRODUK')->orderBy('kategori_id')->get();
        return view('backend.pages.product.index', [
            'kategori' => $kategori,
            'produk' => $produk,
        ]);
    }

    public function newKategori(Request $request) {
        $last_order = \DB::table('kategori')->max('order');

        $id = \DB::table('kategori')
                ->insertGetId([
            'nama' => $request->input('kategori_nama'),
            'order' => $last_order + 1
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/product');
        } else {
            $data = \DB::table('kategori')->find($id);
            echo json_encode($data);
        };
    }

    public function editKategori($id) {
        $kategori = \DB::table('kategori')
                ->find($id);
        return view('backend.pages.product.kategori.edit', [
            'data' => $kategori
        ]);
    }

    public function updateKategori(Request $request) {
        \DB::table('kategori')
                ->whereId($request->input('kategori_id'))
                ->update([
                    'nama' => $request->input('kategori_nama'),
                    'aktif' => $request->input('kategori_aktif')
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/product');
        } else {
            $data = \DB::table('kategori')->find($request->input('kategori_id'));
            echo json_encode($data);
        };
    }

    public function deleteKategori($id, Request $request) {

        $data = \DB::table('kategori')->find($id);

        //reorder dulu nomor ordernya
        $datas = \DB::table('kategori')->where('order', '>', $data->order)->get();
        foreach ($datas as $dt) {
            \DB::table('kategori')
                    ->whereId($dt->id)
                    ->update([
                        'order' => $dt->order - 1
            ]);
        }

        //delete data dari database
        \DB::table('kategori')
                ->whereId($id)
                ->delete();

        if (!$request->ajax()) {
            return redirect('admin/pages/product');
        } else {
//            $data = \DB::table('kategori')->find($request->input('kategori_id'));
//            echo json_encode($data);
        };
    }

    public function shiftUpKategori($id, Request $request) {
        $tablename = 'kategori';
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

        if (!$request->ajax()) {
            return redirect('admin/pages/product');
        } else {
            
        };
    }

    public function shiftDownKategori($id, Request $request) {
        $tablename = 'kategori';
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

        if (!$request->ajax()) {
            return redirect('admin/pages/product');
        } else {
            
        };
    }
    
    public function kategori(){
        $kategori = \DB::table('kategori')->select(['id','nama'])->get();
//        return json_encode($kategori);
        echo json_encode($kategori);
    }
    
    
    /**
     * PRODUCT SECTION
     */
    
    //new produkc
    public function newProduk(Request $request){
        $id = \DB::table('produk')->insertGetId([
            'nama' => $request->input('produk_nama'),
            'sub_desc' => $request->input('produk_subdesc'),
            'desc' => $request->input('produk_desc'),
            'price' => $request->input('price'),
            'kategori_id' => $request->input('kategori'),
        ]);
        
//        if (!$request->ajax()) {
//            return redirect('admin/pages/product');
//        } else {
//            $data = \DB::table('VIEW_PRODUK')->find($id);
//            echo json_encode($data);
//        };
    }
    
    /**
     * END OF PRODUCT SECTION
     */

}
