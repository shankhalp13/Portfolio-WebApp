<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog;
class Comment extends Component
{
    public Blog $blog;
    public $blogId;
    public $loginId;
    public function mount($blogId, $loginId)
    {
        $this->blogId = $blogId; //assigning the commentId to be accessible in the page
        $this->loginId = $loginId; //assigning the loginId to be accessible in the page

    }
    public function render()
    {
        return view('livewire.comment');
    }
}
