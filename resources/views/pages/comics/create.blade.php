
{{-- Questo if con un ciclo mostra gli errori all'utente e si scrive prima del form --}}
{{-- @if ( $errors->any() )

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif



<form action="{{ route('comics.store')}}" method="POST">

    @csrf

</form> --}}
