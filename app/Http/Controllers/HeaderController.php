<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use Illuminate\Support\Facades\File;

class HeaderController extends Controller
{
    function index()
    {
        $records = Header::first();
        return view("admin.header",["records"=> $records]);
    }

    function store(Request $request)
    {
        $header = new Header;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('admin/headerImage',$filename);
            $header->image = $filename;
        }

        $header->imageUrl = $request->input('imageUrl');

        $icons = $request->input('icons');
        $icons = json_encode($icons, JSON_UNESCAPED_UNICODE);
        $header->icons = $icons;

        $iconsUrl = $request->input('iconsUrl');
        $iconsUrl = json_encode($iconsUrl, JSON_UNESCAPED_UNICODE);
        $header->iconsUrl = $iconsUrl;


        $pages = $request->input('pages');
        $pages = json_encode($pages, JSON_UNESCAPED_UNICODE);
        $header->pages = $pages;

        $pagesUrl = $request->input('pagesUrl');
        $pagesUrl = json_encode($pagesUrl, JSON_UNESCAPED_UNICODE);
        $header->pagesUrl = $pagesUrl;

        $header->save();
        return redirect('dashboard/dynamic-edit/header')->with('store', "header eklendi");
    }

    function update(Request $request, $id)
    {
        $header = Header::find($id);
        if($request->hasFile('image'))
        {
            $path = 'admin/headerImage/'.$header->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('admin/headerImage',$filename);
            $header->image = $filename;
        }

        $header->imageUrl = $request->input('imageUrl');

        $icons = $request->input('icons');
        $icons = json_encode($icons, JSON_UNESCAPED_UNICODE);
        $header->icons = $icons;

        $iconsUrl = $request->input('iconsUrl');
        $iconsUrl = json_encode($iconsUrl, JSON_UNESCAPED_UNICODE);
        $header->iconsUrl = $iconsUrl;

        $pages = $request->input('pages');
        $pages = json_encode($pages, JSON_UNESCAPED_UNICODE);
        $header->pages = $pages;

        $pagesUrl = $request->input('pagesUrl');
        $pagesUrl = json_encode($pagesUrl, JSON_UNESCAPED_UNICODE);
        $header->pagesUrl = $pagesUrl;

        $header->save();
        return redirect('dashboard/dynamic-edit/header')->with('update', "header güncellendi");
    }

    function view()
    {
        $header = Header::first();
        return $header;
    }
}
