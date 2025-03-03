<h2>
    {{ $event->name }}
</h2>

<p>
    Congrats! Your event is now live on our website.
</p>

<p>
    <a href="{{ url('/events/' . $event->id) }}">View Your Event Listing</a>
</p>