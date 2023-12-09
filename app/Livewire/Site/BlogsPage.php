<?php

namespace App\Livewire\Site;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Blog;

class BlogsPage extends Component
{

    use WithPagination;
    protected $queryString = ['arama']; // Sayfa numarası gibi parametrelerin URL'de görünmesini engeller
    public $arama = '';
    public $test = 'test';
    private $blogs;
 

    public function ara(){
        $this->blogs = Blog::orWhere('title', 'like', '%' . $this->arama. '%')->paginate(6);
    }

    public function render()
    {
        $this->blogs = Blog::orWhere('title', 'like', '%' . $this->arama. '%')->paginate(6);
        return view('livewire.site.blogs-page', ['blogs' => $this->blogs]);
    }
}
