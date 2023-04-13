@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        @foreach ($trains as $train)
            <div class="col-3">
                <h3>{{ $train->azienda }}</h3>
                <h5>{{ $train->stazione_di_partenza }}</h5>
                <h5>{{ $train->stazione_di_arrivo }}</h5>
                <span>Orario di Partenza: {{ $train->orario_di_partenza }}</span>
                <span>Orario di Arrivo: {{ $train->orario_di_arrivo }}</span>
                <p>{{ $train->codice_treno }}</p>
                <p>{{ $train->numero_carrozze }}</p>
            </div>

        @endforeach

    </div>

</div>
@endsection