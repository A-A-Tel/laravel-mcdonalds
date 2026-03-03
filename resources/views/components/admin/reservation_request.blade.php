<div style="cursor: pointer;" onclick="window.location.assign('{{ route('admin.reservations.show', [$reservation_request->id]) }}')" class="contact-container">
    <h2>Aanvraag #{{$reservation_request->id}} - {{$user->name}} {{$user->email}}</h2>
    <p>
        Aantal mensen : {{$reservation_request->people_count}}
    </p>
    <p>
        {{$reservation_request->message}}
    </p>
    <div class="status">
        <h2>Status:</h2>
        <!--suppress CssUnresolvedCustomProperty -->
        <div style="background: var(--{{$reservation_request->allowed ? 'primary-light' : 'secondary-light'}})">{{$reservation_request->allowed ? 'Toegestaan' : 'Niet toegestaan'}}</div>
    </div>
</div>
