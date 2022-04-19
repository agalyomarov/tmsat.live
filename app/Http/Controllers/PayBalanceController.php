<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayBalanceController extends Controller
{
    public function index()
    {
        return view('pay_balance');
    }
}
