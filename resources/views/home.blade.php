@extends('layout.master')

@section('title', 'Halaman Home')

@section('section')
<div class="d-flex flex-wrap justify-content-center" style="margin-left: 15vw; margin-right:10vw; gap: 2vw;">
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



        {{-- <div class="d-flex flex-wrap justify-content-center" style="gap: 1vw;">
        @foreach ($books as $book )
        <div class="card" style="width: 18rem;">
            <img src="/assets/{{$book->image}}" class="" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$book->title}}</h5>
              <p>Genre : {{$book->category_id}}</p>
              <p class="card-text">by : {{$book->author}}</p>
              <a href="/detail/{{$book->id}}" class="btn btn-primary">Detail</a>
            </div>
          </div>
        @endforeach
    </div> --}}
@endsection
