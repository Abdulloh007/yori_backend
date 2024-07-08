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
        
        $user = User::where('bearer',$token)->first();
        
        $tarif = json_decode($user->tarif,true);

        $task_id = $request['task'];

        $task = Task::find($task_id);
        
        $subcategory = $task->subcategory;

        $subcategories = Subcategories::find($subcategory);
        $responses = Qwert::where('user', $user->id)->get();
        
        if(count($responses) < 3) {
            return $next($request);
        }else if(isset($user->tarif)) {
            
            foreach($tarif as $tariff){
                $tarif_id = $tariff['tarif'];
    
                $tarif_expire = $tariff['tarif_expire'];
    
                if($tarif_id == $subcategories->tarif){
                    $date = date('Y-m-d');
    
                    $tarif_expire = date('Y-m-d', strtotime($tarif_expire)); 
                    if($date > $tarif_expire){
                        return redirect()->route('tarif_expire2');
                    } else {
                        return $next($request);
                    }
                } else if($tarif_id == 888) {
                    return $next($request);
                } else {
                    return redirect()->route('tarif_expire', ['status' => "Задание не доступно! Подключите подходящий тариф!"]);
                }
    
            }
        }else {
            return redirect()->route('tarif_expire2');
        };
        return redirect()->route('tarif_expire2');
    }
}
