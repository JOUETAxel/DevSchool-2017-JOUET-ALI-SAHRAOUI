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

    public function __construct()
    {
        $this->middleware('isadmin');
    }
    public function index()
    {

        $posts = Post::orderBy('id', 'desc')->paginate(5);
        $events = Event::orderBy('id', 'desc')->paginate(5);

        return view('admin.index', compact('posts', 'events'));

    }

}
