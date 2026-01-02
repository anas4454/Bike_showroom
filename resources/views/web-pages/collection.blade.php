<x-utils.website-layout>

<!-- COLLECTION HERO -->
<section class="py-5 text-white" style="background:#1F3A5F">
  <div class="container">
    <h1 class="fw-bold">Mountain Bikes Collection</h1>
    <p class="lead text-light mb-0">
      Discover powerful mountain bikes designed for rough terrain and adventure riding.
    </p>
  </div>
</section>

<!-- COLLECTION CONTENT -->
<section class="py-5" style="background:#F9FAFB">
  <div class="container">
    <div class="row">

      <!-- FILTER SIDEBAR -->
      <aside class="col-lg-3 mb-4">
        <div class="card shadow-sm border-0">
          <div class="card-body">
            <h6 class="fw-bold mb-3">Filter Bikes</h6>

            <label class="small fw-bold mb-1">Condition</label>
            <select class="form-select mb-3">
              <option>All</option>
              <option>New</option>
              <option>Used</option>
            </select>

            <label class="small fw-bold mb-1">Brand</label>
            <select class="form-select mb-3">
              <option>All Brands</option>
              <option>Honda</option>
              <option>Yamaha</option>
              <option>Suzuki</option>
              <option>Kawasaki</option>
            </select>

            <label class="small fw-bold mb-1">Engine CC</label>
            <select class="form-select mb-3">
              <option>All</option>
              <option>100–150 CC</option>
              <option>150–250 CC</option>
              <option>250+ CC</option>
            </select>

            <button class="btn btn-warning w-100">Apply Filters</button>
          </div>
        </div>
      </aside>

      <!-- PRODUCTS GRID -->
      <div class="col-lg-9">
        <div class="row g-4">

          <!-- Product 1 -->
          <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
              <span class="badge bg-success position-absolute m-2">NEW</span>
              <img src="https://images.unsplash.com/photo-1612197590870-2e5d9d4c0c35"
                   class="card-img-top"
                   style="height:220px; object-fit:cover;"
                   alt="Yamaha Mountain Bike">
              <div class="card-body">
                <h6 class="fw-bold">Yamaha XTZ 150</h6>
                <p class="small text-muted mb-1">Engine: 150 CC</p>
                <p class="fw-bold text-warning">$1,700</p>
                <a href="#" class="btn btn-outline-dark btn-sm w-100">View Details</a>
              </div>
            </div>
          </div>

          <!-- Product 2 -->
          <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
              <span class="badge bg-warning text-dark position-absolute m-2">USED</span>
              <img src="https://images.unsplash.com/photo-1558981403-c5f9891b6b87"
                   class="card-img-top"
                   style="height:220px; object-fit:cover;"
                   alt="Honda Mountain Bike">
              <div class="card-body">
                <h6 class="fw-bold">Honda XR 150</h6>
                <p class="small text-muted mb-1">Engine: 150 CC</p>
                <p class="fw-bold text-warning">$1,100</p>
                <a href="#" class="btn btn-outline-dark btn-sm w-100">View Details</a>
              </div>
            </div>
          </div>

          <!-- Product 3 -->
          <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
              <span class="badge bg-success position-absolute m-2">NEW</span>
              <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f"
                   class="card-img-top"
                   style="height:220px; object-fit:cover;"
                   alt="Suzuki Mountain Bike">
              <div class="card-body">
                <h6 class="fw-bold">Suzuki DR 200</h6>
                <p class="small text-muted mb-1">Engine: 200 CC</p>
                <p class="fw-bold text-warning">$2,200</p>
                <a href="#" class="btn btn-outline-dark btn-sm w-100">View Details</a>
              </div>
            </div>
          </div>

          <!-- Product 4 -->
          <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
              <span class="badge bg-warning text-dark position-absolute m-2">USED</span>
              <img src="https://images.unsplash.com/photo-1504215680853-026ed2a45def"
                   class="card-img-top"
                   style="height:220px; object-fit:cover;"
                   alt="Kawasaki Mountain Bike">
              <div class="card-body">
                <h6 class="fw-bold">Kawasaki KLX 250</h6>
                <p class="small text-muted mb-1">Engine: 250 CC</p>
                <p class="fw-bold text-warning">$2,500</p>
                <a href="#" class="btn btn-outline-dark btn-sm w-100">View Details</a>
              </div>
            </div>
          </div>

          <!-- Product 5 -->
          <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
              <span class="badge bg-success position-absolute m-2">NEW</span>
              <img src="https://images.unsplash.com/photo-1595433562696-19f1c95fcb8a"
                   class="card-img-top"
                   style="height:220px; object-fit:cover;"
                   alt="Adventure Bike">
              <div class="card-body">
                <h6 class="fw-bold">Adventure Trail Bike</h6>
                <p class="small text-muted mb-1">Engine: 180 CC</p>
                <p class="fw-bold text-warning">$1,900</p>
                <a href="#" class="btn btn-outline-dark btn-sm w-100">View Details</a>
              </div>
            </div>
          </div>

          <!-- Product 6 -->
          <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
              <span class="badge bg-warning text-dark position-absolute m-2">USED</span>
              <img src="https://images.unsplash.com/photo-1605559424843-9e4c228bf1c3"
                   class="card-img-top"
                   style="height:220px; object-fit:cover;"
                   alt="Off Road Bike">
              <div class="card-body">
                <h6 class="fw-bold">Off-Road Pro Bike</h6>
                <p class="small text-muted mb-1">Engine: 200 CC</p>
                <p class="fw-bold text-warning">$1,350</p>
                <a href="#" class="btn btn-outline-dark btn-sm w-100">View Details</a>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>




</x-utils.website-layout>
