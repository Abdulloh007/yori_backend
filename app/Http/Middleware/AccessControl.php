<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use Closure;
use Illuminate\Http\Request;
use App\Models\User;
use Route;

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

        $route = $request->route()->uri();
        $method = $request->method();
        $response = $next($request);

        $strroute = $route;

        // return redirect()->route('view-data', dd($request->route()->uri()));



        $userId = $request->user()->id;
        $user = User::find($userId);

        $route = explode('/', $strroute);
        $permission = Permission::where('route', $route[1])->first();



        if ($user && $permission) {
            $role = $user->role;
            switch ($method) {
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

            $var = explode(',', $var);
            if (!in_array($role, $var)) {
                return redirect()->route('accessdenied');
            }
        } else {
            return redirect()->route('accessdenied');
        }

        return $response;
    }
}
