<?php

namespace App\Http\Middleware;

use Closure;
use App\Constant;
class ApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->header('key') !== Constant::KEY){
            return response()->json([
                'message' => "Not Authorized",
                'code'    => 401
            ],401);
        }
        return $next($request);
    }
}
