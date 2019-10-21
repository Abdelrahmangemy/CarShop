<header>
      <nav class="navbar navbar-expand-md navbar-dark" style="background-color: #0c5460">
  <a class="navbar-brand" href="#"><img src="{{url('images/logo3.png')}}" width="200px" style="background-color: white"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('shop')}}">Shop</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php $cats = DB::table('categories')->get(); ?>
          @foreach($cats as $cat)
                    <a class="dropdown-item" href="{{url('category',$cat->id)}}">{{ucwords($cat->name)}}</a>
          @endforeach
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{route('login')}}">Login</a>
      </li>
    </ul>
  </div>
</nav>
    </header>