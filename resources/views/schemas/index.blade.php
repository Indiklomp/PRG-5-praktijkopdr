@extends('layouts.app')

@section('content')
    <h1> schemas</h1>

    <table>
    @foreach($schemas as $schema)
        <tr>
            <td> {{$schema['id']}}</td>
            <td> {{$schema['id']}}</td>
            <td> <img src="{{ asset("storage/images/".$schema['image']) }}"  height="200px" width="200px"> </td>
            <td> category</td>
        </tr>
    @endforeach
    </table>
@endsection
