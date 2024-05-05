<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){
        $all_events = Event::all();

        $events = [];

        foreach ($all_events as $event){
            $events[] = [
                'title' => $event->event,
                'start' => $event->start_date,
                'end' => $event->end_date
            ];
        }

        return view('events', compact('events'));
    }

}
