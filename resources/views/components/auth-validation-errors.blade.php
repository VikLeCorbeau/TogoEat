@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div>
            Une erreur est survenue
        </div>

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
