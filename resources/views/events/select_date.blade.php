<form action="{{ route('volunteer.save', ['eventId' => $event->id]) }}" method="post">
    @csrf
    <input type="hidden" name="eventId" value="{{ $event->id }}">
    
    <label>Select Preferred Date:</label>
    @foreach($dateRange as $date)
        <div>
            <input type="radio" id="date_{{ $date }}" name="preferredDate" value="{{ $date }}" required>
            <label for="date_{{ $date }}">{{ $date }}</label>
        </div>
    @endforeach

    <button type="submit">Save Changes</button>
</form>
