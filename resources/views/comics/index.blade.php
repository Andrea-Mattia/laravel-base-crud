@extends('layouts.main')

@section('content')
    <section class="container">
        <h1 class="mb-5">Our Comics</h1>

        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Series</td>
                    <td colspan="3">Actions</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->id }}</td>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}" 
                                class="btn btn-primary"
                                >
                                SHOW
                            </a>
                        </td>
                        <td>EDIT</td>
                        <td>DELETE</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection