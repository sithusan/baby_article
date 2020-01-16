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
        $customer->status = true;
        $customer->save();
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
    public function checkLogin(Request $request){
        $status = Customer::where('id',$request->customer_id)->pluck('status')->first();
        if($status == false){
            return response()->json([
                'code' => 200,
                'message' => 'Not Login',
                'data' => $status,
            ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        }
        else{
            return response()->json([
                'code' => 200,
                'message' => 'Logined',
                'data' => $status,
            ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
        }
    }
    public function logout(Request $request){
        $customer = Customer::find($request->customer_id);
        $customer->status = false;
        $customer->save();
        return response()->json([
            'code' => 200,
            'message' => 'Logout',
            'data' => $customer,
        ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }
}
