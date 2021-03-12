<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class showDateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        
        
       $date1 = date("m/d/y");
       echo "<h1>".$date1."</h1><br>";
     //  sleep(3);
    //   echo $date1;
       return $next($request);
       
       
     /*   $url = $request->url();
        return response($date1, 200)
               ->header("Refresh", "2", "$url");*/
        
       /*sleep(1);
        return redirect()->away($url);*/
    }
}