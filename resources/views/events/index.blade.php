@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <h1 class="text-center mb-4">Weekly Event Calendar</h1>
    <div class="row">
        <!-- Create a column for each day of the week -->
        @php
$daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        @endphp

        @foreach ($daysOfWeek as $day)
            <div class="col">
                <h3>{{ $day }}</h3>
                <!-- Display events for this day -->
                @foreach ($events->filter(fn($e) => $e->start_time->format('l') === $day) as $event)
                    <div class="card mb-2">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->name }}</h5>
                            <p class="card-text">{{ $event->description }}</p>
                            <p class="card-text">Start: {{ $event->start_time->format('g:i A') }}</p>
                            <p class="card-text">End: {{ $event->end_time->format('g:i A') }}</p>
                            <form action="{{ route('events.destroy', $event) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
@endsection