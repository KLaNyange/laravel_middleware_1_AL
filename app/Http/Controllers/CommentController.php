<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;
use App\Notifications\NewComment;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Notifications\Facades\Vonage;
use Illuminate\Notifications\Messages\VonageMessage;
use Illuminate\Notifications\Vonage as NotificationsVonage;
use Illuminate\Support\Facades\Auth;
use Vonage\SMS\Message\SMS;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeComment(Request $request, $id)
    {
        $store = new Comment();
        $store->comment = $request->comment;
        $store->user_id = Auth::user()->id;
        $store->article_id = $id;
        $store->save();
        $article = Article::find($id);
        $user = User::find($article->user_id);

        $newCommentData = [
            'body' => 'Your article has been commented',
            'text' => 'Go check this',
            'url' => url('/articles'),
            'thx' => 'Do forget to reply'
        ];

        $user->notify(new NewComment($newCommentData));

        // $basic  = new \Vonage\Client\Credentials\Basic("cfbaf3c0", "ky53OG9YcF1tbaLr");
        // $client = new \Vonage\Client($basic);

        // $response = $client->sms()->send(
        //     new VonageMessage()
        // );


        // $message = $response->current();

        // if ($message->getStatus() == 0) {
        //     echo "The message was sent successfully\n";
        // } else {
        //     echo "The message failed with status: " . $message->getStatus() . "\n";
        // }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
