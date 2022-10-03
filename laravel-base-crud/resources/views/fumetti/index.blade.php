@extends('layout.app')

@section('title', 'Lista dei fumetti')

@section('content')

    <ul>
        @foreach ($comics as $fumetto)
        <li>{{$fumetto->title}} - {{$fumetto->price}} - {{$fumetto->series}} - {{$fumetto->sale_date}}</li>
        @endforeach
    </ul>

@endsection

