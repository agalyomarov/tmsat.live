<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PacketController extends Controller
{
    public function index()
    {
        $packets = DB::table('packets')->orderBy('id', 'desc')->get();
        $packet_groups = DB::table('packet_groups')->get();
        return view('admin.packet.index', compact('packets', 'packet_groups'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'coding' => ['required'],
            'packet' => ['required'],
            'port' => ['required'],
            'name' => ['required'],
            'packet_group' => ['required'],
            'price' => ['required', 'numeric'],
            'name_wicardd' => ['required'],
        ]);
        try {
            $data['id_oscam'] = 0;
            DB::table('packets')->insert($data);
            return redirect()->route('admin.packet.index');
        } catch (\Exception $e) {
            return response()->view('errors.500', [
                'exception' => $e->getMessage()
            ], 500);
        }
    }
    public function edit($id, Request $request)
    {
        $packet = DB::table('packets')->where('id', $id)->first();
        $packet_groups = DB::table('packet_groups')->get();
        return view('admin.packet.edit', compact('packet', 'packet_groups'));
    }
    public function update($id, Request $request)
    {
        $data = $request->validate([
            'coding' => ['required'],
            'packet' => ['required'],
            'port' => ['required'],
            'name' => ['required'],
            'price' => ['required', 'numeric'],
            'packet_group' => ['required'],
            'name_wicardd' => ['required'],
        ]);
        try {
            DB::table('packets')->where('id', $id)->update($data);
            return redirect()->route('admin.packet.index');
        } catch (\Exception $e) {
            return response()->view('errors.500', [
                'exception' => $e->getMessage()
            ], 500);
        }
    }
    public function delete($id)
    {
        try {
            DB::table('packets')->where('id', $id)->delete();
            return redirect()->route('admin.packet.index');
        } catch (\Exception $e) {
            return response()->view('errors.500', [
                'exception' => $e->getMessage()
            ], 500);
        }
    }
}
