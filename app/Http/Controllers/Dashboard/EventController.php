<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::all();

        return view('dashboard.events.index', compact('events'));
    }

    public function create()
    {
        return view('dashboard.events.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'date' => 'required',
        ]);

        $user = auth()->user();
        $data = $request->all();
        $data['slug'] = Str::slug($request->name, '-');
        $event = $user->events()->create($data);

        // Add images
        foreach ($request->file as $file) {
            $event->addMedia($file)
                ->toMediaCollection('event-gallery');
        }

        return route('events.success-rdr');
    }

    public function edit(Event $event)
    {
        return view('dashboard.events.form', compact('event'));
    }

    public function update($id, Request $request)
    {
        $data = $request->all();
        $event = Event::find($id);

        $event->update($data);

        if (isset($request->file)) {
            $event->clearMediaCollection('event-gallery');

            // Add images
            foreach ($request->file as $file) {
                $event->addMedia($file)
                    ->toMediaCollection('event-gallery');
            }
        }

        return route('events.success-rdr');
    }

    public function delete($id)
    {
        $event = Event::destroy($id);

        return response()->redirectTo(route('events.index'))
            ->with('alert', [
                'type' => 'success',
                'message' => 'El artículo se ha eliminado correctamente'
            ]);;
    }

    public function redirectWithSuccessMsg() {
        return response()->redirectTo(route('events.index'))
            ->with('alert', [
                'type' => 'success',
                'message' => 'El artículo se ha publicado correctamente'
            ]);
    }
}
