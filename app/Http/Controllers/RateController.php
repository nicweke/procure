<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use willvincent\Rateable\Rating;

class RateController extends Controller
{
    public function posts()
    {
        $posts = Post::all();
        return view('posts', compact('posts'));
    }

    public function show($id)
    {
        $productDetails = Post::find($id);
        return view('product.detail', compact('productDetails'));
    }

    public function postPost(Request $request)
    {
        request()->validate(['rate' => 'required']);
        $post = Post::find($request->id);
        $rating = new \willvincent\Rateable\Rating;
        $rating->rating = $request->rate;
        $rating->user_id = auth()->user()->id;
        $post->ratings()->save($rating);
        return redirect()->route("posts");
    }

}
