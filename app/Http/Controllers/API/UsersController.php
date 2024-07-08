<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User as UserAuth;
use App\Models\UserBearer;
use App\Models\City;
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
        $Users = UserBearer::all();

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
            return response()->json(['error' => $validator->errors()], 422);
        }

        if( isset($input['avatar']) ) {
            $image_path = $request->file('avatar')->store('users', 'public');
            $input['avatar'] = $image_path;
        }

        if(isset($input['password'])){
            $input['password'] = bcrypt($input['password']);  
        }
        
        if(isset($input['tarif'])){
            $input['tarif'] == "\"\"" ? $input['tarif'] = "[]" : $input['tarif'];
        }

        $user = UserAuth::where('phone_number', $input['phone_number'])->first();
        
        if(is_null($user)){
            $User = UserAuth::create($input);
            $User->bearer = $User->createToken('Yori')->accessToken;
            $User->save();
            $response = [
                'data' => $User
            ];
            return response()->json(['data'=>$response],200);
        }else{
            return response()->json(['error'=>[ 'status' => 'Duplicate Phone Number !' ]], 403);
        }


    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
        $Users = UserBearer::find($id);
        // dd($Users);
        // $city = City::find($Users->city);
        // $Users->city = $city->name;
        
        if(!$Users)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $Users], 200);
    }

    // * Display the specified resource.

    public function byrole(int $role)
    {
        //
        $Users = UserBearer::where('role',$role)->get();
        // foreach($Users as $item) {
        //     $item->city = City::find($item->city)->name;
        // }
        if(!$Users)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $Users], 200);
    }

    // public function byphone(string $phone)
    // {
    //     $Users = UserBearer::where('phone_number',$phone)->first();
    //     $user_id = $Users->id;
        

    //     if(!$Users)
    //         return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
    //     else
    //         return response()->json(['data' => ['id'=>$user_id]], 200);
    // }


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
        $Users = UserBearer::find($id);
        
        if(!$Users)
        return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $input = $request->all();
            $validator = Validator::make($input, [
                'phone_number' => 'nullable',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }

            if( isset($input['avatar']) ) {
                $image_path = $request->file('avatar')->store('users', 'public');
                $input['avatar'] = $image_path;
            }
            
            if(isset($input['password'])){
                $input['password'] = bcrypt($input['password']);  
            }

            $Users->update($input);
            
            return response()->json(['data' => $Users], 200);
        }
    }

    public function recover(Request $request)
    {
        $input = $request->all();
        $Users = UserBearer::where('phone_number',$input['phone_number'])->first();

        if(!$Users)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else{

            $validator = Validator::make($input, [
                'phone_number' => 'nullable',
            ]);
            
            if(isset($input['password'])){
                $input['password'] = bcrypt($input['password']);  
            }

            $Users->update($input);

            return response()->json(['data' => ['status' => 'Пароль успешно обновлён!']], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $Users = UserBearer::find($id);

        if(!$Users)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
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
            return response()->json(['error' => $validator->errors()], 400);
        }
        

        $user = UserAuth::where('phone_number',$input['phone_number'])->first();

        if(!is_null($user)){
            if(Hash::check($input['password'], $user->password)){
                $response = [
                    'data' => $user
                ];

                return response()->json($response, 200);
            }else{
                return response()->json(['error'=>['status' => 'Password is incorrect !']], 401);
            }
        }else{
            return response()->json(['error'=>['status' => 'User don\'t exists !']], 404);
        }   

    }
}
