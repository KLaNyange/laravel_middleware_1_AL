<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Notifications\NewComment;
use Illuminate\Http\Request;

class NewCommentController extends Controller
{
    public function newComment(){

        $comment = Comment::first();

        $newCommentData= [
            'body' => 'Your article has been commented',
            'text'=> 'Go check this',
            'url'=>url('/'),
            'thx'=>'Do forget to reply'
        ];

        $comment->notify(new NewComment($newCommentData));
    }
}
