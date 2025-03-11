<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeValidation
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // echo "echo from global middleware";
        // echo "<pre>";
        // print_r($request);
        // if($request->age<18)
        // {
        //     die("You are not allowed to access this page");
        // }
        return $next($request);
    }
}
