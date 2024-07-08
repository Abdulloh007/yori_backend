<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Notifications;
use App\Models\User;
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
    
    public function notyPush(Request $request)
    {

        $input = $request->all();

        $user = User::find($input['receiver']);

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://fcm.googleapis.com/fcm/send',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'{
        "notification": {
            "body": "'.$input['body'].'",
            "title": "'.$input['title'].'"
            },
            "to" : "'.$user->push_noty.'"
        }
        ',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: key= AAAAb7gj90Q:APA91bHvs0QoBwOR42es2An60n-2ugJ6akQDuPyYzJBlXgCgyRBa_WyUmeiUIt_-02KOMShqPFApv4IweT7_yEPfwRp7SWgxBSa_AgGIaF7Kq7barWHIhIz24cu28k_p07C5oKoA7tnI'
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;

    }
}
