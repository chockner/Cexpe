@extends('layout')

@section('title', 'Talleres')


@section('content')
<h1>Talleres</h1>
<ul>
    @foreach ($talleres as $item)
        <li>{{$item['titulo']}}</li>
    @endforeach
</ul>
@endsection