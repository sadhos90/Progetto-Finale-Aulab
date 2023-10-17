<?php

namespace App\Http\Controllers;

use App\Mail\CareerRequestMail;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\New_;

class PublicController extends Controller
{
    public function chisiamo(){
        return view('chisiamo');
    }

    public function __construct(){
        $this->middleware('auth')->except('welcome');
    }

    public function welcome(){
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome', compact('articles'));
    }

    public function index()
    {
        $articles = Article::all()->sortDesc();
        return view('article.index', compact('articles'));
    }

    public function categoryShow(Category $category){
        return view('article.category', compact('category'));
    }

    public function careers(){
        return view('careers');
    }

    public function careersSubmit(Request $request){
        $request->validate([
            'role' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);

        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;

        Mail::to('admin@theaulabpost.com')->send(new CareerRequestMail(compact('role', 'email','message')));

        switch ($role) {
            case 'admin':
                $user->is_admin = NULL;
                break;

            case 'revisor':
                $user->is_revisor = NULL;
                break;
            
            case 'writer':
                $user->is_writer = NULL;
                break;
        }

        $user->update();

        return redirect(route('welcome'))->with('message', 'Grazie per averci contattato');
        
    }
}
