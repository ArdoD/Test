@extends('layout.master')

@section('title', 'Halaman Detail')

@section('section')

    <div class="container" style="margin-left: 2vw;">
        <div class="box" style="background-color: rgb(181, 171, 171); padding-left:2vw;padding-bottom:2vw">
            <img class="card-img-top" src="/{{$publisher->logo}}" style="width:25vw;height:15vw;margin-bottom:2vw;margin-top:2vw" alt="Card image cap">
            <h3>Publisher Information</h3>
            <br>
            <p style="font-size: 1vw">Publisher Name : {{$publisher->name}}</p>
            <p style="font-size: 1vw">Address : {{$publisher->adress}}</p>
            <p style="font-size: 1vw">Phone : {{$publisher->phone}}</p>
            <p style="font-size: 1vw">Email: {{$publisher->email}}</p>
            {{-- <p style="font-size: 1vw; width:25vw; text-align:justify">Book Synopsis : <br>{{$books->synopsis}}</p> --}}
        </div>
        <br>
        <br>
        <h3>Book on this Publisher</h3>
        <div class="d-flex flex-wrap justify-content-center" style="margin-top:5vw;gap: 2vw;">
            @foreach ($books as $book )
                <div class="card" style="width: 18rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                    <img class="card-img-top" src="/{{$book->image}}" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title">{{$book->title}}</h5>
                    <p>by</p>
                    <p class="card-text">{{$book->author}}</p>
                    <a href="/detail/{{$book->id}}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
