<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tarif;
use Validator;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarif = Tarif::all();

        $response=['data'=>$tarif];

        if(!$tarif->isEmpty())
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
            return response()->json(['error' => $validator->errors()], 422);
        }

        $response = Tarif::create($input);

        return response()->json(['data'=>$response],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $response = Tarif::find($id);

        if(!$response)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
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
        $response = Tarif::find($id);

        if(!$response)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $input = $request->all();

            $validator = Validator::make($input, [
                'name' => 'nullable',
                'price' => 'nullable',
                'description' => 'nullable',
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
    public function destroy(string $id)
    {
        $response = Tarif::find($id);

        if(!$response)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $response->delete();
            return response()->json(['data'=>['status' => 'Tarif deleted !']], 200);
        }
    }
}
