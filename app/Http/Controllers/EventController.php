<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function index(){


        $events = Event::all();
        return view('add-events', ([
            'events' => $events
        ]));

    }

    public function addEvent(Request $request){

        Event::create([
            'name' => $request->name,
            'details' => $request->details,
            'event_date' => $request->event_date,
        ]);

        return back()->with('success', 'Event has been added successfully');
    }
}
