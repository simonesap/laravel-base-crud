@extends('layouts.layout')

@section('title', 'Comics')

@section('content')

    {{-- @if (session('message'))
        <div>{{session('message')}}</div>
    @endif --}}

        <table class="table">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">Sale date</th>
                    <th scope="col">Type</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $comic->title}}</td>
                    <td>{{ $comic->description}}</td>
                    <td>
                        <img src="{{ $comic->thumb}}" alt="">
                    </td>
                    <td>{{ $comic->price}}</td>
                    <td>{{ $comic->series}}</td>
                    <td>{{ $comic->sale_date}}</td>
                    <td>{{ $comic->type}}</td>
                </tr>
            </tbody>
        </table>

        {{-- <form action="{{ route('comics.destroy', $comics->id)}}">
            @method('DELETE')
            @csrf
            <button>Delete</button>
        </form> --}}

@endsection

{{-- @section('delete-message')

<script src=" {{ asset('js/deleteMessage.js')}}"></script>

@endsection --}}
