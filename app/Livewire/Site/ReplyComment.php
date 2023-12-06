<?php

namespace App\Livewire\Site;

use Livewire\Component;

class ReplyComment extends Component
{
    public $replycomments;
    public $parentId;
    public function render()
    {
        $comment=app('App\Http\Controllers\CommentController')->view();
        $this->replycomments = $comment->where('parent_id', $this->parentId);
        return view('livewire.site.reply-comment',['comments'=>$this->replycomments]);
    }
}
