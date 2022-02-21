@extends('layout.base')

@section('documentTitle')
    Trains
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $train->company }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <div class="card mb-3">
                <div class="card-body">
                    <ul>
                        <li>{{ $train->code_train }}</li>
                        <li>Stazione di partenza: {{ $train->departure_station }}</li>
                        <li>Stazione di arrivo: {{ $train->arrival_station }}</li>
                        <li>Partenza: {{ date_format(date_create($train->departure_date), 'd M Y')}} Orario: {{ $train->departure_time }}</li>
                        <li>Arrivo: {{ date_format(date_create($train->arrival_date), 'd M Y')}} Orario: {{ $train->arrival_time }}</li>
                    </ul>
                </div>
                <a href="{{ route('home') }}" class="btn btn-primary">Torna in home</a>
            </div>
            </div>
        </div>
    </div>
@endsection