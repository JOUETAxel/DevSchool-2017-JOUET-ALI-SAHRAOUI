<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        // Liste des articles

        $posts = Post::orderBy('id', 'desc')->paginate(5);

        return view('admin.index', compact('posts'));

    }


}
