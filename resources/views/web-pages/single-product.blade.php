<x-utils.website-layout>

    <section class="py-5" style="background:#F9FAFB">
        <div class="container">

            <!-- PRODUCT TOP -->
            <div class="row mb-5">

                <!-- IMAGE GALLERY -->

                @if ($product->images->count() < 1)


                    <img src="https://images.unsplash.com/photo-1504215680853-026ed2a45def" class="card-img-top"
                        style="height:220px; object-fit:cover;" alt="Yamaha Bike">
                @else
                    <div class="col-lg-6">
                        <div class="card shadow-sm border-0">
                            <img src="{{ $product->images->first()->image_url }}" class="img-fluid rounded-top"
                                style="height:420px; object-fit:cover;" alt="Bike Image">
                        </div>
                        <!-- Thumbnails -->
                        {{-- <div class="d-flex gap-2 mt-3">
                            @foreach ($product->images as $item)
                                <img src="{{ $item->image_url }}" class="img-thumbnail" width="80">
                                {{-- <img src="https://images.unsplash.com/photo-1504215680853-026ed2a45def" class="img-thumbnail"
                            width="80">
                        <img src="https://images.unsplash.com/photo-1612197590870-2e5d9d4c0c35" class="img-thumbnail"
                            width="80">
                            @endforeach
                        </div> --}}

                        <div class="row g-2 mt-3">
                            @foreach ($product->images as $item)
                                <div class="col-auto">
                                    <img src="{{ $item->image_url }}" class="img-thumbnail" width="80">
                                </div>
                            @endforeach
                        </div>


                    </div>


                @endif
                <!-- PRODUCT SUMMARY -->
                <div class="col-lg-6">
                    <h2 class="fw-bold">{{ $product->name }}</h2>
                    <p class="text-muted mb-1">Brand: <strong>{{ $product->brand }}</strong></p>
                    <p class="text-muted mb-1">Model: <strong>{{ $product->model_name }}</strong></p>
                    <p class="text-muted mb-1">category: <strong>{{ $product->category->name }}</strong></p>

                    <p class="fs-3 fw-bold text-warning">${{ $product->new_price }}</p>
                    <p class="text-muted text-decoration-line-through">${{ $product->old_price }}</p>

                    <span
                        class="badge @if ($product->condition == 'used') bg-danger @else bg-warning @endif text-dark mb-3">{{ $product->condition }}</span>


                    <p class="mt-3">
                        {{ $product->excerpt }}
                    </p>

                    <div class="row g-2 mt-3">
                        <div class="col-md-6">
                            <button class="btn btn-warning btn-lg w-100">Add to Cart</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-outline-dark btn-lg w-100">Buy Now</button>
                        </div>
                    </div>

                    <!-- QUICK HIGHLIGHTS -->
                    <div class="row text-center mt-4">
                        <div class="col-4">
                            <small class="text-muted">Engine</small>
                            <p class="fw-bold">{{ $product->engine_cc }} CC</p>
                        </div>
                        <div class="col-4">
                            <small class="text-muted">Mileage</small>
                            <p class="fw-bold">{{ $product->milage }} km/l</p>
                        </div>
                        <div class="col-4">
                            <small class="text-muted">Gears</small>
                            <p class="fw-bold">{{ $product->no_of_gear }} Speed</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- DESCRIPTION -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h4 class="fw-bold mb-3">Product Description</h4>
                            <p>
                                {{ $product->description }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SPECIFICATIONS -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="card shadow-sm border-0">
                        <div class="card-body">
                            <h4 class="fw-bold mb-4">Technical Specifications</h4>

                            <div class="table-responsive">
                                <table class="table table-striped align-middle">
                                    <tbody>

                                        <tr>
                                            <th>Name</th>
                                            <td>{{ $product->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Brand</th>
                                            <td>{{ $product->brand }}</td>
                                        </tr>
                                        <tr>
                                            <th>Model Name</th>
                                            <td>{{ $product->model_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Bike Type</th>
                                            <td> {{ $product->bike_type }}</td>
                                        </tr>
                                        <tr>
                                            <th>Launch Year</th>
                                            <td>{{ $product->launch_year }}</td>
                                        </tr>
                                        <tr>
                                            <th>Condition</th>
                                            <td>{{ $product->condition }}</td>
                                        </tr>
                                        <tr>
                                            <th>Engine</th>
                                            <td>{{ $product->engine_cc }} CC</td>
                                        </tr>
                                        <tr>
                                            <th>No. of Cylinders</th>
                                            <td>{{ $product->no_of_cylinder }}</td>
                                        </tr>
                                        <tr>
                                            <th>Max Power</th>
                                            <td>{{ $product->max_meter }} HP</td>
                                        </tr>
                                        <tr>
                                            <th>Max Torque</th>
                                            <td>{{ $product->max_torque }} Nm</td>
                                        </tr>
                                        <tr>
                                            <th>No. of Gears</th>
                                            <td>{{ $product->no_of_gear }}</td>
                                        </tr>
                                        <tr>
                                            <th>Fuel Tank Capacity</th>
                                            <td>{{ $product->tank_capacity }} Liters</td>
                                        </tr>
                                        <tr>
                                            <th>Mileage</th>
                                            <td>{{ $product->milage }} km/l</td>
                                        </tr>
                                        <tr>
                                            <th>Weight</th>
                                            <td>{{ $product->weight }} kg</td>
                                        </tr>
                                        <tr>
                                            <th>Brake Type</th>
                                            <td>{{ $product->break_type }}</td>
                                        </tr>
                                        <tr>
                                            <th>Wheel Type</th>
                                            <td>{{ $product->wheel_type }}</td>
                                        </tr>
                                        <tr>
                                            <th>Tyre Type</th>
                                            <td>{{ $product->tyre_type }}</td>
                                        </tr>
                                        <tr>
                                            <th>Headlight</th>
                                            <td>{{ $product->headlight }}</td>
                                        </tr>
                                        <tr>
                                            <th>Available Colors</th>
                                            <td>{{ $product->colors }}</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- RELATED BIKES -->
            <div class="row">
                <div class="col-12">
                    <h4 class="fw-bold mb-4">Related Bikes</h4>
                </div>

                <div class="col-md-3">
                    <div class="card shadow-sm border-0">
                        <img src="https://images.unsplash.com/photo-1612197590870-2e5d9d4c0c35" class="card-img-top"
                            style="height:180px; object-fit:cover;">
                        <div class="card-body">
                            <h6 class="fw-bold">Yamaha MT 15</h6>
                            <p class="text-warning fw-bold">$1,800</p>
                            <a href="#" class="btn btn-outline-dark btn-sm w-100">View</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>




</x-utils.website-layout>
