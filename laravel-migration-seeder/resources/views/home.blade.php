@extends('layouts.app')
@section('main_content')
    <h1>
        I nostri pacchetti vacanze
    </h1>
    @foreach ($travels as $travel)
        <div>Numero da contattare per info:{{$travel->reference}}</div>
        <div>Città:{{$travel->city}}</div>
        <div>Nazione:{{$travel->state}}</div>
        <div>Tipo di abitazione:{{$travel->type}}</div>
        <div>Descrizione della location:{{$travel->description}}</div>
        <div>Prezzo:{{$travel->price}}</div>
    @endforeach
@endsection