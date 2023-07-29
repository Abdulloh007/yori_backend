<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use Validator;

class CategoriesController extends Controller
{
    /**                     
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categories::all();
        
        return view('index',['page'=>'categories','categories'=>$categories]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index',['page'=>'categories-create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'tj_name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('categories');
        }

        if( isset($input['icon']) ) {
            $image_path = $request->file('icon')->store('icons', 'public');
            $input['icon'] = $image_path;
        }

        $category = Categories::create($input);

        return redirect()->route('categories');

    }

    /**
     * Display the specified resource.
     */
    public function show(Categories $categories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $categories)
    {

        $category = Categories::find($categories);

        return view('index',['page'=>'categories-edit','category'=>$category]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
          // update prices if exists by id
          $categories = Categories::find($id);

          if(!$categories)
              return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
          else{
            
            $input = $request->all();
  
            $validator = Validator::make($input, [
                'name' => 'required',
                'tj_name' => 'required',
            ]);
  
            if ($validator->fails()) {
                return redirect()->route('categories');
            }
  
            if( isset($input['icon']) ) {
                $image_path = $request->file('icon')->store('icons', 'public');
                $input['icon'] = $image_path;
            }
            if(is_null($input['icon'])){
                $input['icon'] = $input['prev_icon'];
            }

            $categories->update($input);
  
            return redirect()->route('categories');
          }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $categories)
    {
        $category = Categories::find($categories);

        if(!$category)
            return redirect()->route('categories');
         else{
             $category->delete();
             return redirect()->route('categories');
        }
    }
}
