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
use App\Http\Resources\RegionAndStateResource;
use App\Http\Traits\ApiResponser;

class ApiController extends Controller
{
    //
   use ApiResponser;
   public function RegionAndState(){
      $regionAndState = RegionAndState::get();
      return $this->respondCollection('Region and State',RegionAndStateResource::collection($regionAndState));
   }
   public function category(Request $request){
   	 
       $category = Category::get();
       return $this->respondCollection('Category',$category);

   }
   public function subCategory(Request $request){
          $subCategory = SubCategory::where('category_id',$request->category)->get();
          return $this->respondCollection('Sub Category',$subCategory);
   }
   public function subSubCategory(Request $request){
        $subSubCateory = SubSubCategory::where('sub_category_id',$request->sub_category_id)->get();
        return $this->respondCollection('Sub Sub Category',$subSubCateory);
   }
   public function article(Request $request){
     $article = Article::where('sub_sub_category_id',$request->sub_sub_category_id)->get();
     return $this->respondCollection('Article',$article);
  }
  public function babyStore(Request $request){
    $baby = new Baby();
    $baby->baby_name = $request->baby_name;
    $baby->dob       = $request->dob;
    $baby->gender    = $request->gender;
    $baby->customer_id = $request->customer_id;
    $baby->save();
    
    return $this->respondCollection('Baby Created',$baby);
  }
}
