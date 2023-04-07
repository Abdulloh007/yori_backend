<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkExamples;
use Validator;

class WorkExamplesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $we = WorkExamples::all();

        $response=['data'=>$we];

        if(!$we->isEmpty())
            return response()->json($response);
        else
            return response()->json(['status'=>'Empty']);
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
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'image' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['data' => $validator->errors()], 422);
        }

        if( isset($input['image']) && isset($input['user'])) {
            $image_path = $request->file('image')->store('workexamples/'.$input['user'].'/', 'public');
            $input['image'] = $image_path;
        }

        $response = WorkExamples::create($input);

        return response()->json(['data'=>$response],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response = WorkExamples::find($id);

        if(!$response)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $response], 200);
    }

    
    /**
     * Display the specified resource.
     */
    public function showbyuser(int $id)
    {
        $response = WorkExamples::where('user',$id)->get();

        if(!$response)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $response], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $response = WorkExamples::find($id);

        if(!$response)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $input = $request->all();

            $validator = Validator::make($input, [
                'user' => 'nullable',
                'image' => 'nullable',
                'description' => 'nullable',
            ]);

            if( isset($input['image']) && isset($input['user'])) {
                $image_path = $request->file('image')->store('workexamples/'.$input['user'].'/', 'public');
                $input['image'] = $image_path;
            }    

            if ($validator->fails()) {
                return response()->json(['data' => $validator->errors()], 400);
            }

            $response->update($input);

            return response()->json(['data' => $response], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $response = WorkExamples::find($id);

        if(!$response)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $response->delete();
            return response()->json(['data'=>['status' => 'WorkExample deleted !']], 200);
        }
    }
}
