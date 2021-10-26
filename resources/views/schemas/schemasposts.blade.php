@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
 <?php foreach ($schemas as $schema) : ?>
    <article class="{{ $loop->even ? 'foobar':'' }}">
        <h1>
            <a href="/posts/{{$schema->slug}}">
            {{$schema->title}}
            </a>>
        </h1>
        <div>
            {{$schema->excerpt}}
        </div>
    </article>
<?php endforeach ;?>
</body>
</html>
@endsection
