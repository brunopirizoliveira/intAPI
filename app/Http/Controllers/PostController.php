<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        $post = Post::all();
        return response()->json($post);
    }

    public function store(Request $request) {
        $Post = new Post;
        return response()
            ->json(
                $Post::create($request->all()),
                201
            );
    }

    //
}
