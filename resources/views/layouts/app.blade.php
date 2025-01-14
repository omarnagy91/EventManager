<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Event Manager</title>
<!-- Include Bootstrap CSS from CDN for styling -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- Optional: Include your custom CSS here -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
<a class="navbar-brand" href="{{ url('/') }}">Event Manager</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="{{ route('events.index') }}">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('events.create') }}">Create Event</a>
</li>
</ul>
</div>
</div>
</nav>
<main class="py-4">
<div class="container">
@yield('content')
</div>
</main>
<!-- Include Bootstrap JS and its dependencies below, if you're going to use Bootstrap's JS components -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
