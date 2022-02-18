@extends('layout.base')

@section('content')
    @foreach ($trains as $train)
    <ul>
        <li>Azienda: {{ $train->company }}</li>
        <li>Stazione di partenza: {{ $train->departure_station }}</li>
        <li>Stazione di arrivo: {{ $train->arrival_station }}</li>
        <li>Partenza: {{ $train->departure_date }} Orario: {{ $train->departure_time }}</li>
        <li>Arrivo: {{ $train->arrival_date }} Orario: {{ $train->arrival_time }}</li>
    </ul>
        
    @endforeach
@endsection