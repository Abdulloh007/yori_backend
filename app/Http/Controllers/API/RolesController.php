<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use Illuminate\Http\Request;
use Validator;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Roles::all();

        $response=['data'=>$roles];

        if(!$roles->isEmpty())
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
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['data' => $validator->errors()], 422);
        }

        $response = Roles::create($input);

        return response()->json(['data'=>$response],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $roles)
    {
        $response = Roles::find($roles);

        if(!$response)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $response], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Roles $roles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $roles)
    {
        $response = Roles::find($roles);

        if(!$response)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $input = $request->all();

            $validator = Validator::make($input, [
                'title' => 'nullable',
                'descr' => 'nullable',
            ]);

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
    public function destroy(int $roles)
    {
        $response = Roles::find($roles);

        if(!$response)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $response->delete();
            return response()->json(['data'=>['status' => 'Roles deleted !']], 200);
        }
    }
}
