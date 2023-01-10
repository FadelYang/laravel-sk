<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller {
    public function index() {
        return view('index');
    }

    public function show($slug) {
        // die($slug);
        // return view('single', ['title' => $slug]);
        return view('single', compact('slug')); // guanakan cara ini jika nama variablenya sama, lebih simple
    }
}
