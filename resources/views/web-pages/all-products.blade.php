<x-utils.website-layout>


    <section class="py-5" style="background:#F9FAFB">
        <div class="container">

            <!-- Page Heading -->
            <div class="mb-4">
                <h2 class="fw-bold">All Bikes</h2>
                <p class="text-muted">Browse new & used bikes from verified sellers</p>
            </div>

            <div class="row">

                <!-- FILTER SIDEBAR -->
                <aside class="col-lg-3 mb-4">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h6 class="fw-bold mb-3">Filter Bikes</h6>

                            <!-- Category -->
                            <label class="small fw-bold mb-1">Category</label>
                            <select class="form-select mb-3">
                                <option>All Categories</option>
                                <option>Mountain Bikes</option>
                                <option>Sports Bikes</option>
                                <option>Electric Bikes</option>
                                <option>Road Bikes</option>
                            </select>

                            <!-- Condition -->
                            <label class="small fw-bold mb-1">Condition</label>
                            <select class="form-select mb-3">
                                <option>All</option>
                                <option>New</option>
                                <option>Used</option>
                            </select>

                            <!-- Price -->
                            <label class="small fw-bold mb-1">Price Range</label>
                            <input type="range" class="form-range mb-3">

                            <button class="btn btn-warning w-100">Apply Filters</button>
                        </div>
                    </div>
                </aside>

                <!-- PRODUCTS GRID -->
                <div class="col-lg-9">
                    <div class="row g-4">

                        <!-- Product 1 -->

                        @if ($products->isNotEmpty())

                            @foreach ($products as $item)
                                <div class="col-md-4">
                                    <div class="card shadow-sm border-0 h-100">
                                        <span
                                            class="badge  @if ($item->condition == 'used') bg-danger @else bg-success @endif position-absolute m-2">
                                            {{ $item->condition }}</span>
                                        <img src="https://images.unsplash.com/photo-1504215680853-026ed2a45def"
                                            class="card-img-top" style="height:220px; object-fit:cover;"
                                            alt="Yamaha Bike">
                                        <div class="card-body">
                                            <h6 class="fw-bold"> {{ $item->brand }} {{ $item->model_name }}</h6>
                                            <p class="small text-muted mb-1">Category: {{ $item->category->name }}</p>
                                            <p class="fw-bold text-warning">${{ $item->new_price }}</p>
                                            <a href="{{ route('singleproduct', $item->slug) }}"
                                                class="btn btn-outline-dark btn-sm w-100">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        @endif

                        {{-- <!-- Product 2 -->
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0 h-100">
                                <span class="badge bg-warning text-dark position-absolute m-2">USED</span>
                                <img src="https://images.unsplash.com/photo-1558981403-c5f9891b6b87"
                                    class="card-img-top" style="height:220px; object-fit:cover;" alt="Honda Bike">
                                <div class="card-body">
                                    <h6 class="fw-bold">Honda CB 150</h6>
                                    <p class="small text-muted mb-1">Category: Street Bike</p>
                                    <p class="fw-bold text-warning">$950</p>
                                    <a href="#" class="btn btn-outline-dark btn-sm w-100">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0 h-100">
                                <span class="badge bg-success position-absolute m-2">NEW</span>
                                <img src="https://images.unsplash.com/photo-1612197590870-2e5d9d4c0c35"
                                    class="card-img-top" style="height:220px; object-fit:cover;" alt="Kawasaki Bike">
                                <div class="card-body">
                                    <h6 class="fw-bold">Kawasaki Ninja</h6>
                                    <p class="small text-muted mb-1">Category: Sports Bike</p>
                                    <p class="fw-bold text-warning">$2,100</p>
                                    <a href="#" class="btn btn-outline-dark btn-sm w-100">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0 h-100">
                                <span class="badge bg-warning text-dark position-absolute m-2">USED</span>
                                <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f"
                                    class="card-img-top" style="height:220px; object-fit:cover;" alt="Suzuki Bike">
                                <div class="card-body">
                                    <h6 class="fw-bold">Suzuki GS 150</h6>
                                    <p class="small text-muted mb-1">Category: Road Bike</p>
                                    <p class="fw-bold text-warning">$820</p>
                                    <a href="#" class="btn btn-outline-dark btn-sm w-100">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0 h-100">
                                <span class="badge bg-success position-absolute m-2">NEW</span>
                                <img src="https://images.unsplash.com/photo-1595433562696-19f1c95fcb8a"
                                    class="card-img-top" style="height:220px; object-fit:cover;" alt="Electric Bike">
                                <div class="card-body">
                                    <h6 class="fw-bold">Electric City Bike</h6>
                                    <p class="small text-muted mb-1">Category: Electric Bike</p>
                                    <p class="fw-bold text-warning">$1,300</p>
                                    <a href="#" class="btn btn-outline-dark btn-sm w-100">View Details</a>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="col-md-4">
                            <div class="card shadow-sm border-0 h-100">
                                <span class="badge bg-warning text-dark position-absolute m-2">USED</span>
                                <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c3"
                                    class="card-img-top" style="height:220px; object-fit:cover;" alt="Adventure Bike">
                                <div class="card-body">
                                    <h6 class="fw-bold">Adventure Touring Bike</h6>
                                    <p class="small text-muted mb-1">Category: Adventure</p>
                                    <p class="fw-bold text-warning">$1,150</p>
                                    <a href="#" class="btn btn-outline-dark btn-sm w-100">View Details</a>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>

            </div>
        </div>
    </section>



</x-utils.website-layout>
