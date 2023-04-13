@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">Calendario Treni</h1>

        @foreach ($trains as $train)
            <div class="col-3">
                <ul class="card py-3" style="list-style: none;">
                    <li class="card-title">
                        <span>Azienda:
                            <strong>{{ $train->azienda }}</strong>
                        </span> 
                    </li>
                    <li>
                        <span>Stazione di Partenza:
                            <strong>{{ $train->stazione_di_partenza }}</strong>
                        </span>
                    </li>
                    <li>
                        <span>Stazione di Arrivo:
                            <strong>{{ $train->stazione_di_arrivo }}</strong>
                        </span>
                    </li>
                    <li>
                        <span>Orario di Partenza:
                            <strong>{{ $train->orario_di_partenza }}</strong>
                        </span>
                    </li>
                    <li>
                        <span>Orario di Arrivo:
                            <strong>{{ $train->orario_di_arrivo }}</strong> 
                        </span>
                    </li>
                    <li>
                        <p>Codice Treno: {{ $train->codice_treno }}</p>
                    </li>
                    <li>
                        <p>Numero Carrozze: {{ $train->numero_carrozze }}</p>
                    </li>
                    <li>
                        <p>in orario: {{ $train->in_orario }}</p>
                    </li>
                    <li>
                        <p>cancellato: {{ $train->cancellato }}</p>
                    </li>
                </ul>
            </div>
        @endforeach

    </div>

</div>
@endsection