@extends('frontend.master')
@section('title','Shop Page')
@section('content')

<main role="main">
  		
 	<section>
 		<div class="container" style="text-align: center;">
			<h1 class="Jumbotron-heading">Car Shop </h1>
			<p class="lead text-muted">
				<a href="" class="btn btn-primary">cars </a>
				<a href="" class="btn btn-secondary">phones </a>
			</p> 			
 		</div>
 	</section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            @forelse($products as $product)
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img class="card-img-top" src="{{url('images',$product->image)}}" alt="Card image cap">
                <div class="card-body">
                  <p class="card-body">{{$product->pro_name}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">View Product</button>
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                    </div>
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