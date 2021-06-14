@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="mb-5">
            <span class="badge bg-success">{{ $comic->type }}</span>
            Data di rilascio: {{ $comic->sale_date }}
        </div>

        <div class="row mb-5">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="col-md-6">
                {!! $comic->description !!}
                <div class="mt-3">
                    <strong>Series: </strong>
                    {{ $comic->series }}
                </div><div class="mt-3">
                    <strong>PRICE: </strong>
                    {{ $comic->price }}
                </div>
            </div>
        </div>

        <a href="{{ route('comics.index') }}">Back to archive</a>
    </div>
@endsection