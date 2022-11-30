<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{

public function show(Event $event)
    {
        $event->getMedia('event-gallery');
        return view('blogs-events.base-event', compact('event'));
    }
}
