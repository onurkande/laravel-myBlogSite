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

    function delete($id)
    {
        $footer = Footer::first();
        $icons = json_decode($footer->icons, TRUE);
        $iconsUrl = json_decode($footer->iconsUrl, TRUE);

        $index = array_search($id, $icons);

        if($icons[$index] && $iconsUrl[$index])
        {
            unset($icons[$index]);
            unset($iconsUrl[$index]);
            
            $footer->icons = json_encode(array_values($icons), JSON_UNESCAPED_UNICODE);
            $footer->iconsUrl = json_encode(array_values($iconsUrl), JSON_UNESCAPED_UNICODE);
            $footer->save();

            return redirect('dashboard/dynamic-edit/footer')->with('update', "footer güncellendi");
        } 
        else
        {
            echo "Değer dizide bulunamadı.";
        }
    }

    function view()
    {
        $footer = Footer::first();
        if($footer != null)
        {
            return $footer;
        }else
        {
            return null;
        }
    }
}
