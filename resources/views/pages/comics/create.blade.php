
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

    <form action="{{ route('comics.store')}}" class="form-group row row-cols" method="POST" novalidate>

        @csrf

        <div class="col-6">
            <label for="title" class="needs-validation">Title: </label><br>
            <input type="text" id="title" name="title" class="mb-4 form-control" required placeholder="">
            <label for="Description">Description: </label><br>
            <input type="text" id="Description" name="description" class="mb-4 form-control" required placeholder="">
            <label for="thumb">Thumb: </label><br>
            <input type="text" id="thumb" name="thumb" class="mb-4 form-control" required placeholder="">
            <label for="price">Price: </label><br>
            <input type="text" id="price" name="price" class="mb-4 form-control" required placeholder="">
        </div>

        <div class="col-6">
            <label for="series">Series: </label><br>
            <input type="text" id="series" name="series" class="mb-4 form-control" required placeholder="">
            <label for="sale_date">Sale date: </label><br>
            <input type="text" id="sale_date" name="sale_date" class="mb-4 form-control" required placeholder="">
            <label for="type">Type: </label><br>
            <select class="form-control form-control-sm" name="type">
                <option value="Comic book" selected>Comic book</option>
                <option value="Graphic novel">Graphic novel</option>
            </select>
        </div>

        <div class="w-100 m-5 d-flex justify-content-center">
            <button type="submit" class="fs-5 btn btn-primary" href="{{ route('comics.store')}}">Submit</button>
        </div>

    </form>





@endsection
