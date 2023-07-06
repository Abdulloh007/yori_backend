<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Notifications;
use Illuminate\Http\Request;
use Validator;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        // store to db message by validator 
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'status' => 'required|integer',
            'message' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $input = $request->all();

        $message = Notifications::create($input);
    
        return response()->json(['data'=>$message], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $notifications)
    {
        // view messages by chat
        $messages = Notifications::where('user_id', $notifications)->get();
        
        return response()->json(['data' => $messages], 200);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Notifications $notifications)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'status' => 'nullable',
        ]);

        if($validator->fails())
            return response()->json(['error' => $validator->errors()], 400);

        $messages = Notifications::find($id);

        if(is_null($messages))
            return response()->json(['error' => 'Messages not found'], 404);

        $messages->update($input);

        $response = [
            'data' => $messages
        ];

        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Notifications $notifications)
    {
        //
    }
}
