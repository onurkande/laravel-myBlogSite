<?php

namespace App\Livewire\Site;

use Livewire\Component;

class Comment extends Component
{
    public $comments;
    public $blog_id;
    public $replyForms = [];
    protected $listeners = ['toggleReplyForm'];

    public function render()
    {
        return view('livewire.site.comment');
    }

    public function toggleReplyForm($commentId)
    {
        if (!isset($this->replyForms[$commentId])) {
            $this->replyForms[$commentId] = true;
        } else {
            $this->replyForms[$commentId] = !$this->replyForms[$commentId];
        }
    }
}
