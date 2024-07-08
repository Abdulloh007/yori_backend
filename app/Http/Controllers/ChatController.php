<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\UserBearer;
use Illuminate\Http\Request;
use Validator;

class ChatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // add chat by user_id by Validator
        $validator = Validator::make($request->all(), [
            'user1' => 'required|integer',
            'user2' => 'required|integer',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

       // add if not exists
        $chat = Chat::where('user1', $request->user1)->where('user2', $request->user2)->first();
        if(is_null($chat)){
            $chat = Chat::where('user1', $request->user2)->where('user2', $request->user1)->first();
            if(is_null($chat)){
                $chat = Chat::create($request->all());
                return response()->json(['data'=>$chat]);
            }else{
                $user1 = UserBearer::find($chat->user1);
                $user2 = UserBearer::find($chat->user2);
                // return error
                return response()->json([
                    'error'=>'Чат уже существует!',
                    'chat_id' => $chat->id,
                    'collocutor' => $user1->id == $request->user1 ? $user2->name : $user1->name
                ], 401);
            }
        }else{
            $user1 = UserBearer::find($chat->user1);
            $user2 = UserBearer::find($chat->user2);
            // return error
            return response()->json([
                'error'=>'Чат уже существует!',
                'chat_id' => $chat->id,
                'collocutor' => $user1->id == $request->user1 ? $user2->name : $user1->name
            ], 401);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(int $user)
    {
        $chats = Chat::where('user1', $user)->orWhere('user2', $user)->get();
        foreach($chats as $key=>$chat){

            $user1 = UserBearer::find($chat->user1);
            $user2 = UserBearer::find($chat->user2);
            if(!is_null($user1) && !is_null($user2)){
                //$chat->user1_avatar = $user1->avatar == null ? "Not found" : $user1->avatar;
                //$chat->user2_avatar = $user2->avatar == null ? "Not found" : $user2->avatar;
                $chat->user1_avatar = UserBearer::find($chat->user1)->avatar == null ? "Not found" : UserBearer::find($chat->user1)->avatar;
                $chat->user2_avatar = UserBearer::find($chat->user2)->avatar == null ? "Not found" : UserBearer::find($chat->user2)->avatar;
                $chat->collocutor = $user1->id == $user ? $user2->name : $user1->name;
            }else{
                unset($chats[$key]);
                continue;
            }

            // Success the code ErrorException: Attempt to read property &quot;avatar&quot; on null in file C:\OSPanel\domains\yori\app\Http\Controllers\ChatController.php on line 53
            


        }
        return response()->json(['data'=>$chats]);
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
    public function destroy(Chat $chat)
    {
        //
    }
}
