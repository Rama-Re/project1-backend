<?php

namespace App\Http\Middleware;

use App\Http\Controllers\GeneralTrait;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;


class CheckUserType
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next,...$roles)
    {
        if($request->hasHeader('token')){
            $token = $request->header('token');
            $request->headers->set('token',(string)$token,true);
            $request->headers->set('Authorization','Bearer '.$token,true);
            $user = JWTAuth::parseToken()->authenticate($request);
            $type = $user->type;
            foreach ($roles as $value){
                if ($type == $value){
                    return $next($request);
                }
            }
            return response()->json(GeneralTrait::returnError('401','you don\'t have premision to do that'));
        }
        else if($request->has('email')){
            $user = User::where('email',$request->email)->get()->first();
            $type = $user->type;
            foreach ($roles as $value){
                if ($type == $value){
                    return $next($request);
                }
            }
            return response()->json(GeneralTrait::returnError('401','you don\'t have premision to do that'));
        }
        return response()->json(GeneralTrait::returnError('404','email is required'));
    }
}
