<x-layout>

<h2>Speisen</h2>

Speisen


Wert: {{ $wert }}<hr>
Users: {{ $users }}<hr>


@foreach ($users as $user)

    <div>
        {{ $user->id }},
        {{ $user->name }},
        {{ $user->email }},
        {{ $user->IP }},
        <b>                {{ $user->updated_at }}</b>
    </div>
@endforeach




</x-layout>
