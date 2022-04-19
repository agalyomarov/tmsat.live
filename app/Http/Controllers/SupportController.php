<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class SupportController extends Controller
{
    public function index()
    {
        return view('support');
    }
}
