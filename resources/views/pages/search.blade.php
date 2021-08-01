@extends('layouts.default')
@section('content')
<div class="custom-product">
  <div class="col-sm-4">
    <a href="#">Filter</a>
  </div>
  <div class="col-sm-4">
    <h3>Searched Product</h3>
    @foreach ($products as $item)
    <div class="searched-item">
      <a href="/detail/{{ $item['id'] }}">
        <img class="trending-image" src="{{ $item['gallery'] }}" alt="Slide Image">
        <h3>{{ $item['name'] }}</h3>
        <h3>{{ $item['description'] }}</h3>
        
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection