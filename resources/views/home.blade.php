@extends('layout.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Trains</h1>
        </div>
        <div class="row">
            <div class="col-4">
                @foreach ($trains as $train)
                <div class="card mb-3">
                    <h2 class="card-title">{{ $train->company }}</h2>
                    <ul class="card-body list-unstyled">
                        <li>{{ $train->code_train }}</li>
                        <li>Stazione di partenza: {{ $train->departure_station }}</li>
                        <li>Stazione di arrivo: {{ $train->arrival_station }}</li>
                        <li>Partenza: {{ date_format(date_create($train->departure_date), 'd M Y')}} Orario: {{ $train->departure_time }}</li>
                        <li>Arrivo: {{ date_format(date_create($train->arrival_date), 'd M Y')}} Orario: {{ $train->arrival_time }}</li>
                        <li><a href="{{ route('show', $train) }}" class="btn btn-primary">Vedi treno</a></li>
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection