<div style="cursor: pointer;" onclick="window.location.assign('{{ route('admin.contacts.show', [$contact_request->id]) }}')" class="contact-container">
    <h2>Aanvraag #{{$contact_request->id}} - {{$user->name}} {{$user->email}}</h2>
    <p>
        {{$contact_request->message}}
    </p>
    <div class="status">
        <h2>Status:</h2>
        <!--suppress CssUnresolvedCustomProperty -->
        <div style="background: var(--{{$contact_request->processed ? 'primary-light' : 'secondary-light'}})">{{$contact_request->processed ? 'Behandeld' : 'Niet Behandeld'}}</div>
    </div>
</div>
