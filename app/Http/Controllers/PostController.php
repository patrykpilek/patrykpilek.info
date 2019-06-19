<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Events\PostCreated;

class PostController extends Controller
{

    /**
     * @param Request $request
     * @param Post $post
     * @return JsonResponse
     */
    public function index(Request $request, Post $post) {
//        $allPosts = $post->whereIn('user_id', $request->user()->following()->pluck('users.id')->push($request->user()->id))->with('user');
//        $posts = $allPosts->orderBy('created_at', 'desc')->limit(10)->offset($request->offset)->get();
//
//        return response()->json([
//            'posts' => $posts,
//        ]);

        $allPosts = $post->whereIn('user_id', $request->user()->following()->pluck('users.id')->push($request->user()->id))->with('user');
        $posts = $allPosts->orderBy('created_at', 'desc')->limit(10)->offset($request->offset)->get();

        return response()->json($posts);
    }

    /**
     * @param Request $request
     * @param Post $post
     * @return JsonResponse
     */
    public function create(Request $request, Post $post) {
//        // create post
//        $createdPost = $request->user()->posts()->create([
//            'body' => $request->body,
//        ]);
//        // broadcast
//        broadcast(new PostCreated($createdPost, $request->user()))->toOthers();
//        // return the response
//        return response()->json($post->with('user')->find($createdPost->id));

        // create post
        $createdPost = $request->user()->posts()->create([
            'body' => $request->body,
        ]);
        // broadcast
        broadcast(new PostCreated($createdPost, $request->user()))->toOthers();
        // return the response
        return response()->json($post->with('user')->find($createdPost->id));
    }
}
