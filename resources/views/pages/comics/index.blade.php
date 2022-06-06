@extends('layouts.layout')

@section('title', 'Home')

@section('content')

    @if (session('message'))
        <div>{{session('message')}}</div>
    @endif

    <div class="w-100 d-flex justify-content-center m-5">
        <a href="{{ route('comics.create')}}" class="btn btn-success fs-5">Add new comic</a>
    </div>


    <div class="d-flex flex-row flex-wrap justify-content-center m-5">

        @foreach ($comic as $com )

            <div class="row row-cols m-3">
                <div class="col card" style="width: 18rem;">
                    <img src="{{ $com->thumb}}" class="card-img-top" alt="img">
                    <div class="card-body">
                    <h5 class="card-title">{{ $com->title}}</h5>
                    <h5 class="card-title"><span class="text-danger">Price: </span><span class="text-primary">&euro; </span>{{ $com->price}}</h5>
                    <h5 class="card-title"><span class="text-danger">Type: </span>{{ $com->type}}</h5>
                    <div class="d-flex flex-row justify-content-between">
                        {{-- <p class="card-text">{{ $com->description}}</p> --}}
                        <a href="{{ route('comics.show', $com->id)}}" class="btn btn-primary">View</a>
                        {{-- <a href="#" class="btn btn-primary">Aggiungi al carrello</a> --}}
                        <a href="{{ route('comics.edit', $com->id)}}" class="btn btn-warning">Modify</a>
                        <form action="{{ route('comics.destroy', $com->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button href="{{ route('comics.destroy', $com->id)}}" type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>


                    </div>
                </div>
            </div>


        @endforeach

    </div>

@endsection

@section('delete-message')

<script src=" {{ asset('js/deleteMessage.js')}}"></script>

@endsection
