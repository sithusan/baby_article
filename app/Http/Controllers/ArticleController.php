<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\SubSubCategory;
use App\Http\Requests\ArticleStoreRequest;
use App\Utils\Video;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::get();
        return view('article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $subSubCategories = SubSubCategory::get();
        return view('article.create',compact('subSubCategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleStoreRequest $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->sub_sub_category_id = $request->sub_sub_category_id;
        $article->video_url       = $request->video;
        $article->summary         = $request->summary;
        $article->description     = $request->description;
        $article->save();
        return redirect()->action('ArticleController@index');
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
    public function edit(Article $article)
    {
        //
        $subSubCategories = SubSubCategory::get();
        return view('article.edit',compact('article','subSubCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleStoreRequest $request,Article $article)
    {
        //
        $article->title = $request->title;
        $article->sub_sub_category_id = $request->sub_sub_category_id;
        $article->video_url       = $request->video_url;
        $article->summary         = $request->summary;
        $article->description     = $request->description;
        $article->save();
        return redirect()->action('ArticleController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        $article->delete();
        return redirect()->action('ArticleController@index');
    }
}
