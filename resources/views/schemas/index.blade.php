@extends('layouts.app')

@section('content')
    <h1> schemas</h1>

    @foreach($exercises as $exercise)
        <tr>
            <td> {{$exercise['id']}}</td>
            <td> {{$exercise['id']}}</td>
            <td> <img src="{{ asset("storage/images/".$exercise['image']) }}"  height="200px" width="200px"> </td>
            <td> category</td>
        </tr>
    @endforeach

@endsection
