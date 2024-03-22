<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;

class Like extends Component
{
    public Comment $comment;
    public $likeCount;
    public $liked;
    public $commentId;
    public $loginId;

    public function mount($commentId, $loginId)
    {
        $this->commentId = $commentId; //assigning the commentId to be accessible in the page
        $this->loginId = $loginId; //assigning the loginId to be accessible in the page
        $this->likeCount = Comment::find($commentId)->likes()->count(); //counting the number of likes in the nnumber

        $comment = Comment::find($this->commentId);
        $like = $comment->likes()->where('user_id',$this->loginId)->first();
        if($like){
            $this->liked = 1;
        }
        else{
            $this->liked = 0;
        }

    }

    // public function checkLiked(){
    //     $comment = Comment::find($this->commentId);
    //     $like = $comment->likes()->where('user_id',$this->loginId)->first();
    //     if($like){
    //         $this->liked = 0;
    //     }
    //     else{
    //         $this->liked = 1;
    //     }

    // }
    public function like()
    {
        $comment = Comment::find($this->commentId);
        $like = $comment->likes()->where('user_id',$this->loginId)->first();
        if($like){
            $like->delete();
            $this->likeCount--;
            $this->liked = 0;
        }
        else{
            $comment->likes()->create(['user_id' => $this->loginId]);
            $this->likeCount++;
            $this->liked = 1;
        }
    }
    public function render()
    {
        return view('livewire.like',[
            'likeCount' => $this->likeCount,
            'liked' =>$this->liked,
        ]);
    }
}
