<?php

namespace App\Http\Middleware\Admin;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Permission;

class AccessControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
       if(is_null($request->session()->get('user'))){
            return redirect()->route('login');
       }else{
            $user = $request->session()->get('user');
            $route = $request->route()->getName();
            $method = $request->method();

            if(!is_array($route)){
                $router = $route;
                $route = [];
                $route[0] = $router;
            }else{
                $route = explode('.', $route);
            }

            $permission = Permission::where('route',$route[0])->first();
            // return redirect()->route('home1',$route[0]);
            if ($user && $permission) { 
                $role = $user->role;
                switch($method){
                    case 'GET':
                        $var = $permission->get;
                        break;
                    case 'POST':
                        $var = $permission->post;
                        break;
                    default:
                        return redirect()->route( 'home');
                }
                
                $var = explode(',',$var);
                if(!in_array($role,$var)){
                    return redirect()->route( 'home');
                }else
                    return $next($request);
            }else{
                return redirect()->route('login');
            }
            
           return $next($request);
       }
    }
}
