<?php

namespace App\Livewire\Site;

use Livewire\Component;

class Footer extends Component
{
    public $records;
    public $header;
    public function render()
    {
        $this->records=app('App\Http\Controllers\FooterController')->view();
        $this->header=app('App\Http\Controllers\HeaderController')->view();
        return view('livewire.site.footer',['records'=>$this->records,'header'=>$this->header]);
    }
}
