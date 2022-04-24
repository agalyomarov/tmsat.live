<?php

namespace App\Http\Controllers;

use App\Http\Requests\Diller\DillerAddUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DillerController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('dealer', $request->user()->login)->get();
        return view('diller', compact('users'));
    }
    public function addUser(DillerAddUserRequest $request)
    {
        try {
            $data = $request->validated();
            $data['dealer'] = $request->user()->login;
            $data['time_added'] = time();
            $data['time_edited'] = time();
            foreach ($data as $key => $el) {
                if ($el === null) {
                    $data[$key] = '';
                }
            }
            User::create($data);
            return redirect()->route('diller');
        } catch (\Exception $e) {
            return response()->view('errors.500', [
                'exception' => $e->getMessage()
            ], 500);
        }
    }
    public function buyPacket(User $user, Request $request)
    {
        $packets = DB::table('packets')->get();
        return view('pay', compact('user', 'packets'));
    }
    public function edit($user, Request $request)
    {
        try {
            $user = DB::table('users')->where('login', $user)->first();
            return response()->json(['user' => $user]);
        } catch (\Exception $e) {
            return response()->json(['status' => 'failed'], 500);
        }
    }
}
