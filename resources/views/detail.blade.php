@extends('layout.master')

@section('title', 'Halaman Detail')

@section('section')

    <div class="container" style="margin-left: 2vw;">
        <img class="card-img-top" src="/{{$books->image}}" style="width: 25vw; height:32vw;margin-bottom:2vw" alt="Card image cap">
        <h3>Book Information</h3>
        <br>
        <p style="font-size: 1vw">Book Title : {{$books->title}}</p>
        <p style="font-size: 1vw">Book Author : {{$books->author}}</p>
        <p style="font-size: 1vw">Book Publisher : {{$books->Publisher->name}}</p>
        <p style="font-size: 1vw">Book Year : {{$books->year}}</p>
        <p style="font-size: 1vw; width:25vw; text-align:justify">Book Synopsis : <br>{{$books->synopsis}}</p>
    </div>
@endsection
