@extends('layout.master')

@section('title', 'Halaman Home')

@section('section')
<div class="d-flex flex-wrap justify-content-center" style="margin-left: 25vw; margin-right:25vw; gap: 2vw;">
    @foreach ($publisher as $publisher )
        <div class="card" style="width: 18rem;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
            <img class="card-img-top" src="/{{$publisher->logo}}" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">{{$publisher->name}}</h5>
            <p>by</p>
            {{-- <p class="card-text">{{$publisher->author}}</p> --}}
            <a href="/publisherdetail/{{$publisher->id}}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
