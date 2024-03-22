@extends('layouts.app')

@section('content')
<div class="container mt-3">
    <h1 class="text-center mb-4">Add New Event</h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('events.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="eventName" class="form-label">Event Name</label>
                    <input type="text" class="form-control" id="eventName" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="eventDescription" class="form-label">Event Description</label>
                    <textarea class="form-control" id="eventDescription" name="description" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="startTime" class="form-label">Start Time</label>
                    <input type="datetime-local" class="form-control" id="startTime" name="start_time" required>
                </div>
                <div class="mb-3">
                    <label for="endTime" class="form-label">End Time</label>
                    <input type="datetime-local" class="form-control" id="endTime" name="end_time" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection