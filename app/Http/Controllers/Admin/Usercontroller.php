<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Http\Requests\Admin\UserUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('time_added', 'DESC')->paginate(50);
        // dd($users);
        return view('admin.index', compact('users'));
    }
    public function store(UserRequest $request)
    {
        $data = $request->validated();
        foreach ($data as $key => $el) {
            if (!$el) {
                unset($data[$key]);
            }
            if ($el == 'on') {
                $data[$key] = true;
            }
        }
        try {
            $data['time_added'] = time();
            $data['time_edited'] = time();
            $user = User::create($data);
            return redirect()->route('admin.users');
        } catch (\Exception $e) {
            return response()->view('errors.500', [
                'exception' => $e->getMessage()
            ], 500);
        }
    }
    public function edit(User $login, Request $request)
    {
        return view('admin.users.edit', ['user' => $login]);
    }
    public function update(User $login, UserUpdateRequest $request)
    {
        $data = $request->validated();
        try {
            foreach ($data as $key => $el) {
                if ($el === null) {
                    $data[$key] = '';
                }
                if ($el == 'on') {
                    $data[$key] = true;
                }
            }
            $data['time_edited'] = time();
            $login->update($data);
            return redirect()->route('admin.users');
        } catch (\Exception $e) {
            return response()->view('errors.500', [
                'exception' => $e->getMessage()
            ], 500);
        }
    }
}
