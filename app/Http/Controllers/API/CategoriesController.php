<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();

        $response=['data'=>$categories];

        return response()->json($response);

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
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $category = Categories::create($input);

        return response()->json(['data'=>$category],200);

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
         // show categories by id
         $categories = Categories::find($id);

         if(!$categories)
             return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
         else
             return response()->json(['data' => $categories], 200);
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
        // update prices if exists by id
        $categories = Categories::find($id);

        if(!$categories)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $input = $request->all();

            $validator = Validator::make($input, [
                'name' => 'nullable',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }

            
            $categories->update($input);

            return response()->json(['data' => $categories], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // delete categories if exists by id
         $categories = Categories::find($id);

         if(!$categories)
             return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
         else{
             $categories->delete();
             return response()->json(['data'=>['status' => 'Category deleted !']], 200);
         }
    }
}
