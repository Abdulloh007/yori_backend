<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Subcategories;
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

        foreach($tasks as $task){
            $customer = User::find($task->customer);
            if ($customer) {
                $task->customer_name = $customer->name;
            }
        }

        return view('index',['page'=>'task','tasks'=>$tasks->reverse()]);
        
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
        if ($customer) {
            $task->customer_name = $customer->name;
        }

        $perfomer = User::find($task->perfomer);
        if ($perfomer) {
            $task->perfomer_name = $perfomer->name;
        }

        $category = Categories::find($task->category);
        if ($category) {
            $task->category = $category->name;
        }

        $subcategory = Subcategories::find($task->subcategory);
        if ($subcategory) {
            $task->subcategory = $subcategory->name;
        }
        
        return view('index',['page'=>'task-show','task'=>$task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $task)
    {

        $task = Task::find($task);

        $category = Categories::all();
        $subcategory = Subcategories::all();

        return view('index',['page'=>'task-edit','task'=>$task, 'category'=>$category, 'subcategory'=>$subcategory]);
    }
    
    public function approve(int $task)
    {

        $task = Task::find($task);
        $task->update(['status' => 1]);
        return redirect()->route('task');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $task)
    {
        $task = Task::find($task);

        if(!$task)
           return redirect()->route('task');
        else{
            $input = $request->all();

            $validator = Validator::make($input, [
                'title' => 'required',
                'description' => 'required',
                'date_of_start' => 'required',
                'deadline' => 'nullable',
                'private_description' => 'nullable',
                'budget' => 'required',
                'price' => 'required',
                'payment_type' => 'required',
                'category' => 'required',
                'subcategory' => 'required',
            ]);

              if ($validator->fails()) {
                  dd($validator->errors());
                   return redirect()->route('task');
              }
            
            $task->update($input);

           return redirect()->route('task');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $task)
    {
        $task = Task::find($task);

        if(!$task)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $task->delete();
            return redirect()->route('task');
        }
    }
}
