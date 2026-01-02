<x-utils.website-layout>

<section class="py-5" style="background:#F9FAFB">
  <div class="container">

    <!-- Page Title -->
    <div class="mb-4">
      <h2 class="fw-bold">Shopping Cart</h2>
      <p class="text-muted">Review your selected bikes before checkout</p>
    </div>

    <div class="row">

      <!-- CART TABLE -->
      <div class="col-lg-8 mb-4">
        <div class="card shadow-sm border-0">
          <div class="card-body">

            <div class="table-responsive">
              <table class="table align-middle">
                <thead class="table-light">
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th width="120">Quantity</th>
                    <th>Total</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                  <!-- Item 1 -->
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <img src="https://images.unsplash.com/photo-1558981403-c5f9891b6b87"
                             width="80" class="rounded">
                        <div>
                          <h6 class="fw-bold mb-1">Honda CB 150F</h6>
                          <small class="text-muted">Condition: Used</small>
                        </div>
                      </div>
                    </td>
                    <td class="fw-bold">$950</td>
                    <td>
                      <input type="number" class="form-control form-control-sm" value="1" min="1">
                    </td>
                    <td class="fw-bold">$950</td>
                    <td>
                      <button class="btn btn-sm btn-outline-danger">✕</button>
                    </td>
                  </tr>

                  <!-- Item 2 -->
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <img src="https://images.unsplash.com/photo-1612197590870-2e5d9d4c0c35"
                             width="80" class="rounded">
                        <div>
                          <h6 class="fw-bold mb-1">Yamaha MT 15</h6>
                          <small class="text-muted">Condition: New</small>
                        </div>
                      </div>
                    </td>
                    <td class="fw-bold">$1,600</td>
                    <td>
                      <input type="number" class="form-control form-control-sm" value="1" min="1">
                    </td>
                    <td class="fw-bold">$1,600</td>
                    <td>
                      <button class="btn btn-sm btn-outline-danger">✕</button>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>

            <div class="d-flex justify-content-between mt-3">
              <a href="#" class="btn btn-outline-dark btn-sm">← Continue Shopping</a>
              <a href="#" class="btn btn-warning btn-sm">Update Cart</a>
            </div>

          </div>
        </div>
      </div>

      <!-- CART SUMMARY -->
      <div class="col-lg-4">
        <div class="card shadow-sm border-0">
          <div class="card-body">

            <h5 class="fw-bold mb-3">Cart Summary</h5>

            <div class="d-flex justify-content-between mb-2">
              <span>Subtotal</span>
              <span class="fw-bold">$2,550</span>
            </div>

            <div class="d-flex justify-content-between mb-2">
              <span>Delivery</span>
              <span class="fw-bold">$50</span>
            </div>

            <hr>

            <div class="d-flex justify-content-between mb-3">
              <span class="fw-bold">Total</span>
              <span class="fw-bold text-warning">$2,600</span>
            </div>

            <a href="#" class="btn btn-warning w-100 mb-2">Proceed to Checkout</a>
            <a href="#" class="btn btn-outline-dark w-100">Continue Shopping</a>

          </div>
        </div>

        <!-- TRUST BADGES -->
        <div class="text-center mt-3 small text-muted">
          🔒 Secure Checkout • 🚚 Fast Delivery • 💳 Easy Payments
        </div>
      </div>

    </div>
  </div>
</section>




</x-utils.website-layout>
