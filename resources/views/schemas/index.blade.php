@extends('layouts.app')

@section('content')
    <h1> {{$title}}</h1>

    <a class="btn btn-success" href="{{ route('schemas.create') }}"> Create New Schema</a>
    <table class="p-3 mb-2 bg-secondary text-light">
    @foreach($schemas as $schema)
        <tr>
            <td> {{$schema['id']}}</td>
            <td> {{$schema['title']}} </td>
            <td> <img src="{{ asset("storage/images/".$schema['image']) }}"  height="100px" width="100px"> </td>
            <td> {{$schema ['excerpt']}}</td>
            <td>
                <form action="{{ route('schemas.destroy',$schema) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('schemas.show',$schema) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('schemas.edit',$schema) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">DESTROY</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection
