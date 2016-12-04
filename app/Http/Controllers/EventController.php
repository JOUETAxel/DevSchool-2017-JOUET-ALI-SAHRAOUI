<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('id', 'desc')->paginate(10);

        return view('events.index', compact('events'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:6',
            'content' => 'required|min:10'
        ], [
            'title.required' => 'titre requis',
            'title.min' => 'le titre de doit faire au moins 6 char',
            'content.required' => 'contenu requis',
            'content.min' => 'le contenu doit faire au moins 6 char'
        ]);

        //enregistrer le formulaire de creation
        $event = new event;
        $input = $request->input();
        $input['user_id'] = Auth::user()->id;

        $event->fill($input)->save();
        return redirect()
            ->route('event.index')
            ->with('success', 'event publié');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::findOrFail($id);

        //afficher un article
        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:6',
            'content' => 'required|min:20'
        ], [
            'title.required' => 'titre requis',
            'title.min' => 'le titre de doit faire au moins 30 char',
            'content.required' => 'contenu requis',
            'content.min' => 'le contenu doit faire au moins 100 char'
        ]);

        //enregistre le formulaire d'edition

        $event = Event::findOrFail($id);
        $input = $request->input();

        $event->fill($input)->save();


        return redirect()
            ->route('event.index')
            ->with('success', 'event mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()
            ->route('event.index')
            ->with('success', 'event mis à jour');
    }
}
