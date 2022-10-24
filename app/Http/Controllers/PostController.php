<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $allPosts = [
            ['id' => 1 , 'title' => 'Laravel' , 'body' => 'PHP', 'auther' => 'amira' , 'created_at' => now()],
            ['id' => 2 , 'title' => 'NodeJs' , 'body' => 'JS', 'auther' => 'noha' , 'created_at' => now()],
        ];

        return view('posts.index', compact('allPosts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {

        response('Data has been saved!');

        return redirect()->route('post.index');

    }

    public function edit(Request $request, $id)
    {
        $post = [
            ['id' => 1 , 'title' => 'Laravel' , 'body' => 'PHP', 'auther' => 'amira' , 'created_at' => now()],
            ['id' => 2 , 'title' => 'NodeJs' , 'body' => 'JS', 'auther' => 'noha' , 'created_at' => now()],
        ];
        return view('posts.edit', compact('post' , 'id'));
    }

    public function update(Request $request , $id)
    {

        response('Data has been updated!');

        return redirect()->route('post.index');
    }

    public function show(Request $request, $id)
    {
        $UserPosts = [
            ['id' => 1 , 'title' => 'Laravel' , 'body' => 'PHP', 'auther' => 'amira' , 'created_at' => now()],
            ['id' => 2 , 'title' => 'NodeJs' , 'body' => 'JS', 'auther' => 'noha' , 'created_at' => now()],
        ];

        dd($UserPosts[$id - 1]);
    }

    public function delete($id){

        return redirect()->route('post.index');

    }
}
