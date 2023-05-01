<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use App\Models\Message;
use App\Models\User;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chat = Chat::all();

        foreach($chat as $item){
            $user1 = User::find($item->user1);
            $user2 = User::find($item->user2);

            if ($user1) {
                $item->user1_name = $user1->name;
            }   
            if ($user2) {
                $item->user2_name = $user2->name;
            }
        }

        return view('index',['page'=>'chat','chat'=>$chat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $chat)
    {
        $chat = Chat::find($chat);

        $messages = Message::where('chat_id',$chat->id)->get();

        foreach ($messages as $key => $value) {
            $user = User::find($value->sender);

            if ($user) {
                $value->sender_name = $user->name;
            }
        }
        
        return view('index',['page'=>'message','message'=>$messages]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chat $chat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chat $chat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $chat)
    {
        // destroy if exists

        $chat = Chat::find($chat);

        $chat_id = $chat->id;
        
        if ($chat) {
            $chat->delete();
            Message::where('chat_id', $chat_id)->delete();
        }

        return redirect()->route('chat');

    }
        /**
     * Remove the specified resource from storage.
     */
    public function message_destroy(int $message)
    {

        $message = Message::find($message);

        $chat = $message->chat_id;

        if ($message) {
            $message->delete();
        }

        return redirect()->route('chat-show',$chat);

    }
}
