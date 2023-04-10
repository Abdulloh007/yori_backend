<?php

namespace App\Http\Controllers\Admin;

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
        
        return view('index',['page'=>'roles','roles'=>$roles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles-create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'descr' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('roles');
        }

        $roles = Roles::create($input);

        return redirect()->route('roles');
    }

    /**
     * Display the specified resource.
     */
    public function show(Roles $roles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $role)
    {
        $roles = Roles::find($role);

        return view('roles-edit',['roles'=>$roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $role)
    {
         // update prices if exists by id
         $roles = Roles::find($role);

         if(!$roles)
             return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
         else{
             $input = $request->all();
 
             $validator = Validator::make($input, [
                 'title' => 'required',
                 'descr' => 'required',
             ]);
 
             if ($validator->fails()) {
                   return redirect()->route('roles');
             }
 
             
             $roles->update($input);
 
            return redirect()->route('roles');
         }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $role)
    {
        $roles = Roles::find($role);

        if(!$roles)
            return redirect()->route('roles');
         else{
             $roles->delete();
             return redirect()->route('roles');
        }
    }
}
