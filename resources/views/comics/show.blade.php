@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col">
            <h1>
                {{ $comic->title }}
            </h1>

            <div class="card">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Series: {{ $comic->series }}</h5>
                    <p class="card-text">{{ $comic->description }}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
