<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Validator;

class MessageController extends Controller
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
        // store to db message by validator 
        $validator = Validator::make($request->all(), [
            'sender' => 'required|integer',
            'chat_id' => 'required|integer',
            'message' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $input = $request->all();

        $message = Message::create($input);
    
        return response()->json(['data'=>$message], 200);


    }

    /**
     * Display the specified resource.
     */
    public function show(int $chat)
    {
        // view messages by chat
        $messages = Message::where('chat_id', $chat)->get();
        
        return response()->json(['data' => $messages], 200);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}