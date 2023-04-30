<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Roles;
use Illuminate\Http\Request;
use Validator;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $status=0)
    {
        // view all permissions by status
        $permissions = Permission::where('status', $status)->get();
        $roles = Roles::where('id','>',2)->get();
        // if status=1 view eny view
        if($status == 0)
            return view('index',['page'=>'permission','status'=>$status,'permissions'=>$permissions]);
        if($status == 1)
            return view('index',['page'=>'permission-admin','status'=>$status,'permissions'=>$permissions, 'roles'=> $roles]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $permission)
    {
        $permission = Permission::find($permission);

        $roles = Roles::all();

        return view('index',['page'=>'permission-edit','permission'=>$permission,'roles'=>$roles]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $permission)
    {
           $permissions = Permission::find($permission);

           if(!$permissions)
               return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
           else{
                $input = $request->all();
                
                $input['get'] = implode(',',$input['get']);
                $input['post'] = implode(',',$input['post']);
                $input['delete'] = implode(',',$input['delete']);

               $permissions->update($input);
  
              return redirect()->route('permission');
           }

    }

    // update function with moderator, admin and superadmin
    public function updateAdmin(Request $request, int $permission)
    {
        $permissions = Permission::find($permission);
        if(!$permissions)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $input = $request->all();

            $roles = Roles::where('id','>',2)->get();

            foreach($roles as $role){ // 1
                if(isset($input[$role->title]) && $input[$role->title] == 'on'){
                    $a = explode(',',$permissions->get); // [1]
                    if(!in_array($role->id,$a)){
                        array_push($a,$role->id); // [1,2]
                        $permissions->get = implode(',',$a); // 1,2
                    }

                    $b = explode(',',$permissions->post);
                    if(!in_array($role->id,$b)){
                        array_push($b,$role->id);
                        $permissions->post = implode(',',$b);
                    }

                    $c = explode(',',$permissions->delete);
                    if(!in_array($role->id,$c)){
                        array_push($c,$role->id);
                        $permissions->delete = implode(',',$c);
                    }
                }else{
                    $a = explode(',',$permissions->get);
                    if(in_array($role->id,$a)){
                        $key = array_search($role->id,$a);
                        unset($a[$key]);
                        $permissions->get = implode(',',$a);
                    }

                    $b = explode(',',$permissions->post);
                    if(in_array($role->id,$b)){
                        $key = array_search($role->id,$b);
                        unset($b[$key]);
                        $permissions->post = implode(',',$b);
                    }

                    $c = explode(',',$permissions->delete);
                    if(in_array($role->id,$c)){
                        $key = array_search($role->id,$c);
                        unset($c[$key]);
                        $permissions->delete = implode(',',$c);
                    }
                }
            }

            $permissions->update($input);

            return redirect()->route('permission',1);

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permission $permission)
    {
        //
    }
}
