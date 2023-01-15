<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class articleController extends Controller {
    public function index() {
        $articles = Article::orderBy('id', 'desc')->paginate(6);

        return view('article.index', compact('articles'));
    }

    public function show($slug) {
        // die($slug);
        // return view('single', ['title' => $slug]);
        $article = Article::where('slug', $slug)->first();

        if($article == null) {
            abort(404);
        }

        return view('article.single', compact('article')); // guanakan cara ini jika nama variablenya sama, lebih simple
    }

    public function create() {
        return view('article.create');
    }

    public function store(Request $request) {

        $request->validate([
            'thumbnail'=>'mimes:jpeg,png,jpg,gif,svg',
            'title'=>'required|max:255|min:3',
            'subject'=>'required|min:10'
        ]);

        $imgName = null;
        if($request->thumbnail) {
            $imgName = $request->thumbnail->getClientOriginalName().'-'.time().'.'.
                        $request->thumbnail->extension();
            $request->thumbnail->move(public_path('images'), $imgName);
        }


        Article::create([
            'title'=> $request->title,
            'slug'=>Str::slug($request->title, '-'),
            'subject'=> $request->subject,
            'thumbnail'=>$imgName
        ]);

        return redirect('/article');
    }

    public function edit($id) {
        $article = Article::find($id);

        return view('article.edit', compact('article' ));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'title'=>'required|max:255|min:3',
            'subject'=>'required|min:10'
        ]);


        $imgName = null;
        if($request->thumbnail) {
            $imgName = $request->thumbnail->getClientOriginalName().'-'.time().'.'.
                        $request->thumbnail->extension();
            $request->thumbnail->move(public_path('images'), $imgName);
        }


        Article::find($id)->update([
            'title'=> $request->title,
            'subject'=> $request->subject,
            'thumbnail'=>$imgName
        ]);

        return redirect('/article');
    }

    public function destroy($id) {
        $delete = Article::find($id);

        if($delete->thumbnail) {
            unlink('images/'.$delete->thumbnail);
        }

        $delete->delete();
        return redirect('/article');
    }
}