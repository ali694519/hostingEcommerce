@extends('master')
@section('content')
  <div class="custom-product">
    {{-- <div class="col-sm-4">
            <a href="">Filter</a>
        </div> --}}
    <div class="col-sm-10">
      <div class="trendin-wrapper">
        <h4>Result For Product</h4>
        <a class="btn btn-success" href="/order/now">Order Now</a> <br> <br> <br>
        @foreach ($products as $item)
          <div class=" row searched-item cart_list_dvider">
            <div class="col-sm-3">
              <a href="detail/{{ $item->id }}">
                <img class="trending-img" src="{{ $item->gallery }}" alt="">
              </a>
            </div>

            <div class="col-sm-4">
              <div class="">
                <h2>{{ $item->name }}</h2>
                <h5>{{ $item->description }}</h5>
              </div>
            </div>

            <div class="col-sm-3">
              <a href="/remove/{{ $item->cart_id }}" class="btn btn-warning">Remove to cart</a>
            </div>
          </div>
        @endforeach
        <a class="btn btn-success" href="/order/now">Order Now</a> <br> <br>
      </div>

    </div>
  </div> {{-- end of div Container --}}
@endsection
