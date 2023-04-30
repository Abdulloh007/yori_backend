<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Response;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $responses = Response::all();
        
        foreach($responses as $response){
            $task = Task::find($response->task);
            $user = User::find($response->user);
            
            $response->task_title = $task->title;
            $response->user_name = $user->name;

        }
        
        return view('index',['page'=>'response','responses'=>$responses]);
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
    public function show(int $response)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $response)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $response)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $response)
    {
        //
    }
}
