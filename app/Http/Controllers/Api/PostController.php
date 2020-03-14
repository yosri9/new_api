<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CommentsResource;
use App\Http\Resources\PostResource;
use App\Http\Resources\PostsResource;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::paginate(env('POST_PER_PAGE'));
        return new PostsResource($posts);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * @param $id
     * @return PostResource
     */
    public function show($id)
    {
        $post = Post::find($id);
        return new  PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param $id
     * @return CommentsResource
     */
    public function comments($id)
    {
        $post = post::find($id);
        $comments = $post->comments()->paginate(env('COMMENTS_PER_PAGE'));
        return new CommentsResource($comments);
    }
}
