<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return all tasks

        $tasks = Task::all();

        return view('index',['page'=>'task','tasks'=>$tasks]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index',['page'=>'task-create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'address' => 'required',
            'date_of_start' => 'required',
            'deadline' => 'required',
            'budget' => 'required',
            'payment_type' => 'required',
            'views' => 'required',
            'status' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
            'private_description' => 'required',
            'customer' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('task');
        }

        $task = Task::create($input);

        return redirect()->route('task');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $task)
    {

        $task = Task::find($task);

        $customer = User::find($task->customer);
        $task->customer_name = $customer->name;

        $perfomer = User::find($task->perfomer);
        if ($perfomer) {
            $task->perfomer_name = $perfomer->name;
        }
        
        return view('index',['page'=>'task-show','task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        //
    }
}
