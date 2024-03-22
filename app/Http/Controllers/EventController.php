<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the events.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Calculate the start and end date of the current week
        $startOfWeek = now()->startOfWeek()->format('Y-m-d H:i');
        $endOfWeek = now()->endOfWeek()->format('Y-m-d H:i');

        // Retrieve events within the current week
        $events = Event::whereBetween('start_time', [$startOfWeek, $endOfWeek])
            ->orderBy('start_time', 'asc')
            ->get();

        return view('events.index', compact('events')); // Pass the events to the index view
    }

    /**
     * Show the form for creating a new event.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create'); // Return the view to create a new event
    }

    /**
     * Store a newly created event in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'nullable',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        Event::create($validatedData); // Create a new event with the validated data

        return redirect()->route('events.index'); // Redirect to the events index page
    }

    /**
     * Remove the specified event from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete(); // Delete the event

        return redirect()->route('events.index'); // Redirect to the events index page
    }
}