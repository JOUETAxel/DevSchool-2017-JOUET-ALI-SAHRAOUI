<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $posts = Post::orderBy('id', 'desc')->paginate(5);
        $events = Event::orderBy('id', 'desc')->paginate(5);

        return view('home', compact('posts', 'events'));

    }

}
