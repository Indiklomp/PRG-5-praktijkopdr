@extends('layouts.app')

@section('content')
    <article>
        <h1>{{ $schema['id'] }}</h1>

        <div>
            <img src="{{ asset("storage/images/".$schema['image']) }}"  height="300px" width="300px">
</div>
</article>

<a href="/schemas">Go Back</a>


@endsection
