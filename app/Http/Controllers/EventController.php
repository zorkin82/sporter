<?php

namespace App\Http\Controllers;

use App\Event;
use Auth;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::published()->orderBy('date')->get();

        return view('events.index', ['events' => $events]);
    }

    public function show($id) {
        $event = Event::published()->withCount('participants')->findOrFail($id);
        $can_register = true;
        if ($event->registration_type == "Organisation" & Auth::check() && Auth::user()->permission != "Organisation") {
            $can_register = false;
        }
        return view('events.show', compact('event', 'can_register'));
    }
}
