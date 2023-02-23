<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class api extends Controller
{
    public function index()
    {
        $posts = post::all();

        if ($posts->count() > 0) {
            return response()->json([
                'data' => $posts,
                'message' => 'Succeed',
            ], 200);
        } else {
            return response()->json([
                'data' => [],
                'message' => 'No posts found',
            ], 404);
        }
    }

    public function show($id)
    {
        try {
            $post = post::findOrFail($id);

            return response()->json([
                'data' => $post,
                'message' => 'Succeed',
            ], 200); 
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'data' => [],
                'message' => 'Post not found',
            ], 404);
        }
    }
}
