@extends('master')
@section('content')
  <div class="custom-product">
    {{-- <div class="col-sm-4">
            <a href="">Filter</a>
        </div> --}}
    <div class="col-sm-10">
      <div class="trendin-wrapper">
        <h4>My Orders</h4>
        @foreach ($orders as $item)
          <div class=" row searched-item cart_list_dvider">
            <div class="col-sm-3">
              <a href="detail/{{ $item->id }}">
                <img class="trending-img" src="{{ $item->gallery }}" alt="">
              </a>
            </div>

            <div class="col-sm-4">
              <div class="">
                <h2>Nmae : {{ $item->name }}</h2>
                <h5> Delivery : {{ $item->sataus }}</h5>
                <h5>Address :{{ $item->address }}</h5>
                <h5>Payment Status : {{ $item->payment_sataus }}</h5>
                <h5>Payment Method : {{ $item->payment_method }}</h5>
              </div>
            </div>
          </div>
        @endforeach
      </div>

    </div>
  </div> {{-- end of div Container --}}
@endsection
