@extends('layouts.app')

@section('title', 'Trains')

@section('content')

    <main>
        <h1>Trains</h1>
        <ul>
            @foreach ($trains as $train)
                <li><span>{{ $train->factory }} </span>
                    <span>stazione di partenza: {{ $train->departure_station }}</span>
                    <span>stazione di arrivo: {{ $train->arrived_station }}</span>
                    <span>orario di partenza{{ $train->departure_time }}</span>
                    <span>orario di arrivo: {{ $train->arrived_time }}</span>
                    <span>codice identificativo treno: {{ $train->train_code }}</span>
                    <span>numero carrozze: {{ $train->carriages }}</span>
                    @if ($train->in_time == 0 && $train->cancelled == 0)
                        <span>Il treno è in orario</span>
                    @elseif ($train->in_time == 1 && $train->cancelled == 0)
                        <span>il treno è in ritardo</span>
                    @elseif ($train->cancelled == 1)
                        <span>il treno è cancellato</span>
                    @endif
                </li>
            @endforeach
        </ul>
    </main>
@endsection
