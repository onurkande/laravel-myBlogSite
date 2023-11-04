<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;

class FooterController extends Controller
{
    function index()
    {
        $records = Footer::first();
        return view("admin.footer",["records"=> $records]);
    }

    function store(Request $request)
    {
        $footer = new Footer;

        $icons = $request->input('icons');
        $icons = json_encode($icons, JSON_UNESCAPED_UNICODE);

        $iconsUrl = $request->input('iconsUrl');
        $iconsUrl = json_encode($iconsUrl, JSON_UNESCAPED_UNICODE);
        
        $footer->content = $request->input('content');
        $footer->smallContent = $request->input('smallContent');
        
        $footer->icons = $icons;
        $footer->iconsUrl = $iconsUrl;

        $footer->save();
        return redirect('dashboard/dynamic-edit/footer')->with('store', "footer eklendi");
    }

    function update(Request $request, $id)
    {
        // Var olan kaydı bul
        $footer = Footer::find($id);

        if (!$footer) {
            // Kayıt bulunamazsa uygun bir hata işleyin
            return redirect()->back()->with('error', "Footer kaydı bulunamadı.");
        }

        $icons = $request->input('icons');
        $icons = json_encode($icons, JSON_UNESCAPED_UNICODE);

        $iconsUrl = $request->input('iconsUrl');
        $iconsUrl = json_encode($iconsUrl, JSON_UNESCAPED_UNICODE);
        
        $footer->content = $request->input('content');
        $footer->smallContent = $request->input('smallContent');
        
        $footer->icons = $icons;
        $footer->iconsUrl = $iconsUrl;

        $footer->save();

        return redirect('dashboard/dynamic-edit/footer')->with('update', "footer güncellendi");
    }

    function view()
    {
        $footer = Footer::first();
        return $footer;
    }
}
