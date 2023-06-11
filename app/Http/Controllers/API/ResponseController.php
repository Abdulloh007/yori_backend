<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Response;
use Validator;

class ResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $responses = Response::all();

        $response=['data'=>$responses];

        if(!$responses->isEmpty())
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
            'price' => 'nullable',
            'description' => 'nullable',
            'task' => 'required',
            'user' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $response = Response::create($input);

        return response()->json(['data'=>$response],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $response = Response::find($id);

        if(!$response)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $response], 200);
    }

     /**
     * Display the specified resource.
     */
    public function showbytask(int $id)
    {
        $response = Response::where('task',$id)->get();

        if(!$response)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $response], 200);
    }

     /**
     * Display the specified resource.
     */
    public function showbyuser(int $id)
    {
        $response = Response::where('user',$id)->get();

        if(!$response)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $response], 200);
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
        $response = Response::find($id);

        if(!$response)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $input = $request->all();

            $validator = Validator::make($input, [
                'price' => 'nullable',
                'description' => 'nullable',
                'task' => 'nullable',
                'user' => 'nullable',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }

            $response->update($input);

            return response()->json(['data' => $response], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $response = Response::find($id);

        if(!$response)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $response->delete();
            return response()->json(['data'=>['status' => 'Response deleted !']], 200);
        }
    }
}
