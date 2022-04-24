<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $posts = DB::table('posts')->orderBy('start_publish', 'desc')->get();
        // dd($posts);
        return view('admin.news.index', compact('posts'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'start_publish' => ['required'],
            'end_publish' => ['required'],
            'is_sale' => [],
            'sale_title' => [],
            'body' => ['required'],
        ]);
        try {
            $data['start_publish'] = strtotime($data['start_publish']) + 86400;
            $data['end_publish'] = strtotime($data['end_publish']) + 86400;
            if (isset($data['is_sale'])) {
                $data['is_sale'] = 1;
            } else {
                $data['is_sale'] = 0;
                $data['sale_title'] = '';
            }
            DB::table('posts')->insert($data);
            return redirect()->route('admin.news.index');
        } catch (\Exception $e) {
            return response()->view('errors.500', [
                'exception' => $e->getMessage()
            ], 500);
        }
    }
    public function edit($post, Request $request)
    {
        $post = DB::table('posts')->where('id', $post)->first();
        return view('admin.news.edit', compact('post'));
    }
    public function update($post, Request $request)
    {
        $data = $request->validate([
            'start_publish' => ['required'],
            'end_publish' => ['required'],
            'is_sale' => [],
            'sale_title' => [],
            'body' => ['required'],
        ]);
        try {
            $data['start_publish'] = strtotime($data['start_publish']);
            $data['end_publish'] = strtotime($data['end_publish']);
            if (isset($data['is_sale'])) {
                $data['is_sale'] = 1;
            } else {
                $data['is_sale'] = 0;
                $data['sale_title'] = '';
            }
            DB::table('posts')->where('id', $post)->update($data);
            return redirect()->route('admin.news.index');
        } catch (\Exception $e) {
            return response()->view('errors.500', [
                'exception' => $e->getMessage()
            ], 500);
        }
    }
    public function delete($post)
    {
        DB::table('posts')->where('id', $post)->delete();
        return redirect()->route('admin.news.index');
    }
}
