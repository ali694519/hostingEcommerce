<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>E-commerce</title>



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/1bd4cddc08.js" crossorigin="anonymous"></script>
</head>

<body>

  {{ View::make('header') }}

  @yield('content')
  <br><br><br><br>
  <br><br><br>
  {{ View::make('footer') }}



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

<style>
  .custom-login {
    height: 500px;
    padding-top: 100px
  }

  .row-al {
    display: block;
    margin: 0 auto;
  }

  img.slider-img {
    height: 400px !important
  }

  .slider-text {
    background-color: #35443585 !important
  }

  .trending-img {
    height: 100px;
  }

  .trening-item {
    float: left;
    width: 20%;
  }

  .trendin-wrapper {
    margin: 30px;
  }

  .custom-product {
    height: 600px
  }

  .detail-img {
    height: 200px
  }

  .cart_list_dvider {
    border-bottom: 1px solid #CCC;
    margin-bottom: 20px;
    padding-bottom: 20px
  }
</style>

</html>
