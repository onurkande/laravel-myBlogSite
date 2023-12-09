<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\BlogPostNotificationController;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    function index()
    {
        $records=Blog::all();
        return view("admin.blogs",["records"=>$records]);
    }

    function add()
    {
        $records=Category::all();
        return view("admin.add-blog",["records"=>$records]);
    }

    function store(Request $request)
    {
        $blog = new Blog;
        $user_id = Auth::id();

        $blog->title = $request->input('title');

        //SLUG
        $slug= $request->input('slug');
        $slug = str_replace(
            ['ı', 'ğ', 'ü', 'ş', 'i', 'ö', 'ç', 'İ', 'Ğ', 'Ü', 'Ş', 'İ', 'Ö', 'Ç'],
            ['i', 'g', 'u', 's', 'i', 'o', 'c', 'I', 'G', 'U', 'S', 'I', 'O', 'C'],
            $slug
        );
    
        // Boşlukları tire ile değiştir
        $slug = str_replace(' ', '-', $slug);
    
        // Slug'ı oluştur
        $slug = Str::slug($slug);
        
        $blog->slug = $slug;
        //END SLUG

        $blog->description = $request->input('description');
        $blog->keywords = $request->input('keywords');

        $blog->content = $request->input('content');

        if($request->input('cate_id') == null)
        {
            return redirect()->back()->with('delete','Kategori seçiniz');
        }else{
            $blog->cate_id = $request->input('cate_id');
        }
        $blog->user_id = $user_id;

        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('admin/blogImage',$filename);
            $blog->image = $filename;
        }

        $blog->save();

        $lastId = Blog::latest()->value('id');

        $BlogPostNotificationController = new BlogPostNotificationController();
        $BlogPostNotificationController->subscribe($lastId);

        return redirect('dashboard/dynamic-edit/blogs')->with('store',"Blog eklendi");
    }

    function edit($id)
    {
        $category = Category::all();
        $records = Blog::find($id);
        return view('admin.edit-blog',['records'=>$records,'category'=>$category]);
    }

    function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        $blog->title = $request->input('title');
        
        
        //SLUG
        $newSlug = $request->input('slug');

        // Türkçe karakterleri düzelt
        $newSlug = str_replace(
            ['ı', 'ğ', 'ü', 'ş', 'i', 'ö', 'ç', 'İ', 'Ğ', 'Ü', 'Ş', 'İ', 'Ö', 'Ç'],
            ['i', 'g', 'u', 's', 'i', 'o', 'c', 'I', 'G', 'U', 'S', 'I', 'O', 'C'],
            $newSlug
        );

        // Boşlukları tire ile değiştir
        $newSlug = str_replace(' ', '-', $newSlug);

        // Slug'ı oluştur
        $newSlug = Str::slug($newSlug);

        // Eğer kullanıcı slug girmişse ve yeni slug değeri farklıysa
        if ($request->filled('slug') && $newSlug != $blog->slug) {
            // Daha önce manuel girilen slug'ı kontrol et
            $oldSlug = $blog->slug;

            // Eğer manuel girilen slug varsa, kullanıcı tarafından girilen değeri koru
            if ($oldSlug != Str::slug($request->input('slug'))) {
                // dd('manually entered slug');
                $blog->slug = $newSlug;
            } else {
                return redirect()->back()->with(['delete' => 'Manuel slug değiştiremezsiniz.']);
            }
        }
        //END SLUG

        $blog->description = $request->input('description');
        $blog->keywords = $request->input('keywords');

        $blog->content = $request->input('content');

        $blog->cate_id = $request->input('cate_id');

        if($request->hasFile('image'))
        {
            $path = 'admin/blogImage/'.$blog->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('admin/blogImage',$filename);
            $blog->image = $filename;
        }

        $blog->save();
        return redirect('dashboard/dynamic-edit/blogs')->with('update',"Blog güncellendi");
    }

    function delete($id)
    {
        $blog = Blog::find($id);
        if($blog->image)
        {
            $path = 'admin/blogImage/'.$blog->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $blog->delete();
        return redirect('dashboard/dynamic-edit/blogs')->with('delete',"Blog silindi");
    }

    function view()
    {
        $records = Blog::all();
        return $records;
    }
}
