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
   public function subCategory(Request $request){
          $subCategory = SubCategory::where('category_id',$request->category)->get();
          return response()->json([
          'code' => Response::HTTP_OK,
          'message' => 'SubCategory Data',
          'data' => $subCategory,
        ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
   }
   public function subSubCategory(Request $request){
        $subSubCateory = SubSubCategory::where('sub_category_id',$request->sub_category_id)->get();
          return response()->json([
          'code' => Response::HTTP_OK,
          'message' => 'SubSub Category Data',
          'data' => $subSubCateory,
        ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
   }
   public function article(Request $request){
     $article = Article::where('sub_sub_category_id',$request->sub_sub_category_id)->get();
      return response()->json([
      'code' => Response::HTTP_OK,
      'message' => 'Article Data',
      'data' => $article,
    ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
}
}
