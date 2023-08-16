@extends('master')
@section('content')
  <div class="container">

    @forelse ($data as $daa)
      <div class="row">
        <div class="col-sm-6">
          <img class="detail-img" src="{{ $daa['gallery'] }}" alt="">
        </div>

        <div class="col-sm-6">
          <a href="/">Go Back</a>
          <h2>{{ $daa['name'] }}</h2>
          <h3> Price : {{ $daa['price'] }}</h3>
          <h4>Details : {{ $daa['description'] }}</h4>
          <h4>Category : {{ $daa['category'] }}</h4>
          <br><br>
          <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $daa['id'] }}">
            <button class="btn btn-primary">Add To Cart</button>

          </form>

          <br><br>
          <button class="btn btn-success">By No</button>
          <br><br>
        </div>
      </div>
    @empty
      <div class="alert alert-warning">
        <span>
          There is nothing matching the search.
        </span>
      </div>
    @endforelse


  </div>
@endsection
