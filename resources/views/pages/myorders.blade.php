@extends('layouts.default')
@section('content')
<div class="custom-product">
  <div class="col-sm-10">
    <h3>Your Orders</h3>
    @foreach ($orders as $item)
    <div class="row searched-item cart-list-divider">
      <div class="col-sm-3">
        <a href="/detail/{{ $item->id }}">
          <img class="trending-image" src="{{ $item->gallery }}" alt="Slide Image">
        </a>
      </div>
      <div class="col-sm-3">

        <h2>Name: {{ $item->name }}</h3>
        <h5>Delivery Status{{ $item->status }}</h3>
        <h5>Address : {{ $item->address }}</h5>
        <h5>Payment Status: {{ $item->payment_status }}</h5>
        <h5>Payment Method: {{ $item->payment_method }}</h5>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endsection