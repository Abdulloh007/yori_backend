<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subcategories;
use App\Models\Categories;
use App\Models\Tarif;
use Illuminate\Http\Request;
use Validator;

class SubcategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Subcategories::all();
        
        foreach($categories as $subcategories){
            $category = Categories::find($subcategories->categories_id);
            $tarif = Tarif::find($subcategories->tarif);
            //dd($category->name);
            $subcategories['category_name'] = $category->name;
            $subcategories['tarif_name'] = $tarif->name;
        }

        return view('index',['page'=>'subcategories','subcategories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Categories::all();
        $tarif = Tarif::all();
        return view('index',['page'=>'subcategories-create','categories'=>$categories, 'tarif'=>$tarif]);
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
            'tarif' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('subcategories');
        }

        $category = Subcategories::create($input);

        return redirect()->route('subcategories');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $subcategories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $subcategories)
    {
        $category = Subcategories::find($subcategories);
        $categories = Categories::all();
        $tarif = Tarif::all();
        return view('index',['page'=>'subcategories-edit','subcategory'=>$category,'categories'=>$categories,'tarif'=>$tarif]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $subcategories)
    {
          // update prices if exists by id
          $categories = Subcategories::find($subcategories);

          if(!$categories)
              return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
          else{
              $input = $request->all();
  
              $validator = Validator::make($input, [
                  'name' => 'required',
                  'category_id' => 'required',
              ]);
  
              if ($validator->fails()) {
                    return redirect()->route('subcategories');
              }
  
              
              $categories->update($input);
  
             return redirect()->route('subcategories');
          }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $subcategories)
    {
        $category = Subcategories::find($subcategories);

        if(!$category)
            return redirect()->route('subcategories');
         else{
             $category->delete();
             return redirect()->route('subcategories');
        }
    }
}
