@extends('layouts.default')
@section('content')
<div class="custom-product">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach ($products as $item)
      <div class="carousel-item {{ $item['id']==1 ? 'active' : '' }}">
        <a href="/detail/{{ $item['id'] }}">
          <img class="slider-img" src="{{ $item['gallery'] }}" alt="Slide Image" style="height: 600px;display: block; width: 50%;margin-left: auto; margin-right: auto;">
          <div class="carousel-caption">
            <h3>{{ $item['name'] }}</h3>
            <p>{{ $item['description'] }}</p>
          </div>
        </a>
      </div>
      @endforeach
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="trending-wrapper">
    <h3>Trending Products</h3>
    @foreach ($products as $item)
    <div class="trending-item">
      <a href="/detail/{{ $item['id'] }}">
        <img class="trending-image" src="{{ $item['gallery'] }}" alt="Slide Image">
        <h3>{{ $item['name'] }}</h3>

         
      </a>
    </div>
    @endforeach
  </div>
</div>
@endsection