<?php

namespace App\Livewire\Site;

use Livewire\Component;

class Header extends Component
{
    public $records;
    public function render()
    {
        $this->records=app('App\Http\Controllers\HeaderController')->view();
        return view('livewire.site.header',['records'=>$this->records]);
    }
}
