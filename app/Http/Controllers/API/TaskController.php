<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use Validator;

    class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $task = Task::all();

        $response=['data'=>$task];

        if(!$task->isEmpty())
            return response()->json($response);
        else
            return response()->json(['status'=>'Empty']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'category' => 'required',
            'subcategory' => 'required',
        ]);
        // dd($request->file())
        if(isset($input['images'])){
            $files = $request->file('images');
            $imagePaths = [];
            foreach ($files as $file) {
                $imagePath = $file->store('task-image', 'public');    
                array_push($imagePaths,$imagePath);
            }
            $input['images'] = implode(',',$imagePaths);
        }

        if(isset($input['date_of_start'])){
            $input['date_of_start'] = date('Y-m-d h:i:s',strtotime($input['date_of_start']));
        }
        if(isset($input['deadline'])){
            $input['deadline'] = date('Y-m-d h:i:s',strtotime($input['deadline']));
        }
        
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $task = Task::create($input);

        return response()->json(['data'=>$task],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
         //
         $task = Task::find($id);

         if(!$task)
             return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
         else
             return response()->json(['data' => $task], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $task = Task::find($id);

        if(!$task)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $input = $request->all();

            $validator = Validator::make($input, [
                'title' => 'nullable',
                'description' => 'nullable',
                'address' => 'nullable',
                'date_of_start' => 'nullable',
                'deadline' => 'nullable',
                'budget' => 'nullable',
                'payment_type' => 'nullable',
                'price' => 'nullable',
                'views' => 'nullable',
                'status' => 'nullable',
                'private_description' => 'nullable',
                'customer' => 'nullable',
                'performer' => 'nullable',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }

            $task->update($input);

            return response()->json(['data' => $task], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $task = Task::find($id);

        if(!$task)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $task->delete();
            return response()->json(['data'=>['status' => 'Task deleted !']], 200);
        }
    }


     /**
     * Display the specified resource.
     */
    public function showbycategories(int $category, int $subcategory=-1)
    {
         //
         if($subcategory==-1)
            $task = Task::where('category',$category)->get();
        else
            $task = Task::where('category',$category)->where('subcategory',$subcategory)->get();
            
         if(!$task)
             return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
         else
             return response()->json(['data' => $task], 200);
    }

    public function showbycustomer(int $customer)
    {
        
        $task = Task::where('customer',$customer)->get();
            
        if(!$task)
             return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
             return response()->json(['data' => $task], 200);
    }

    public function showbyperfomer(int $perfomer)
    {
        
        $task = Task::where('perfomer',$perfomer)->get();
            
        if(!$task)
             return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
             return response()->json(['data' => $task], 200);
    }

}
