<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Event - Public Space Cleaning Scheduler</title>
    <link rel="stylesheet" type="text/css"  href="{{ asset('css/dashboard.css') }}">

</head>

<body>
    @include('partials.admin_header')
    <div class="create-event-page-container">
        <section class="create-event-form">
            <h2>Create a New Event</h2>
            <form enctype="multipart/form-data" method="post" action="{{ route('store.event') }}">
                @csrf

                <div>
                    <label for="event-name">Event Name:</label>
                    <input type="text" id="event-name" name="event-name" placeholder="Enter event name" value="{{ old('event-name') }}" />
                    @error('event-name')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="event-date">Event Date Range:</label>
                    <div class="DateRange">
                        <label for="fromperiod">From:</label>
                        <input type="date" id="fromperiod" name="fromperiod" value="{{ old('fromperiod') }}" />
                        <label for="toperiod">To:</label>
                        <input type="date" id="toperiod" name="toperiod"  value="{{ old('toperiod') }}" />
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
                    <input type="text" id="event-location" name="event-location" placeholder="Enter event location" value="{{ old('event-location') }}" />
                    @error('event-location')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="event-description">Event Description:</label>
                    <textarea id="event-description" name="event-description" rows="4" cols="50" placeholder="Enter event description">{{ old('event-description') }}</textarea>
                    @error('event-description')
                        <p class="error">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label for="event-tasks">Event Tasks:</label>
                    <textarea id="event-tasks" name="event-tasks" rows="4" cols="50" placeholder="Enter event tasks">{{ old('event-tasks') }}</textarea>
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
                    <button type="submit">Create Event</button>
                </div>
            </form>
        </section>
    </div>


</body>
</html>
