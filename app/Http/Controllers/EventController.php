<?php

namespace App\Http\Controllers;

use App\Event;
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
        $events = Event::published()->get();

        return view('events.index', ['events' => $events]);
    }

    public function show($id) {
        $event = Event::published()->findOrFail($id);

        return view('events.show', ['event' => $event]);
    }
}
