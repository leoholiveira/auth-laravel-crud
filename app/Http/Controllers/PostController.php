<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // Método para exibir todos os posts
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Método para exibir o formulário de criação de post
    public function create()
    {
        return view('posts.create');
    }

    // Método para armazenar um novo post
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());

        return redirect('/posts')->with('success', 'Post created successfully!');
    }

    // Método para exibir um post específico
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Método para exibir o formulário de edição de post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Método para atualizar um post
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post->update($request->all());

        return redirect('/posts')->with('success', 'Post updated successfully!');
    }

    // Método para excluir um post
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted successfully!');
    }
}
