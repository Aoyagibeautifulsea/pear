<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post)
{
    return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
}
public function show(Post $post)
{
    dd($post);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
}
}
?>