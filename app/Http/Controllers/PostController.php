<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;

class PostController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('posts.index', [
            'posts' => Post::with('createdBy')->paginate(10),
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('posts.create', [
            'post' => new Post()
        ]);
    }

    /**
     * @param PostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $request)
    {
        Post::create($request->all());

        return redirect()->route('posts.index');
    }

    /**
     * @param Post $post
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Post $post)
    {
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    /**
     * @param Post $post
     * @param PostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Post $post, PostRequest $request)
    {
        $post->update($request->all());

        return redirect()->route('posts.index');
    }
}
