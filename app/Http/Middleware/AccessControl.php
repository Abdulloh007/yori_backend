<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use Closure;
use Illuminate\Http\Request;
use App\Models\User;

class AccessControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();
        $route = $request->route()->getName();
        $method = $request->method();
        $response = $next($request);
        
        $user = User::where('bearer',$token)->first();

        if(!is_array($route)){
            $route = [];
            $route[0] = $route;
        }else{
            $route = explode('.',$route);
        }

        $permission = Permission::where('route',$route[0])->first();
       
        if ($user && $permission) {
            $role = $user->role;
            switch($method){
                case 'GET':
                    $var = $permission->get;
                    break;
                case 'POST':
                    $var = $permission->post;
                    break;
                case 'DELETE':
                    $var = $permission->delete;    
                    break;
            }
            
            $var = explode(',',$var);
            if(!in_array($role,$var)){
                return redirect()->route('accessdenied');
            }
            
        }else{
            return redirect()->route('accessdenied');
        }
        
        return $response;
    }
}
