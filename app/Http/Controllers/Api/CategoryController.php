<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    //
   public function index(){
     $response = Category::get();
     return response()->json($response);
   }
}
