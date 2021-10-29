@extends('layouts.app')

@section('content')
    <h1> {{$title}}</h1>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                @can('schema-create')
                    <a class="btn btn-success" href="{{ route('schemas.create') }}"> Create New Schema</a>
                @endcan
            </div>
        </div>
    </div>
    <table class="p-3 mb-2 bg-secondary text-light" class="table table-bordered">

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <tr>
            <th>Number</th>
            <th>Title</th>
            <th>Image</th>
            <th>Details</th>
            <th>Action</th>
        </tr>
    @foreach($schemas as $schema)
        <tr>
            <td> {{$schema['id']}}</td>
            <td> {{$schema['title']}} </td>
            <td> <img src="{{ asset("storage/images/".$schema['image']) }}"  height="100px" width="100px"> </td>
            <td> {{$schema ['excerpt']}}</td>
            <td>
                <form action="{{ route('schemas.destroy',$schema) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('schemas.show',$schema) }}">Show</a>
                    @can('schema-edit')
                    <a class="btn btn-primary" href="{{ route('schemas.edit',$schema) }}">Edit</a>
                    @endcan
                    @csrf
                    @method('DELETE')
                    @can('schema-delete')
                    <button type="submit" class="btn btn-danger">DESTROY</button>
                        @endcan
                </form>
            </td>
        </tr>
    @endforeach
    </table>
@endsection
