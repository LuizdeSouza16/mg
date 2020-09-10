<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index', ['posts' => Post::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("post.create", ['tags' => Tag::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $request->validate($request->rules());

        $data = $request->only('title', 'resume', 'post', 'id_tag');

        if ($request->file('post_img')->isValid() && $request->hasFile('post_img') ) {
            $imagePath = $request->post_img->store('posts');

            $data['post_img'] = $imagePath;
        }

        Post::create($data);

        return redirect()->route('post.index')->with('sucess', 'Postagem adicionada com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::all();
        return view('post.edit', ['post' => $post, 'tags' => $tags]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        if (!$post) {
            return redirect()->back();
        }

        $request->validate($request->rules());

        $data = $request->all();

        if ($request->post_img->isValid() && $request->hasFile('post_img') ) {

            if ($post->post_img && Storage::exists($post->post_img)) {
                Storage::delete($post->post_img);
            }

            $imagePath = $request->post_img->store('posts');

            $data['post_img'] = $imagePath;
        }

        $post->update($data);

        return redirect()->route('post.index')->with('sucess', 'Postagem atualizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
        } catch (\Throwable $th) {
            echo $th;
            die;
        }

        return redirect()->route('post.index')->with('success', 'Postagem excluída com sucesso');
    }
}
