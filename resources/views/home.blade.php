@extends('layout.base')

@section('content')
    @foreach ($trains as $train)
    <ul>
        <li>Azienda: {{ $train->company }}</li>
        <li>Stazione di partenza: {{ $train->departure_station }}</li>
        <li>Stazione di arrivo: {{ $train->arrival_station }}</li>
        <li>Partenza: {{ date_format(date_create($train->departure_date), 'd M Y')}} Orario: {{ $train->departure_time }}</li>
        <li>Arrivo: {{ date_format(date_create($train->arrival_date), 'd M Y')}} Orario: {{ $train->arrival_time }}</li>
    </ul>
        
    @endforeach
@endsection