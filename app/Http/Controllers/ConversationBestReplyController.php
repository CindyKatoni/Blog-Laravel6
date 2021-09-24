<?php

namespace App\Http\Controllers;

use App\Reply;
use Illuminate\Http\Request;

class ConversationBestReplyController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Reply $reply)
    {
        //authorize that the current user has the pernission to set 
        //the best reply for the conversation
        $this->authorize('update', $reply->conversation);

        //If yes then set it
        $reply->conversation->setBestReply($reply);
        // $reply->conversation->best_reply_id = $reply->id;
        // $reply->conversation->save();

        //Then redirect back to the conversation page
        return back();
    }
}