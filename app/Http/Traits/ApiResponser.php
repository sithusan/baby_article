<?php 

namespace App\Http\Traits;
use Illuminate\Http\Response;

trait ApiResponser{

    public function respondCollection($message,$data,$status = 200){
        return response()->json([
            'code' => Response::HTTP_OK,
            'message' => $message,
            'data' => $data,
          ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }
}