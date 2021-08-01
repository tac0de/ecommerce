@extends('layouts.default')
@section('content')
<div class="custom-product">
  <div class="col-sm-10">
    <h3>Your Cart</h3>
    <a href="/ordernow" class="btn btn-success">Order Now</a> <br>
    @foreach ($products as $item)
    <div class="row searched-item cart-list-divider">
      <div class="col-sm-3">
        <a href="/detail/{{ $item->id }}">
          <img class="trending-image" src="{{ $item->gallery }}" alt="Slide Image">
        </a>
      </div>
      <div class="col-sm-3">

        <h3>{{ $item->name }}</h3>
        <h3>{{ $item->description }}</h3>
      
      </div>
      <div class="col-sm-3">
        <a href="/removecart/{{ $item->cart_id }}" class="btn btn-danger">Remove from cart</a>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection