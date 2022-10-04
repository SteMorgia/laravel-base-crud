@extends('layout.app')

@section('title', 'Crea nuovo fumetto')

@section('content')

    <form action="{{route('fumetti.store')}}" method="POST">

        @csrf

        <div>
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <label for="description">Descrizione</label>
            <input type="text" id="description" name="description">
        </div>

        <div>
            <label for="thumb">URL immagine</label>
            <input type="text" id="thumb" name="thumb">
        </div>

        <div>
            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price">
        </div>

        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series">
        </div>

        <div>
            <label for="sale_date">Data di uscita</label>
            <input type="date" id="sale_date" name="sale_date">
        </div>

        <div>
            <label for="type">Tipo</label>
            <input type="text" id="type" name="type">
        </div>

        <button type="submit">Salva Fumetto</button>



    </form>

@endsection
