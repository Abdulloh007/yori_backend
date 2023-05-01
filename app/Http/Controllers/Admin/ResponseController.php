<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Response;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;

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

            if(!$task)
                $response->task_title = 'Task don\'t exists';
            else{
                $response->task_title = $task->title;
            }
            if(!$user){
                $response->user_name = 'User don\'t exists';
            }else
                $response->user_name = $user->name;
        }
        
        return view('index',['page'=>'response','responses'=>$responses]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index',['page'=>'response-create']);
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
        $response = Response::find($response);

        return view('index',['page'=>'response-edit','response'=>$response]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $response)
    {
          // update prices if exists by id
          $response = Response::find($response);

          if(!$response)
              return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
          else{
              $input = $request->all();
              $validator = Validator::make($input, [
                  'description' => 'required',
                  'price' => 'required',
                  'status' => 'required',
              ]);
  
              if ($validator->fails()) {
                    return redirect()->route('response');
              }
              $response->update($input);

              // if $input['status'] = 0 add new notification
                if($input['status'] == 0){
                    $task = Task::find($response->task);
                    $title = $task->title;
                    DB::insert('insert into notifications (message, user_id, status) values (?, ?, ?)', ['Задание: '.$title.', на которое вы откликнулись была закрыта !', $response->user, 0]);
                }else{
                    $task = Task::find($response->task);
                    $title = $task->title;
                    DB::insert('insert into notifications (message, user_id, status) values (?, ?, ?)', ['Ваш отлик на задание: '.$title.', принят !', $response->user, 0]);
                }
              $response->status = $input['status'];
              $response->save();

             return redirect()->route('response');
          }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $response)
    {
        $response = Response::find($response);

        if(!$response)
            return redirect()->route('response');
         else{
             $response->delete();
             return redirect()->route('response');
        }
    }
}
