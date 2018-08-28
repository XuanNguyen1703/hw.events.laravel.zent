<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventController extends Controller
{
    public function index() {
    	$events = Event::getAll();
    	return view("events.index",['events'=> $events]);
    }
    public function show($id){
    	$event = Event::find($id);
    	return view('events.show',['event'=>$event]);
    }
    public function create(){
    	return view('events.create');
    }
    public function store(Request $request){
    	Event::create($request->all());
    	// dd($request);
    	return redirect('events');
    }
     public function edit($id)
    {
        $event=Event::find($id);
        return view('events.edit',compact('event','id'));
    }
    public function update(Request $request,$id)
    {
        Event::find($id)->update($request->all());
        return redirect('events');
    }
    public function destroy($id){
    	$event = Event::find($id)->delete();
    	return redirect('events');
    }
}
