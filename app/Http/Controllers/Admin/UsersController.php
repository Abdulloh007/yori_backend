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

        $users = User::where('role','<',$user->role)->get();
        
        return view('index',['page'=>'users','users'=>$users]);

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
    public function show(int $user)
    {
        // view users-show return user by id

        $user = User::find($user);

        $city = City::find($user->city);
        $user->city = $city->name;

        $role = Roles::find($user->role);
        $user->role = $role->title;

        $tarif = json_decode($user->tarif);
        $tariffs=[];
        foreach($tarif as $item){
            $tarif = Tarif::find($item->tarif);
            array_push($tariffs,$tarif->name);
        }
        $user->tarif = $tariffs;

        return view('index',['page'=>'users-show','user'=>$user]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
