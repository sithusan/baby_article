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
use App\RegionAndState;
use App\Baby;
use App\Customer;

class ApiController extends Controller
{
    //
   public function RegionAndState(){
      $regionAndState = RegionAndState::get();
      return response()->json([
        'code' => Response::HTTP_OK,
        'message' => 'Region and State',
        'data' => $regionAndState,
    ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
   }
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
  public function babyStore(Request $request){
    $baby = new Baby();
    $baby->baby_name = $request->baby_name;
    $baby->dob       = $request->dob;
    $baby->gender    = $request->gender;
    $baby->customer_id = $request->customer_id;
    $baby->save();

    return response()->json([
      'code' => Response::HTTP_OK,
      'message' => 'Baby Created',
      'data' => $baby,
    ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
  }
  public function checkBaby(Request $request){
    $customer = Customer::find($request->customer_id);
    if($customer->baby == null){
        return response()->json([
            'code' => 200,
            'message' => 'Not Insert Baby Info',
            'data' => 0,
        ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }
    else{
        return response()->json([
            'code' => 200,
            'message' => 'Baby Info Inserted',
            'data' => 1,
        ], 200, ['Content-type'=> 'application/json; charset=utf-8'], JSON_UNESCAPED_UNICODE);
    }
  }
}
