@extends('layouts.app')

@section('content')
    <article>
        <h1>{{ $schema->title }}</h1>

        <div>
            {!! $post->body !!}
        </div>
    </article>

    <a href="/schemas">Go Back</a>

@endsection
