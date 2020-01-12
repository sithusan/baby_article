<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Category;
use App\Constant;
use Illuminate\Http\Response;
use App\Http\Resources\CategoryResource;
use App\Http\Controllers\Controller;
use App\SubCategory;
use App\SubSubCategory;
use App\Article;

class ApiController extends Controller
{
    //
   public function category(Request $request){
   	 
       $category = Category::get();
       return response()->json([
        'code' => Response::HTTP_OK,
        'message' => 'Category Data',
        'data' => $category,
    ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);

   }
   public function subCategory(){
        $subCategory = SubCategory::get();
          return response()->json([
          'code' => Response::HTTP_OK,
          'message' => 'SubCategory Data',
          'data' => $subCategory,
        ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
   }
   public function subSubCategory(){
        $subSubCateory = SubSubCategory::get();
          return response()->json([
          'code' => Response::HTTP_OK,
          'message' => 'SubSub Category Data',
          'data' => $subSubCateory,
        ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
   }
   public function article(){
     $article = Article::get();
      return response()->json([
      'code' => Response::HTTP_OK,
      'message' => 'Article Data',
      'data' => $article,
    ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
}
}
