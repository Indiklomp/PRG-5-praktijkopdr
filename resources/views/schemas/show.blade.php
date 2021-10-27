@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Schema</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('schemas.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{ $schema->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <img src="{{ asset("storage/images/".$schema['image']) }}"  height="800px" width="800px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{ $schema->excerpt }}
            </div>
        </div>
    </div>






{{--    <article>--}}
{{--        <h1>{{ $schema['id'] }}</h1>--}}

{{--        <div>--}}
{{--            <img src="{{ asset("storage/images/".$schema['image']) }}"  height="300px" width="300px">--}}
{{--</div>--}}
{{--</article>--}}

{{--<a href="/schemas">Go Back</a>--}}


@endsection
