<?php

namespace App\Http\Controllers\Admin;

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
        // view all notification

        $notifications = Notifications::all();

        foreach($notifications as $item){
            $user = User::find($item->user_id);
            if(!$user)
                $item->user_name = 'User don\'t exists';
            else
                $item->user_name = $user->name;
        }

        return view('index',['page'=>'notifications','notifications'=>$notifications]);
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
        // store notification by $input and Validator
        $input = $request->all();

        $validator = Validator::make($input, [
            'message' => 'required',
            'status' => 'required',
            'user_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $notification = Notifications::create($input);

        return route('notifications');

    }

    /**
     * Display the specified resource.
     */
    public function show(Notifications $notifications)
    {
        //
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
    public function update(Request $request, Notifications $notifications)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $notifications)
    {

        $notifications = Notifications::find($notifications);

        if(!$notifications)
            return redirect()->route('notifications');
        else{
            $notifications->delete();
            return redirect()->route('notifications');
        }

    }
}
