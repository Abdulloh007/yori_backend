<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\Task;
use App\Models\Response as Qwert;
use App\Models\Subcategories;

class HasTarif
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $token = $request->bearerToken();
        $userID = $request->user()->id;

        $user = User::find($userID);

        $task_id = $request['task'];

        $task = Task::find($task_id);
        
        $subcategory = $task->subcategory;

        $subcategories = Subcategories::find($subcategory);
        $responses = Qwert::where('user', $user->id)->get();
        
        if(count($responses) < 3) {
            return $next($request);
        }else if($user->balance > 0 && $user->balance > ($task->budget * 0.1)) {
            // if() {
                return $next($request);
            // }
        }else {
            return redirect()->route('tarif_expire2');
        };
        return redirect()->route('tarif_expire2');
    }
}
