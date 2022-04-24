<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectServerController extends Controller
{
    public function index()
    {
        $data[1] = DB::table('users')->where('server_n', 1)->count();
        $data[2] = DB::table('users')->where('server_n', 2)->count();
        $data[3] = DB::table('users')->where('server_n', 3)->count();
        $data[4] = DB::table('users')->where('server_n', 4)->count();
        $data[5] = DB::table('users')->where('server_n', 5)->count();
        $data[6] = DB::table('users')->where('server_n', 6)->count();
        $data[7] = DB::table('users')->where('server_n', 7)->count();
        $data[8] = DB::table('users')->where('server_n', 8)->count();
        $data[9] = DB::table('users')->where('server_n', 9)->count();
        $data[11] = DB::table('users')->where('server_n', 11)->count();
        $data[11] = DB::table('users')->where('server_n', 11)->count();
        $data[12] = DB::table('users')->where('server_n', 12)->count();
        $data[13] = DB::table('users')->where('server_n', 13)->count();
        $data[14] = DB::table('users')->where('server_n', 14)->count();
        $data[15] = DB::table('users')->where('server_n', 15)->count();
        $data[16] = DB::table('users')->where('server_n', 16)->count();
        $data[17] = DB::table('users')->where('server_n', 17)->count();
        $data[18] = DB::table('users')->where('server_n', 18)->count();
        $data[19] = DB::table('users')->where('server_n', 19)->count();
        $allCount = 0;
        foreach ($data as $key => $el) {
            $allCount += $el;
        }
        // dd($allCount);
        return view('select_server');
    }
}
