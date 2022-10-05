@extends('layout.app')

@section('title', 'Modifica fumetto')

@section('content')

    <form action="{{route(fumetti.store)}}" method="POST">

        @csrf

        <div>
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title" value="{{old('title')}}">
            @error('title')
                <div>
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <label for="description">Descrizione</label>
            <input type="text" id="description" name="description" value="{{old('description')}}">
            @error('description')
            <div>
                {{$message}}
            </div>
        @enderror
        </div>

        <div>
            <label for="thumb">URL immagine</label>
            <input type="text" id="thumb" name="thumb" value="{{old('thumb')}}">
            @error('thumb')
            <div>
                {{$message}}
            </div>
        @enderror
        </div>

        <div>
            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price" value="{{old('price')}}">
            @error('price')
            <div>
                {{$message}}
            </div>
        @enderror
        </div>

        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" value="{{old('series')}}">
            @error('series')
            <div>
                {{$message}}
            </div>
        @enderror
        </div>

        <div>
            <label for="sale_date">Data di uscita</label>
            <input type="date" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
            @error('sale_date')
            <div>
                {{$message}}
            </div>
        @enderror
        </div>

        <div>
            <label for="type">Tipo</label>
            <input type="text" id="type" name="type" value="{{old('type')}}">
            @error('type')
            <div>
                {{$message}}
            </div>
        @enderror
        </div>

        <button type="submit">Salva Fumetto</button>



    </form>

@endsection
