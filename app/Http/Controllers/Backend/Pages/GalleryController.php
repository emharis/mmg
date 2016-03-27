<?php

namespace App\Http\Controllers\Backend\Pages;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class GalleryController extends Controller {

    function index() {
        $dt_kategori = \DB::table('gallery_kategori')->select(['id', 'nama'])->get();
        return view('backend.pages.gallery.index', [
            'kategori' => $dt_kategori
        ]);
    }

    /**
     * GALLERY SECTION
     */
    function gallery() {
        $dt_kategori = \DB::table('gallery_kategori')->select(['id', 'nama'])->get();
        $kategori = array();
        foreach ($dt_kategori as $dt) {
            $kategori[$dt->id] = $dt->nama;
        }

        $gallery = \DB::table('VIEW_GALLERY')->orderBy('created_at', 'desc')->get();

        return view('backend.pages.gallery.gallery', [
            'data_kategori' => $dt_kategori,
            'kategori' => $kategori,
            'gallery' => $gallery,
            'imgpath' => \App\Helpers\Helper::appsetting('gallery_img_path')
        ]);
    }

    public function newGallery(Request $request) {
        $id = \DB::table('gallery')
                ->insertGetId([
            'kategori_id' => $request->input('kategori'),
            'title' => $request->input('gallery_title'),
            'type' => $request->input('tipe'),
            'subtitle' => $request->input('gallery_subtitle')
        ]);

        //cek apakah punya gambar
        if ($request->input('tipe') == 'I') {
            if ($request->hasFile('gallery_img')) {
                $file = $request->file('gallery_img');
                $filename = md5(rand(111, 999999) . substr($file->getClientOriginalName(), 0, 15)) . '.' . $file->getClientOriginalExtension();
                if ($file->isValid()) {
                    $file->move(\App\Helpers\Helper::appsetting('gallery_img_path'), $filename);
                }

                //update nama file di database
                \DB::table('gallery')
                        ->whereId($id)
                        ->update([
                            'img' => $filename
                ]);
            }
        } else {
            //tipe video
            \DB::table('gallery')
                    ->whereId($id)
                    ->update([
                        'youtube_url' => $request->input('gallery_youtube'),
                        'img' => json_decode(file_get_contents(sprintf('http://www.youtube.com/oembed?url=%s&format=json', urlencode($request->input('gallery_youtube')))))->thumbnail_url,
            ]);
        }


        if (!$request->ajax()) {
            return redirect('admin/pages/gallery/gallery');
        } else {
            $data = \DB::table('gallery')->find($id);
            echo json_encode($data);
        };
    }

    public function getYoutube(Request $request) {
//        echo 'url : ' .  $request->input('url');
        $url = $request->input('url');
//        echo $url;
//        $ytdata = json_decode(file_get_contents(sprintf('http://www.youtube.com/oembed?url=%s&format=json', urlencode($url))));
        return file_get_contents(sprintf('http://www.youtube.com/oembed?url=%s&format=json', urlencode($url)));
    }

    //update title of gallery item
    public function updateGalleryTitle(Request $request) {
        \DB::table('gallery')
                ->whereId($request->input('id'))
                ->update([
                    'title' => $request->input('title')
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/gallery/gallery');
        } else {
            $data = \DB::table('gallery')->find($request->input('id'));
            echo json_encode($data);
        };
    }

    //delete gallery
    public function deleteGallery($id, Request $request) {
        $data = \DB::table('gallery')
                ->find($id);

        //cek apakah punya gambar 
        if ($data->type == 'I') {
            //delete gambar yang ada
            \File::delete(\App\Helpers\Helper::appsetting('gallery_img_path') . '/' . $data->img);
        }

        //delte dari database
        \DB::table('gallery')
                ->whereId($id)
                ->delete();

        if (!$request->ajax()) {
            return redirect('admin/pages/gallery/gallery');
        }
    }

    /**
     * END OF GALLERY
     */

    /**
     * KATEGORI SECTION
     */
    function newKategori(Request $request) {
        $id = \DB::table('gallery_kategori')
                ->insertGetId([
            'nama' => $request->input('kategori_nama')
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/gallery');
        } else {
            $data = \DB::table('gallery_kategori')->find($id);
            echo json_encode($data);
        };
    }

    //update kategori
    function updateKategori(Request $request) {
        \DB::table('gallery_kategori')
                ->whereId($request->input('kategori_id'))
                ->update([
                    'nama' => $request->input('kategori_nama')
        ]);

        if (!$request->ajax()) {
            return redirect('admin/pages/gallery');
        } else {
            $data = \DB::table('gallery_kategori')->find($request->input('kategori_id'));
            echo json_encode($data);
        };
    }

    function deleteKategori($id, Request $request) {
        echo "delete kategori";
        \DB::table('gallery_kategori')
                ->delete($id);

        if (!$request->ajax()) {
            return redirect('admin/pages/gallery');
        } else {
//            $data = \DB::table('gallery_kategori')->find($request->input('kategori_id'));
//            echo json_encode($data);
        };
    }

    /**
     * END OF KATEGORI SECTION
     */
}
