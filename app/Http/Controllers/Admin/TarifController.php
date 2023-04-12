<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tarif;
use Illuminate\Http\Request;
use Validator;


class TarifController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarif = Tarif::all();
        
        return view('index',['page'=>'tarif','tarif'=>$tarif]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index',['page'=>'tarif-create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('tarif');
        }

        $tarif = Tarif::create($input);

        return redirect()->route('tarif');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tarif $tariff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $tariff)
    {
        $tarif = Tarif::find($tariff);

        return view('index',['page'=>'tarif-edit','tarif'=>$tarif]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $tariff)
    {
         // update prices if exists by id
         $tarif = Tarif::find($tariff);

         if(!$tarif)
             return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
         else{
             $input = $request->all();
 
             $validator = Validator::make($input, [
                 'name' => 'required',
                 'description' => 'required',
                 'price' => 'required',
             ]);
 
             if ($validator->fails()) {
                   return redirect()->route('tarif');
             }
 
             
             $tarif->update($input);
 
            return redirect()->route('tarif');
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $tariff)
    {
        $tarif = Tarif::find($tariff);

        if(!$tarif)
            return redirect()->route('tarif');
         else{
             $tarif->delete();
             return redirect()->route('tarif');
        }
    }
}
