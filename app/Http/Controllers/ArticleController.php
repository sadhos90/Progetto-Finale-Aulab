<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function destroy(Article $article){
        foreach($article->tags as $tag){
          $article->tags()->detach($tag);

     }
     $article->delete();
     return redirect(route('writer.dashboard'))->with('message', 'Articolo correttamente eliminato');
    }

     public function edit(Article $article){
        return view('article.edit', compact('article'));
     }

    public function index()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {   

        
        $article = Article::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'img' => $request->file('img')->store('public/img'),
            'category_id' => $request->category_id,
            'slug'=> Str::slug($request->title),
            
        ]);


        $tags = explode(',', $request->tags);

        foreach($tags as $tag){
            $newTag = Tag::updateOrCreate([
                'name' => $tag,
            ]);
            $article->tags()->attach($newTag->id);
        }

        return redirect()->route('article.index')->with('message', 'Articolo inserito con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' =>'required|min:5|unique:articles,title,'.$article->id,
            'subtitle' =>'required|min:5|unique:articles,subtitle,'.$article->id,
            'body' =>'required|min:10',
            'image' =>'image',
            'category' =>'required',
            'tags' =>'required',
        ]);
        $article->update(
            [
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'body' => $request->input('body'),
                'category_id' => $request->category,
                'slug'=> Str::slug($request->title),
                
            ]
        );

        if($request->image){
            Storage::delete($article->image);
            $article->update(['img' => $request->file('image')->store('public/img')]);
        }

        $tags = explode(',' , $request->tags);
        $newtags = [];

        foreach ($tags as $tag) {
            $newTag = Tag::updateOrCreate([
                'name' => $tag,
            ]);
            $newtags[] = $newTag->id;
        }

        $article->tags()->sync($newtags);

        return redirect()->route('writer.dashboard')->with('message', 'Articolo modificato con successo');
    }

    /**
     * Remove the specified resource from storage.
     */


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function userShow(User $user){
        return view('article.user', compact('user'));
    }

    public function byCategory(Category $category){
        $articles = $category->articles->sortbyDesc('created_at')->filter(function ($article) {
            return $article->is_accepted == true;
        });
        return view('article.by-category', compact('articles', 'category'));
    }

    public function byWriter(User $writer){
        $articles = $writer->articles->sortbyDesc('created_at')->filter(function ($article) {
            return $article->is_accepted == true;
        });
        return view('article.by-user', compact('user', 'articles'));
    }

    public function articleSearch(Request $request){
        $query = $request->get('query');
        $articles = Article::search($query)->where('is_accepted', true)->orderBy('created_at', 'desc')->get();

        return view('article.search-index', compact('articles', 'query'));
    }
}
