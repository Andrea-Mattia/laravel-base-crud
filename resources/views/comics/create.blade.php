@extends('layouts.main')

@section('content')
    <div class="container">
        <h1 class="mb-5">Create New Comic</h1>

        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="control-label">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="6"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="control-label">Type</label>
                        <select class="form-control" name="type" id="type">
                            <option value="comic book">Comic Book</option>
                            <option value="graphic novel">Graphic Novel</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="control-label">Thumb</label>
                        <input type="text" class="form-control" name="thumb" id="thumb">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="control-label">Series</label>
                        <input type="text" class="form-control" name="series" id="series">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="control-label">Sale Date</label>
                        <input type="text" class="form-control" name="sale_date" id="sale_date">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="control-label">Price</label>
                        <input type="text" class="form-control" name="price" id="price">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection