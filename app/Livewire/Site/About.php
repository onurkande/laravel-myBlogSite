<?php

namespace App\Livewire\Site;

use Livewire\Component;

class About extends Component
{
    public $records;
    public function render()
    {
        $this->records=app('App\Http\Controllers\AboutController')->view();
        return view('livewire.site.about',["records"=>$this->records]);
    }
}
