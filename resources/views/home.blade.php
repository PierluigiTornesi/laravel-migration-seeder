@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ecco tutti i treni di oggi</h1>
        <div class="row">
            @foreach ($trains as $train)
            <div class="col g-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="fw-bold">Azienda : </span> {{ $train->azienda}}
                        </h5>
                        <hr>
                        <p class="card-text">
                            <span class="fw-bold">Codice treno : </span> {{ $train->codice_treno}}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold">Stazione di partenza : </span> {{ $train->stazione_di_partenza}}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold">Stazione di arrivo : </span> {{ $train->stazione_di_arrivo}}
                        </p>
                        <hr>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span class="fw-bold">Giorno di partenza : </span> {{ $train->giorno_partenza}}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span class="fw-bold">Orario di partenza : </span> {{ $train->orario_di_partenza}}
                        </h6>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span class="fw-bold">Orario di arrivo : </span> {{ $train->orario_di_arrivo}}
                        </h6>

                        {{-- <p class="{{$train->in_orario ? 'green' : 'red' }}">In orario</p> --}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
@endsection