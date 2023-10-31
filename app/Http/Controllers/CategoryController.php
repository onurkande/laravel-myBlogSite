<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    function index()
    {
        $records = Category::all();
        return view("admin.categories",["records"=> $records]);
    }

    function add()
    {
        return view("admin.add-category");
    }

    function store(Request $request)
    {
        $category = new Category;

        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->save();
        return redirect('dashboard/dynamic-edit/categories')->with('store',"Category eklendi");
    }

    function edit($id)
    {
        $records = Category::find($id);
        return view('admin.edit-category',['records'=>$records]);
    }

    function update(Request $request,$id)
    {
        $category = Category::find($id);
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->update();
        return redirect('dashboard/dynamic-edit/categories')->with('update',"Category güncellendi");
    }

    function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('dashboard/dynamic-edit/categories')->with('delete',"Category silindi");
    }
}
