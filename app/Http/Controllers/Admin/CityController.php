<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use Illuminate\Http\Request;
use Validator;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $city = City::all();
        
        return view('index',['page'=>'city','city'=>$city]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index',['page'=>'city-create']);
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
            return redirect()->route('city');
        }

        $city = City::create($input);

        return redirect()->route('city');
    }

    /**
     * Display the specified resource.
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $city)
    {
        $city = City::find($city);

        return view('index',['page'=>'city-edit','city'=>$city]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $city)
    {
         // update prices if exists by id
         $city = City::find($city);

         if(!$city)
             return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
         else{
             $input = $request->all();
 
             $validator = Validator::make($input, [
                 'name' => 'required',
             ]);
 
             if ($validator->fails()) {
                   return redirect()->route('city');
             }
 
             
             $city->update($input);
 
            return redirect()->route('city');
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $city)
    {
        $city = City::find($city);

        if(!$city)
            return redirect()->route('city');
         else{
             $city->delete();
             return redirect()->route('city');
        }
    }
}
