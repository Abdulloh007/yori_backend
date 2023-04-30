<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Validator;
use App\Models\User;
use App\Models\Permission;
use App\Models\Roles;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if(is_null($request->session()->get('user'))){
            // $request->session()->forget('key');
            // $request->session()->get('key');
            // $request->session()->set('key','value');
            return redirect()->route('login');
        }else{
            return redirect()->route('index');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sign-in');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'phone_number' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
                return redirect()->route('404');    
        }

        $user = User::where('phone_number',$input['phone_number'])->first();

        if(!is_null($user)){
            if(Hash::check($input['password'], $user->password)){
                
                $permission = Permission::where('route','admin')->first();
                $get = $permission->get;
                $array = explode(',',$get);
                // dd($get);
                // dd(in_array($user->role,$array));
                if(in_array($user->role,$array)){
                    $request->session()->put('user',$user);
                    return redirect()->route('home');
                }else{
                    return redirect()->route('404');
                }
            }else{
                return redirect()->route('404');
            }
        }else{
            return redirect()->route('404');
        }   
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {  
            return view('index',['page'=>'dashboard']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $none)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $none)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $none)
    {
        //
    }
}
