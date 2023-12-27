<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event - Public Space Cleaning Scheduler</title>
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/dashboard.css') }}">
</head>

<body>


    <header>
    <div class="logo">
        <img src="{{ asset('/images/Clean ville.png') }}" alt="Cleaning Scheduler Logo">
    </div>
    
</header>

    <div class="create-event-page-container">
        <section class="create-event-form">
            <h2>Edit Event</h2>
            <form enctype="multipart/form-data"  action="{{ route('events.update', ['eventId' => $event->id]) }}" method="POST">
                @csrf
                @method('PUT')

            <div>
                    <label for="event-name">Event Name:</label>
                    <input type="text" id="event-name" name="event-name" placeholder="Enter event name" value="{{ $event->title }}" />
                    @error('event-name')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="event-date">Event Date Range:</label>
                    <div class="DateRange">
                        <label for="fromperiod">From:</label>
                        <input type="date" id="fromperiod" name="fromperiod" value="{{  $event->start_date }}" />
                        <label for="toperiod">To:</label>
                        <input type="date" id="toperiod" name="toperiod"  value="{{  $event->end_date }}" />
                    </div>
                    @error('fromperiod')
                        <p class="error">{{ $message }}</p>
                    @enderror
                    @error('toperiod')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>


                <div>
                    <label for="event-location">Location:</label>
                    <input type="text" id="event-location" name="event-location" placeholder="Enter event location" value="{{ $event->location }}" />
                    @error('event-location')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="event-description">Event Description:</label>
                    <textarea id="event-description" name="event-description" rows="4" cols="50" placeholder="Enter event description">{{ $event->description }}</textarea>
                    @error('event-description')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="event-tasks">Event Tasks:</label>
                    <textarea id="event-tasks" name="event-tasks" rows="4" cols="50" placeholder="Enter event tasks">{{ implode(',', $event->tasks->pluck('description')->toArray()) }}</textarea>
                    @error('event-tasks')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="event-image">Event Image:</label>
                    <input type="file" id="event-image" name="event-image" />
                    @error('event-image')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit">Update Event</button>
                </div>
            </form>
        </section>
    </div>
</body>
</html>
