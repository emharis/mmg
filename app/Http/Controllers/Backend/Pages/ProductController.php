<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller {

    public function index() {
        $kategori = \DB::table('kategori')->orderBy('order', 'asc')->get();

        $produk = \DB::table('VIEW_PRODUK')->orderBy('kategori_id')->get();
        $setting_harga = \App\Helpers\Helper::appsetting('product_price_enable');
        $setting_new_produk = \App\Helpers\Helper::appsetting('product_show_latest');
        $setting_new_produk_num = \App\Helpers\Helper::appsetting('product_show_latest_num');
        $setting_produk_sejenis = \App\Helpers\Helper::appsetting('product_show_related');
        $setting_produk_sejenis_num = \App\Helpers\Helper::appsetting('product_show_related_num');
        $product_new_text = \App\Helpers\Helper::appsetting('product_new_text');
        $product_related_text = \App\Helpers\Helper::appsetting('product_related_text');
        
        return view('backend.pages.product.index', [
            'kategori' => $kategori,
            'produk' => $produk,
            'setting_harga' => $setting_harga,
            'setting_new_produk' => $setting_new_produk,
            'setting_new_produk_num' => $setting_new_produk_num,
            'setting_produk_sejenis' => $setting_produk_sejenis,
            'setting_produk_sejenis_num' => $setting_produk_sejenis_num,
            'product_related_text' =>$product_related_text,
            'product_new_text' =>$product_new_text,
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
        $order_data = $data->order;
        

        \DB::transaction(function()use($id,$order_data){
            //delete data dari database
            \DB::table('kategori')
                    ->whereId($id)
                    ->delete();
                    
            //reorder dulu nomor ordernya
            $datas = \DB::table('kategori')->where('order', '>', $order_data)->get();
            foreach ($datas as $dt) {
                \DB::table('kategori')
                        ->whereId($dt->id)
                        ->update([
                            'order' => $dt->order - 1
                ]);
            }        
                    
        });
        

        if (!$request->ajax()) {
            return redirect('admin/pages/product');
        } 
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

    public function kategori() {
        $kategori = \DB::table('kategori')->orderBy('order','asc')->select(['id', 'nama'])->get();
//        return json_encode($kategori);
        echo json_encode($kategori);
    }

    /**
     * PRODUCT SECTION
     */
    //new produkc
    public function newProduk(Request $request) {
        $id = \DB::table('produk')->insertGetId([
            'nama' => $request->input('produk_nama'),
            'sub_desc' => $request->input('produk_subdesc'),
            'desc' => $request->input('produk_desc'),
            'price' => $request->input('price'),
            'kategori_id' => $request->input('kategori'),
        ]);

        //cek apakah punya gambar
        if ($request->hasFile('produk_img')) {
            $file = $request->file('produk_img');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                $file->move(\App\Helpers\Helper::appsetting('product_img_path'), $filename);
            }

            //update nama file di database
            \DB::table('produk')
                    ->whereId($id)
                    ->update([
                        'img' => $filename
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/product');
        } else {
            $data = \DB::table('VIEW_PRODUK')->find($id);
            echo json_encode($data);
        };
    }

    //edit product
    public function editProduct($id, Request $request) {
        $data = \DB::table('produk')->find($id);
        //tambahkan img path
        $data->imgpath = \App\Helpers\Helper::appsetting('product_img_path');

        $kategori = \DB::table('kategori')->orderBy('order','asc')->select(['id', 'nama'])->get();
        $slc_kategori = array();
        foreach ($kategori as $kat) {
            $slc_kategori[$kat->id] = $kat->nama;
        }
        return view('backend.pages.product.product.edit', [
            'data' => $data,
            'slc_kategori' => $slc_kategori,
        ]);
    }

    //simpan perubahan data produk
    public function updateProduct(Request $request) {
        $data = \DB::table('produk')->find($request->input('product_id'));
        \DB::table('produk')
                ->whereId($request->input('product_id'))
                ->update([
                    'nama' => $request->input('produk_edit_nama'),
                    'sub_desc' => $request->input('produk_edit_subdesc'),
                    'desc' => $request->input('produk_edit_desc'),
                    'price' => $request->input('produk_edit_price'),
                    'kategori_id' => $request->input('produk_edit_kategori'),
                    'aktif' => $request->input('produk_edit_aktif'),
        ]);

        //cek apakah ada file gambar yang di upload
        if ($request->hasFile('produk_edit_img')) {
            $file = $request->file('produk_edit_img');
            $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
            if ($file->isValid()) {
                //delete file yang lama
                \File::delete(\App\Helpers\Helper::appsetting('product_img_path') . '/' . $data->img);

                //simpan file yang baru
                $file->move(\App\Helpers\Helper::appsetting('product_img_path'), $filename);
            }

            //update nama file di database
            \DB::table('produk')
                    ->whereId($data->id)
                    ->update([
                        'img' => $filename
            ]);
        }

        if (!$request->ajax()) {
            return redirect('admin/pages/product');
        } else {
            $data = \DB::table('VIEW_PRODUK')->find($data->id);
            echo json_encode($data);
        };
    }

    //deletee product
    public function deleteProduct($id, Request $request) {
        $data = \DB::table('produk')
                ->find($id);
        if ($data->img != '') {
            //hapus file image jika ada
            \File::delete(\App\Helpers\Helper::appsetting('product_img_path') . '/' . $data->img);
        }

        //delete dari database
        \DB::table('produk')
                ->delete($id);

        if (!$request->ajax()) {
            return redirect('admin/pages/product');
        }
    }
    
    public function updateSettingHarga(Request $request){
        \App\Helpers\Helper::updateappsetting('product_price_enable',$request->input('tampilkan_harga'));
        \App\Helpers\Helper::updateappsetting('product_show_latest',$request->input('show_new_product'));
        \App\Helpers\Helper::updateappsetting('product_show_latest_num',$request->input('new_product_num'));
        \App\Helpers\Helper::updateappsetting('product_show_related',$request->input('show_product_sejenis'));
        \App\Helpers\Helper::updateappsetting('product_show_related_num',$request->input('related_product_num'));
        \App\Helpers\Helper::updateappsetting('product_new_text',$request->input('product_new_text'));
        \App\Helpers\Helper::updateappsetting('product_related_text',$request->input('product_related_text'));
        \App\Helpers\Helper::updateappsetting('product_new_text',$request->input('product_new_text'));
        \App\Helpers\Helper::updateappsetting('product_related_text',$request->input('product_related_text'));
        
        if (!$request->ajax()) {
            return redirect('admin/pages/product');
        }
    }

    /**
     * END OF PRODUCT SECTION
     */
}
