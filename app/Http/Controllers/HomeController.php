<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        // Liste des articles

        $posts = Post::orderBy('id', 'desc')->paginate(5);
        $events = Event::orderBy('id', 'desc')->paginate(5);

        return view('home', compact('posts', 'events'));




    }


}

