@extends('layouts.main')

@section('title', 'Liste des localités')
@section('content')
<h1>Liste des {{$resource}}</h1>
    @foreach ($localities as $locality)
        <p>{{$locality->postal_code}} {{$locality->locality}}</p>
    @endforeach
@endsection