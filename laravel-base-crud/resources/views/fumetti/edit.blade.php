@extends('layout.app')

@section('title', 'Modifica info fumetto')

@section('content')

    <form action="{{route('fumetti.update', ['fumetti' => $singoloFumetto->id])}}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" value="{{$singoloFumetto->title}}">
        </div>

        <div>
            <label for="description">Descrizione</label>
            <input type="text" id="description" name="description" value="{{$singoloFumetto->description}}">
        </div>

        <div>
            <label for="thumb">URL immagine</label>
            <input type="text" id="thumb" name="thumb" value="{{$singoloFumetto->thumb}}">
        </div>

        <div>
            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price" value="{{$singoloFumetto->price}}">
        </div>

        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" value="{{$singoloFumetto->series}}">
        </div>

        <div>
            <label for="sale_date">Data di uscita</label>
            <input type="date" id="sale_date" name="sale_date" value="{{$singoloFumetto->sale_date}}">
        </div>

        <div>
            <label for="type">Tipo</label>
            <input type="text" id="type" name="type" value="{{$singoloFumetto->type}}">
        </div>

        <button type="submit">Salva Modifiche</button>



    </form>

@endsection