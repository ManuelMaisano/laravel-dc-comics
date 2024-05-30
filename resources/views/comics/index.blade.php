@extends('layouts.app')


@section('content')
<section class="container d-flex flex-wrap">
    @foreach ( $comics as $comic )
    <div class="row">
        <div class="col d-flex align-items-stretch p-2 m-2">
            <div class="card">
            <img src="{{ $comic->thumb }}" class="card-img-top img-fluid " alt="{{ $comic->title }}">
                <div class="card-body">
                <h5 class="card-title text-truncate text-uppercase text-left "><a class="text-decoration-none text-white" href="{{route('comics.show', $comic['id'])}}">{{ $comic->title }}</a></h5>
                </div>
            </div>
        </div>

    </div>

    @endforeach
</section>
@endsection