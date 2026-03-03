<div class="contact-container">
    <h2>Aanvraag #{{$reservation_request->id}}</h2>
    <p>
        Aantal mensen: {{ $reservation_request->people_count }}
    </p>
    <p>
        {{$reservation_request->message}}
    </p>
    <div class="status">
        <h2>Status:</h2>
        <!--suppress CssUnresolvedCustomProperty -->
        <div style="background: var(--{{$reservation_request->processed ? 'primary-light' : 'secondary-light'}})">{{$reservation_request->processed ? 'Toegestaan' : 'Niet toegestaan'}}</div>
    </div>
</div>
