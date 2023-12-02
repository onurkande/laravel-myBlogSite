<?php

namespace App\Livewire\Site;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Category;

class Sidebar extends Component
{
    public $abouts;
    public $trendingBlogs;
    public $categories;
    public function render()
    {
        $this->abouts=app('App\Http\Controllers\AboutController')->view();
        $this->trendingBlogs = Blog::orderBy('views', 'desc')->take(5)->get();
        $this->categories = Category::all();
        return view('livewire.site.sidebar',["abouts"=>$this->abouts,"trendingBlogs"=>$this->trendingBlogs,"categories"=>$this->categories]);
    }
}
