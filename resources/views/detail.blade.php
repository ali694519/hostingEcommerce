@extends('master')
@section('content')
  <div class="container">

    <div class="row">
      <div class="col-sm-6">
        <img class="detail-img" src="{{ $products['gallery'] }}" alt="">
      </div>

      <div class="col-sm-6">
        <a href="/">Go Back</a>
        <h2>{{ $products['name'] }}</h2>
        <h3> Price : {{ $products['price'] }}</h3>
        <h4>Details : {{ $products['description'] }}</h4>
        <h4>Category : {{ $products['category'] }}</h4>
        <br><br>
        <form action="/add_to_cart" method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{ $products['id'] }}">
          <button class="btn btn-primary">Add To Cart</button>

        </form>

        <br><br>
        <button class="btn btn-success">By No</button>
        <br><br>
      </div>
    </div>
  </div> {{-- end of div Container --}}
@endsection
