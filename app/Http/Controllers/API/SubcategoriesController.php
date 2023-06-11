<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Subcategories;
use Illuminate\Http\Request;
use Validator;

class SubcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subcategories = Subcategories::all();

        $response=['data'=>$subcategories];

        if(!$subcategories->isEmpty())
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
            'name' => 'required',
            'categories_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $subcategories = Subcategories::create($input);

        return response()->json(['data'=>$subcategories],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $subcategories = Subcategories::find($id);

        if(!$subcategories)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $subcategories], 200);
    }

    /**
     * Display the specified resource.
     */
    public function showbycategories(int $id)
    {
        $subcategories = Subcategories::where('categories_id', $id)->get();

        if(!$subcategories)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $subcategories], 200);
    }

    public function showbytarifs(int $id)
    {
        $subcategories = Subcategories::where('tarif', $id)->get();

        if(!$subcategories)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $subcategories], 200);
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
        $subcategories = Subcategories::find($id);

        if(!$subcategories)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $input = $request->all();

            $validator = Validator::make($input, [
                'name' => 'nullable',
                'categories_id' => 'nullable',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }

            
            $subcategories->update($input);

            return response()->json(['data' => $subcategories], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $subcategories = Subcategories::find($id);

         if(!$subcategories)
             return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
         else{
             $subcategories->delete();
             return response()->json(['data'=>['status' => 'Subcategories deleted !']], 200);
         }
    }
}
