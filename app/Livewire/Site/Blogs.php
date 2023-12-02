<?php

namespace App\Livewire\Site;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;

class Blogs extends Component
{
    use WithPagination;
    protected $queryString = ['search']; // Sayfa numarası gibi parametrelerin URL'de görünmesini engeller
    public $search = '';


    // public function search()
    // {
    //     // Arama yapılacak kod buraya gelecek
    //     $this->render(); // Arama yapıldıktan sonra bileşeni yeniden render etmek için
    // }

    public function updatedSearch()
    {
        $this->render(); // Arama değeri güncellendiğinde sayfayı yeniden oluştur
    }


    public function render()
    {
        //$this->blogs=app('App\Http\Controllers\BlogController')->view();
        // $this->blogs = Blog::paginate(1); // 10 sayfa başına blog göster
        //return view('livewire.site.blogs',
        //[
        //    'blogs'=>Blog::paginate(1)
        //]);

        //where('title','like','%',.$this->search.'%')->

        // $blogs = Blog::paginate(1);
        // return view('livewire.site.blogs', ['blogs' => $blogs]);

        //->with('category')


        // if($this->search) {
        //     dd("deneme");
        //     $blogs = Blog::where('title', 'like', '%' . $this->search . '%')
        //         ->orWhere('content', 'like', '%' . $this->search . '%')
        //         ->paginate(1); // Sayfa başına 10 blog göster
        // } else {
        //     $blogs = Blog::with('category')->paginate(1);
        // }
        
        // return view('livewire.site.blogs', ['blogs' => $blogs]);

        $blogs = Blog::orWhere('title', 'like', '%' . $this->search. '%')->paginate(2);
        return view('livewire.site.blogs', ['blogs' => $blogs]);

        
    }
}
