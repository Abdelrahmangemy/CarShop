@extends('frontend.master')
@section('title' , 'Home Page')
@section('content')

<main role="main">
  <div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{URL::asset('dist/images/photo-1557821552-17105176677c.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{URL::asset('dist/images/130439_00_2x.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{URL::asset('dist/images/images.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="{{URL::asset('dist/images/HOW TO OPTIMIZE MILLENNIAL’S SHOPPING HABITS THIS HOLIDAY SEASON [INFOGRAPHIC].png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{URL::asset('dist/images/130439_00_2x.png')}}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{URL::asset('dist/images/1568380355-23619200.png')}}" class="d-block w-100" alt="...">
              </div>
            </div>
      </div>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            @forelse($products as $product)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{url('images',$product->image)}}" alt="Card image cap">
                <div class="card-body">
                  <span>$ {{$product->pro_name}}</span><br>
                  <del>$ {{$product->pro_price}}</del>
                  <span class="price text-muted float-right">$ {{$product->spl_price}} </span>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View Product</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                    </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            @empty
                <h3>No Product</h3>
            @endforelse
           
          </div>
        </div>
      </div>

    </main>



@endsection