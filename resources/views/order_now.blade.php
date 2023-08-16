@extends('master')
@section('content')
  <br>
  <div class="custom-product">
    <div class="col-sm-10">
      <table class="table table-striped">

        <tbody>
          <tr>
            <td>Amount</td>
            <td>$ {{ $total }}</td>
          </tr>
          <tr>
            <td>Tax</td>
            <td>$ 0</td>
          </tr>
          <tr>
            <td>Delivery</td>
            <td>$ 10</td>
          </tr>
          <tr>
            <td>Total Amonut</td>
            <td>$ {{ $total + 10 }}</td>
          </tr>
        </tbody>
      </table>
      <div>
        <br>
        <form action="/order/place" method="POST">
          @csrf
          <div class="form-group">
            <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
          </div>
          <div class="form-group">
            <label for="pwd">Payment Method</label><br> <br>
            <input type="radio" value="cash" name="payment"><span>online payment</span> <br> <br>
            <input type="radio" value="cash" name="payment"><span>Email payment</span> <br> <br>
            <input type="radio" value="cash" name="payment"><span>Payment on Delivery</span> <br> <br>
          </div>
          <button type="submit" class="btn btn-default">Order Now</button>
        </form>
      </div>
    </div>
  </div>
@endsection
