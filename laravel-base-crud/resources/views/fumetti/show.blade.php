@extends('layout.app')

@section('title', 'Singolo Fumetto')

@section('content')

<h1>Dettagli per il Fumetto: {{$singoloFumetto->title}}</h1>
<img src="{{$singoloFumetto->thumb}}" alt="">

<div><strong>Serie:</strong> {{$singoloFumetto->series}}</div>
<div><strong>Prezzo:</strong> {{$singoloFumetto->price}}</div>
<div><strong>Data di Uscita:</strong> {{$singoloFumetto->sale_date}}</div>
<div><strong>Descrizione:</strong> {{$singoloFumetto->description}}</div>

<a href="{{route('fumetti.index')}}">Torna alla lista</a>

@endsection