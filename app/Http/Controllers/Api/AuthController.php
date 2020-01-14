<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Hash;

class AuthController extends Controller
{
    //
    public function register(Request $request){
        $customer = new Customer();
        $customer->name         = $request->name;
        $customer->daddy_name   = $request->daddy_name;
        $customer->division_or_state = $request->division_or_state;
        $customer->password          = bcrypt($request->password);
        $customer->save();
        if($customer){
            return response()->json([
                'code' => Response::HTTP_OK,
                'message' => 'User Register',
                'data' => $customer,
            ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }
    public function login(Request $request){
        $customer = Customer::where('name', $request->name)->first();
        if ($customer) {
             if (Hash::check($request->password, $customer->password)) {
                 return response()->json([
                    'code' => Response::HTTP_OK,
                    'message' => 'Success',
                    'data' => $customer,
                ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
             } else {
                return response()->json([
                    'code' => 422,
                    'message' => 'Password does not match',
                    'data' => $customer,
                ], 422, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
            }

        } else {
            return response()->json([
                'code' => 422,
                'message' => 'User not found',
                'data' => $customer,
            ], 422, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        }

    }
}
