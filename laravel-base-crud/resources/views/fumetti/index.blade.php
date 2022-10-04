@extends('layout.app')

@section('title', 'Lista dei fumetti')

@section('content')

    <ul>
        @foreach ($comics as $fumetto)
        <li>{{$fumetto->title}} - {{$fumetto->price}} - {{$fumetto->series}} - {{$fumetto->sale_date}}</li>
        <a href="{{route('fumetti.show', ['fumetti' => $fumetto])}}">Vedi</a>
        <a href="{{route('fumetti.edit', ['fumetti' => $fumetto])}}">Modifica</a>
        <form action="{{route('fumetti.destroy', ['fumetti' => $fumetto])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Elimina</button>
        </form>
        @endforeach
    </ul>

    

@endsection

