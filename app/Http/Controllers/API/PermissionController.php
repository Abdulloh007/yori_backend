<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Validator;
use Hash;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // view all permission
        $permission = Permission::all();
    
        $response = [
            'data' => $permission
        ];

        if(is_null($permission))
            return response()->json($response, 200);
        else
            return response()->json(['error' => 'No permission found'], 404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'route' => 'required',
            'get' => 'required',
            'post' => 'required',
            'delete' => 'required',
        ]);

        if($validator->fails())
            return response()->json(['error' => $validator->errors()], 400);
            
        //$input['translatable'] = filter_var($input['translatable'], FILTER_VALIDATE_BOOLEAN);;


        $permission = Permission::create($input);
        
        $response = [
          'data' => $permission
        ];

        return response()->json($permission, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $permission = Permission::find($id);

        if(!is_null($permission))
            return response()->json(['error' => 'Permission not found'], 404);

        $response = [
            'data' => $permission
        ];

        return response()->json($response, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'route' => 'nullable',
        ]);

        if($validator->fails())
            return response()->json(['error' => $validator->errors()], 400);

        $permission = Permission::find($id);

        if(is_null($permission))
            return response()->json(['error' => 'Permission not found'], 404);

        $permission->update($input);

        $response = [
            'data' => $permission
        ];

        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permission = Permission::find($id);

        if(is_null($permission))
            return response()->json(['error' => 'Permission not found'], 404);

        $permission->delete();

        $response = [
            'data' => "Permission deleted"
        ];

        return response()->json($response, 200);
    }

}
