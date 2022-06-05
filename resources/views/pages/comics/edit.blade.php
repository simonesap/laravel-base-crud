
@extends('layouts.layout')


@section('create')

    <h1 class="text-center m-5 text-primary">Add new comic</h1>

    {{-- Questo if con un ciclo mostra gli errori all'utente e si scrive prima del form --}}
    @if ( $errors->any() )

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

    @endif

    <form action="{{ route('comics.update', $comic->id)}}" class="form-group row row-cols" method="POST" novalidate>
        @method('PUT')
        @csrf

        <div class="col-6">
            <label for="title" class="needs-validation">Title: </label><br>
            <input type="text" id="title" name="title" value="{{$comic->title}}" class="mb-4 form-control" required>
            <label for="Description">Description: </label><br>
            <input type="text" id="Description" name="description" value="{{$comic->description}}" class="mb-4 form-control" required>
            <label for="thumb">Thumb: </label><br>
            <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}" class="mb-4 form-control" required>
            <label for="price">Price: </label><br>
            <input type="text" id="price" name="price" value="{{$comic->price}}" class="mb-4 form-control" required>
        </div>

        <div class="col-6">
            <label for="series">Series: </label><br>
            <input type="text" id="series" name="series" value="{{$comic->series}}" class="mb-4 form-control" required>
            <label for="sale_date">Sale date: </label><br>
            <input type="text" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" class="mb-4 form-control" required>
            <label for="type">Type: </label><br>
            <select class="form-control form-control-sm" name="type">
                <option @if ($comic->type === 'Comic book') selected @endif </option>Comic book</option>
                <option @if ($comic->type === 'Graphic novel') selected @endif>Graphic novel</option>
            </select>
        </div>

        <div class="w-100 m-5 d-flex justify-content-center">
            <button type="submit" class="fs-5 btn btn-primary" href="{{ route('comics.update', $comic->id)}}">Submit</button>
        </div>

    </form>


@endsection
