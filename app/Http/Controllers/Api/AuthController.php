<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $customer = new Customer();
        $customer->name         = $request->name;
        $customer->daddy_name   = $request->daddy_name;
        $customer->division_or_state = $request->division_or_state;
        $customer->password          = bcrypt($request->passwordd);
        $customer->save();
        if($customer){
            return response()->json([
                'code' => Response::HTTP_OK,
                'message' => 'User Register',
                'data' => $customer,
            ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }
}
