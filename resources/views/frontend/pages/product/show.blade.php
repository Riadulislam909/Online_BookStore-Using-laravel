@extends('frontend.layouts.master')

@section('title')
  {{$product->title}} | Online Book Store
@endsection

@section('content')

  <!-- Start Sidebar + Content -->
  <div class='container margin-top-20'>
    <div class="row">
      <div class="col-md-4">

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
  @php
  $i = 1;
  @endphp
      @foreach($product->images as $image)
      
      <div class="product-item carousel-item {{$i == 1? 'active':''}}">
      <img class="d-block w-100" src="{!! asset('images/products/'.$image->image)!!}" alt="First slide">
      </div>
      @php
       $i++;
      @endphp

      @endforeach


  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        
      </div>

      <div class="col-md-8">
        <div class="widget">
        <label>Book Name: </label>
          <h3>{{$product->title}}</h3>
          <label>Book Price: </label>
          <h3>{{$product->price}} Taka
          <span class="badge badge-primary">
          {{$product->quantity <1 ? ' No Book Is Available' : $product->quantity.' Book in stock'}}
          </span>
          </h3>
          <hr>
           
           <div class="product-description">
           <label>Description: </label>
           {!! $product->description !!}
           </div>

        </div>
        <div class="widget">

        </div>
      </div>


    </div>
  </div>

  <!-- End Sidebar + Content -->
@endsection
