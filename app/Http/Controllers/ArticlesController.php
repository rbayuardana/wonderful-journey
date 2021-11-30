<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Http\Controllers\Auth;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function cats($category_id){
        
        $articles=Article::where('category_id',$category_id)->get();
        return view ('article.categories', compact('articles'));        
    }

    public function blogs(){
        
       
        $id = auth()->user()->id;

        if(auth()->user()->role == 'admin'){
            $articles=Article::all();
            return view ('article.blogs', ['articles' => $articles]);    
        }
        
        $articles=Article::where("user_id",'like',$id)->get();
        return view ('article.blogs', ['articles' => $articles]);

    }

    public function index()
    {
        $categories = Category::all();
        $articles = Article::all();
        return view('home', compact('articles','categories'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view ('article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'image' => 'required|file|image'
        ]);

        $saveImage = $request->file('image');

        $imageName = $request->image->getClientOriginalName();
        $url = "Images/".$imageName;

        $destination_path = public_path('/Images');
        $saveImage->move($destination_path, $imageName);

        Article::create([
            'title' => $request-> title,
            'user_id' => auth()->user()->id,
            'category_id' => $request-> category_id,
            'description' => $request-> description,
            'image' => $url
        ]);
        // $this->storeProdType($request);
        // ProdType::create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        $categories=Category::all();
        return view('article.details', compact('article','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Article::destroy($article->id);
        return redirect('/myblog');
    }
}
