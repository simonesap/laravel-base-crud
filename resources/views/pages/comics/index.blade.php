@extends('layouts.layout')

@section('title', 'Home')

@section('content')

    {{-- @if (session('message'))
        <div>{{session('message')}}</div>
    @endif --}}

    @foreach ($comic as $com )

    <div class="row row-cols">
        <div class="col-3 card" style="width: 18rem;">
            <img src="{{ $com->thumb}}" class="card-img-top" alt="img">
            <div class="card-body">
              <h5 class="card-title">{{ $com->title}}</h5>
              <h5 class="card-title"><span class="text-danger">Price: </span><span class="text-primary">&euro; </span>{{ $com->price}}</h5>
              <h5 class="card-title"><span class="text-danger">Type: </span>{{ $com->type}}</h5>
              {{-- <p class="card-text">{{ $com->description}}</p> --}}
              <a href="{{ route('comics.show', $com->id)}}" class="btn btn-primary">View</a>
              {{-- <a href="#" class="btn btn-primary">Aggiungi al carrello</a> --}}
              <a href="#" class="btn btn-success">Modifica</a>
            </div>
          </div>
    </div>


        {{-- <form action="{{ route('comics.destroy', $comics->id)}}">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form> --}}

    @endforeach

@endsection

{{-- @section('delete-message')

<script src=" {{ asset('js/deleteMessage.js')}}"></script>

@endsection --}}
