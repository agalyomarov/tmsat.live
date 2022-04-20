<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function store(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['icq'] = $data['telefon'];
        unset($data['telefon']);
        try {
            $data['time_added'] = time();
            $data['time_edited'] = time();
            $user = User::create($data);
            Auth::login($user);
            return redirect()->route('news');
        } catch (\Exception $e) {
            return response()->view('errors.500', [
                'exception' => $e->getMessage()
            ], 500);
        }
    }
    public function login(LoginRequest $request)
    {
        try {
            $data = $request->validated();
            $user = User::query()->where('login', $data['login'])
                ->where('password', $data['password'])
                ->first();
            if ($user !== null) {
                Auth::login($user);
                $request->session()->regenerate();
                return redirect()->route('news');
            }
            return redirect()->route('open');
        } catch (\Exception $e) {
            return response()->view('errors.500', [
                'exception' => $e->getMessage()
            ], 500);
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index');
    }
    public function update(Request $request)
    {
        try {
            $messages = [];
            if ($request->password) {
                User::where('login', $request->user()->login)->update(['password' => $request->password]);
                $messages[] = 'Парол изменен';
            }
            if ($request->icq) {
                User::where('login', $request->user()->login)->update(['icq' => $request->icq]);
                $messages[] = 'Номер телефона изменен';
            }
            return view('profile', compact('messages'));
        } catch (\Exception $e) {
            return response()->view('errors.500', [
                'exception' => $e->getMessage()
            ], 500);
        }
    }
}
