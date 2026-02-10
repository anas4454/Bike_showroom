   <header>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

       <nav class="navbar navbar-expand-lg sticky-top" style="background:#0B1C2D">
           <div class="container">
               <a class="navbar-brand text-warning fw-bold fs-3" href="{{ route('home') }}">BIKE<span
                       class="text-white">STORE</span></a>

               <button class="navbar-toggler bg-light" data-bs-toggle="collapse" data-bs-target="#nav">
                   <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="nav">
                   <ul class="navbar-nav ms-auto gap-3">
                       <li class="nav-item"><a class="nav-link text-white" href="{{ route('home') }}">Home</a></li>
                       <li class="nav-item"><a class="nav-link text-white" href="{{ route('products') }}">Bikes</a></li>
                       <li class="nav-item dropdown">
                           <a class="nav-link  text-white" href="{{ route('category') }}">Categories</a>
                           {{-- <ul class="dropdown-menu">
                                <li><a class="dropdown-item">Mountain Bikes</a></li>
                                <li><a class="dropdown-item">Road Bikes</a></li>
                                <li><a class="dropdown-item">Electric Bikes</a></li>
                            </ul> --}}
                       </li>
                       <li class="nav-item"><a class="nav-link text-white"
                               href="{{ route('collection') }}">Collections</a></li>
                       <li class="nav-item"><a class="btn btn-warning px-4" href="{{ route('cart') }}">Cart</a></li>
                       <li class="nav-item"><a class="btn btn-warning px-4" href="{{ route('login') }}">Login</a></li>
                   </ul>
               </div>
           </div>
       </nav>

   </header>
