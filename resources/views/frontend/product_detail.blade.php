@extends('frontend.master')
@section('title','Detail Page')
@section('content')
    <div class="container">
        <br><br>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-6 col-xs-12">
                <div class="thumbnail">
                    <img src="{{url('images',$product->image)}}" class="card-img">
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <h2><?php echo ucwords($product->pro_name); ?></h2>
                <h5>{{$product->pro_info}}</h5>
                <h2 class="text-danger">$ {{$product->spl_price}}</h2>
                <p><b>Available : {{$product->stock}} In Stock</b></p>
                <a href="{{url('cart/addItem',$product->id)}}" class="btn btn-sm btn-outline-secondary">Add To Cart <i class="fa fa-shopping-cart"></i></a>
                <br><br>
                <?php
                    $wishlistData=DB::table('wishlists')->rightJoin('products','wishlists.pro_id','=','products.id')
                    ->where('wishlists.pro_id','=',$product->id)->get();
                    $count=App\Wishlist_model::where(['pro_id'=>$product->id])->count();
                    if($count=="0"){
                ?>
                <form action="{{route('addToWishList')}}" method="post" role="form">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="hidden" value="{{$product->id}}" name="pro_id">
                    <button type="submit" class="btn btn-default">Add to Wishlist</button>
                </form>
                <?php }else{?>
                    <h3 style="color:green">Already Added to Wishlist <a href="{{url('/WishList')}}">wishlist</a></h3>
                <?php }?>

            </div>

            @endforeach


        </div>
    </div>
@endsection