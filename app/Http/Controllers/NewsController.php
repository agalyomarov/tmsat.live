<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('posts')->orderBy('start_publish', 'desc')->get();
        return view('news', compact('news'));
    }
}
