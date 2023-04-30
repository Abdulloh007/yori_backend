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

                $roles = Roles::where('id','<=',2)->get();

                foreach($roles as $role){
                    $a = $role->title;
    
                    if(isset($input[$a]) && $input[$a] == 'on'){
                        $a = explode(',',$permissions->get);
                        if(!in_array($role->id,$a)){
                            array_push($a,$role->id);
                            $input['get'] = implode(',',$a);
                        }
    
                        $a = explode(',',$permissions->post);
                        if(!in_array($role->id,$a)){
                            array_push($a,$role->id);
                            $input['post'] = implode(',',$a);
                        }
    
                        $a = explode(',',$permissions->delete);
                        if(!in_array($role->id,$a)){
                            array_push($a,$role->id);
                            $input['delete'] = implode(',',$a);
                        }
                    }else{
                        $a = explode(',',$permissions->get);
                        if(in_array($role->id,$a)){
                            $key = array_search($role->id,$a);
                            unset($a[$key]);
                            $input['get'] = implode(',',$a);
                        }
    
                        $a = explode(',',$permissions->post);
                        if(in_array($role->id,$a)){
                            $key = array_search($role->id,$a);
                            unset($a[$key]);
                            $input['post'] = implode(',',$a);
                        }
    
                        $a = explode(',',$permissions->delete);
                        if(in_array($role->id,$a)){
                            $key = array_search($role->id,$a);
                            unset($a[$key]);
                            $input['delete'] = implode(',',$a);
                        }
                    }
                }
                
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

            foreach($roles as $role){

                if(isset($input[$role->title]) && $input[$role->title] == 'on'){
                    $a = explode(',',$permissions->get);
                    if(!in_array($role->id,$a)){
                        array_push($a,$role->id);
                        $input['get'] = implode(',',$a);
                    }

                    $a = explode(',',$permissions->post);
                    if(!in_array($role->id,$a)){
                        array_push($a,$role->id);
                        $input['post'] = implode(',',$a);
                    }

                    $a = explode(',',$permissions->delete);
                    if(!in_array($role->id,$a)){
                        array_push($a,$role->id);
                        $input['delete'] = implode(',',$a);
                    }
                }else if (!isset($input[$role->title])){
                    $a = explode(',',$permissions->get);
                    if(in_array($role->id,$a)){
                        $key = array_search($role->id,$a);
                        unset($a[$key]);
                        $input['get'] = implode(',',$a);
                    }

                    $a = explode(',',$permissions->post);
                    if(in_array($role->id,$a)){
                        $key = array_search($role->id,$a);
                        unset($a[$key]);
                        $input['post'] = implode(',',$a);
                    }

                    $a = explode(',',$permissions->delete);
                    if(in_array($role->id,$a)){
                        $key = array_search($role->id,$a);
                        unset($a[$key]);
                        $input['delete'] = implode(',',$a);
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
