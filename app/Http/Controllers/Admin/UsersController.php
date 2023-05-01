<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Roles;
use App\Models\Tarif;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $user = $request->session()->get('user');
        if ($user === null) {
            return redirect()->route('home');
        }
        $roles = Roles::all();

        if(isset($_GET['role']) && $_GET['role']!=0){
            $getrole = $_GET['role'];
            $users = User::where('role',$getrole)->where('role','<',$user->role)->get();
        }else{
            $users = User::where('role','<',$user->role)->get();
        }
        
        return view('index',['page'=>'users','users'=>$users, 'roles'=>$roles]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index',['page'=>'users-create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(int $user, int $admin=0)
    {
        // view users-show return user by id

        $user = User::find($user);

        $city = City::find($user->city);
        if($city)
            $user->city = $city->name;

        $role = Roles::find($user->role);
        if($role)
            $user->role = $role->title;

        if(!is_null($user->tarif)){
            $tarif = json_decode($user->tarif);
            $tariffs=[];
            foreach($tarif as $item){
                $tarif = Tarif::find($item->tarif);
                array_push($tariffs,$tarif->name);
            }
            $user->tarif = $tariffs;
        }else{
            $user->tarif = [];
        }

        if($admin==0)
            return view('index',['page'=>'users-show','user'=>$user]);
        else
            return view('index',['page'=>'users-show','user'=>$user,'admin'=>1]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,int $user)
    {
        $admin = $request->session()->get('user');

        $user = User::find($user);

        $roles = Roles::where('id','<',$admin->role)->get();

        $city = City::all();

        return view('index',['page'=>'users-edit','user'=>$user, 'roles'=>$roles, 'city'=>$city]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $user)
    {
          $user = User::find($user);

          if(!$user)
              return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
          else{
              $input = $request->all();
  
              $validator = Validator::make($input, [
                'name' => 'required',
                'surname' => 'required',
                'avatar' => 'nullable',
                'age' => 'required',
                'city' => 'required',
                'rating' => 'required',
                'bio' => 'required',
                'video_about' => 'required',
                'role' => 'required',
                'balance' => 'nullable',
                'email' => 'required',
                'date_of_birth' => 'required',
                'phone_number' => 'required',
                'sex' => 'required',
              ]);
  
                if ($validator->fails()) {
                     return redirect()->route('users');
                    //dd($validator->errors());
                }

                if(isset($input['avatar'])) {
                    $image_path = $request->file('avatar')->store('users', 'public');
                    $input['avatar'] = $image_path;
                }else{
                    $input['avatar'] = $input['old_avatar'];
                }
              
              $user->update($input);
  
             return redirect()->route('users');
          }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $user)
    {

        $user = User::find($user);

        if(!$user)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $user->delete();
            return redirect()->route('users');
        }

    }
}
