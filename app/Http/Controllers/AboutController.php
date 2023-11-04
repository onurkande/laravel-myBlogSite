<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AboutController extends Controller
{
    function index()
    {
        $records = About::first();
        return view("admin.about",["records"=> $records]);
    }

    function store(Request $request)
    {
        $about = new About;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('admin/aboutImage',$filename);
            $about->image = $filename;
        }

        $about->title = $request->input('title');

        $icons = $request->input('icons');
        $icons = json_encode($icons, JSON_UNESCAPED_UNICODE);

        $iconsUrl = $request->input('iconsUrl');
        $iconsUrl = json_encode($iconsUrl, JSON_UNESCAPED_UNICODE);
        
        $about->content = $request->input('content');
        
        $about->icons = $icons;
        $about->iconsUrl = $iconsUrl;

        $about->save();
        return redirect('dashboard/dynamic-edit/about')->with('store', "About eklendi");
    }

    function update(Request $request, $id)
    {
        // Var olan kaydı bul
        $about = About::first();

        if (!$about) {
            // Kayıt bulunamazsa uygun bir hata işleyin
            return redirect()->back()->with('error', "About kaydı bulunamadı.");
        }

        if($request->hasFile('image'))
        {
            $path = 'admin/aboutImage/'.$about->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('admin/aboutImage',$filename);
            $about->image = $filename;
        }

        $about->title = $request->input('title');

        $icons = $request->input('icons');
        $icons = json_encode($icons, JSON_UNESCAPED_UNICODE);

        $iconsUrl = $request->input('iconsUrl');
        $iconsUrl = json_encode($iconsUrl, JSON_UNESCAPED_UNICODE);

        $about->content = $request->input('content');

        $about->icons = $icons;
        $about->iconsUrl = $iconsUrl;

        $about->save();

        return redirect('dashboard/dynamic-edit/about')->with('update', "About güncellendi");
    }

    function deleteAbout($id)
    {
        $about = About::find($id);
        if($about->image)
        {
            $path = public_path('admin/aboutImage');

            if(File::exists($path)) 
            {
                File::deleteDirectory($path);
            }
        }
        $about->delete();
        return redirect('dashboard/dynamic-edit/about')->with('delete',"About silindi");
    }

    function view()
    {
        $records = About::first();
        return $records;
    }
}
