<?php

namespace App\Http\Controllers\API;

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
        // return all cities if not empty
        $cities = City::all();

        if ($cities->isEmpty()) {
            return response()->json(['error' => 'No cities found'], 404);
        }
   
        return response()->json($cities, 200);
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

        $city = City::create($input);

        return response()->json(['data' => $city], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $city)
    {
        // view by id if exists
        $city = City::find($city);

        if ($city === null) {
            return response()->json(['error' => 'City not found'], 404);
        }

        return response()->json($city, 200);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(City $city)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, City $city)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(City $city)
    {
        //
    }
}
