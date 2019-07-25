<?php

namespace App\Http\Controllers;


use App\Http\Requests\EventFormRequest;
use App\Models\Event;
use MercurySeries\Flashy\Flashy;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $events=Event::paginate(10);
       return view('events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event= new Event;
        return view('events.create',compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventFormRequest $request)
    {

        Event::create(['title'=>$request->title, 'description'=>$request->description]);
        //flash('Evenement creer avec succes !');
        Flashy::success('Evenement creer avec succes !');

        return redirect()->route('home');
        //return redirect()->back();
        //return back();
        //return redirect()->home();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //$events=Event::findOrFail($id);

        return view('events.show',compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //$event= Event::findOrFail($id);

        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventFormRequest $request, Event $event)
    {

        //$event= Event::findOrFail($id);
        $event->update(['title'=>$request->title, 'description'=>$request->description]);
        //flash('Evenement '.$event->id.' modifier avec succes !');
        flashy('Evenement '.$event->id.' modifier avec succes !');

        return redirect()->route('events.show',$event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //Event::destroy($id);
        $event->delete();
        flashy('Evenement '.$event->id.' supprimer avec succes !');

        return redirect()->route('home');
    }
}
