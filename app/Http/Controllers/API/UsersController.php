<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $Users = User::all();

        $response=['data'=>$Users];

        if(!$Users->isEmpty())
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
            'phone_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['data' => $validator->errors()], 422);
        }

        if( isset($input['avatar']) ) {
            $image_path = $request->file('avatar')->store('users', 'public');
            $input['avatar'] = $image_path;
        }

        if(isset($input['password'])){
            $input['password'] = bcrypt($input['password']);  
        }

        if(isset($input['tarif_expire'])){
            $input['tarif_expire'] = date('Y-m-d',strtotime($input['tarif_expire']));  
        }

        $user = User::where('phone_number', $input['phone_number'])->first();
        
        if(is_null($user)){
            $User = User::create($input);
            $User->bearer = $User->createToken('Yori')->accessToken;
            $User->save();  
        }else{
            return response()->json(['data'=>[ 'status' => 'Duplicate Phone Number !' ]], 403);
        }


        return response()->json(['data'=>$User],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
        $Users = User::find($id);

        if(!$Users)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $Users], 200);
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
        $Users = User::find($id);

        if(!$Users)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $input = $request->all();

            $validator = Validator::make($input, [
                'phone_number' => 'nullable',
            ]);

            if ($validator->fails()) {
                return response()->json(['data' => $validator->errors()], 400);
            }

            if( isset($input['avatar']) ) {
                $image_path = $request->file('avatar')->store('users', 'public');
                $input['avatar'] = $image_path;
            }

            $Users->update($input);

            return response()->json(['data' => $Users], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $Users = User::find($id);

        if(!$Users)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $Users->delete();
            return response()->json(['data'=>['status' => 'Users deleted !']], 200);
        }
    }

    public function auth(Request $request){
        
        $input = $request->all();

        $validator = Validator::make($input, [
            'phone_number' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['data' => $validator->errors()], 400);
        }
        

        $user = User::where('phone_number',$input['phone_number'])->first();

        if(!is_null($user)){
            if(Hash::check($input['password'], $user->password)){
                $response = [
                    'data' => $user
                ];

                return response()->json($response, 200);
            }else{
                return response()->json(['data'=>['status' => 'Password is incorrect !']], 401);
            }
        }else{
            return response()->json(['data'=>['status' => 'User don\'t exists !']], 404);
        }   

    }
}
