<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class SendMessageController extends Controller
{
    public function store(Request $request) {
        Message::create([
            'user_id'=>$request->userId,
            'receiver_id'=>$request->receiverId,
            'ad_id'=>$request->adId,
            'body'=>$request->body
        ]);
    }

    public function index() {
        return view('message.index');
    }

    public function chatWithThisUser() {
        $conversations = Message::where('user_id',auth()->id())
            ->orWhere('receiver_id',auth()->id())
            ->get();
        $users = $conversations->map(function($conversation){
            if($conversation->user_id===auth()->id()){
                return $conversation->receiver;
            }
            return $conversation->sender;
        })->unique();
        return $users;
    }
}
