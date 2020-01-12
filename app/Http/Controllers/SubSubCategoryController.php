<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SubCategory;
use App\SubSubCategory;
use App\Http\Requests\SubSubCategoryStoreRequest;

class SubSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subsubCategories = SubSubCategory::get();
        return view('subsubcategory.index',compact('subsubCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subCategories = SubCategory::get();
        return view('subsubcategory.create',compact('subCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubSubCategoryStoreRequest $request)
    {
        //
        $subSubCategory = new SubSubCategory();
        $subSubCategory->sub_category_id = $request->sub_category_id;
        $subSubCategory->name            = $request->name;
        $subSubCategory->save();
        return redirect()->action('SubSubCategoryController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(SubSubCategory $subSubCategory)
    {
        //
        $subCategories = SubCategory::get();
        return view('subsubcategory.edit',compact('subSubCategory','subCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SubSubCategoryStoreRequest $request, SubSubCategory $subSubCategory)
    {
        //
        $subSubCategory->sub_category_id = $request->sub_category_id;
        $subSubCategory->name            = $request->name;
        $subSubCategory->save();
        return redirect()->action('SubSubCategoryController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubSubCategory $subSubCategory)
    {
        //
        $subSubCategory->delete();
        return redirect()->action('SubSubCategoryController@index');
    }
}
