<?php
use App\Http\Controllers\Productcontroller;
use Illuminate\Support\Facades\Session;
$totlal = 0;
if (Session::has('user')) {
    $totlal = Productcontroller::cartItem();
}
?>

{{-- @php
$totlal = App\Http\Controllers\Productcontroller::cartItem();
@endphp --}}

<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <a class=" navbar-brand mb-0 h1" href="/">
    E-Comm
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link active" href="/">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/my/orders">Orders</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/cart/list">cart({{ $totlal }})</a>
      </li>

      @if (Session::has('user'))
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            {{ Session::get('user')['name'] }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/logout">Logout</a>

          </div>
        </li>
      @else
        <a class="nav-link" href="/login">Login</a>
        <a class="nav-link" href="/register">Register</a>
      @endif

    </ul>
    <form action="{{ route('search') }}" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>


  </div>
</nav>
