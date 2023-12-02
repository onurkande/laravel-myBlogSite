<?php

namespace App\Livewire\Site;

use Livewire\Component;

class Comment extends Component
{
    public $comment;
    public function render()
    {
        $this->comment=app('App\Http\Controllers\CommentController')->view();
        return view('livewire.site.comment',['comment'=>$this->comment]);
    }
}
