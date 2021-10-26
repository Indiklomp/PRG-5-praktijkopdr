@extends('layouts.app')

@section('content')
    <h1> {{$title}}</h1>


    <table>
    @foreach($schemas as $schema)
        <tr>
            <td> {{$schema['id']}}</td>
            <td><a href="/schemas/{{$schema->id}}"> {{$schema['title']}} </a></td>
            <td> <img src="{{ asset("storage/images/".$schema['image']) }}"  height="300px" width="300px"> </td>
            <td> {{$schema ['excerpt']}}</td>
        </tr>
    @endforeach
    </table>
@endsection
