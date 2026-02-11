<x-dashboard-layout.main>

    <style>
        .content h2 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 2px;
            color: #0F172A
        }

        .content p {
            font-size: 12px;
            color: #6B7280;
            margin-bottom: 0
        }

        .card-box {
            background: #fff;
            border: 1px solid #E5E7EB;
            border-radius: 14px;
            padding: 20px
        }

        .meta-row {
            display: flex;
            gap: 18px;
            flex-wrap: wrap
        }

        .meta-item {
            min-width: 160px
        }

        .label {
            font-size: 12px;
            color: #6B7280
        }

        .value {
            font-weight: 600;
            color: #0F172A
        }
    </style>

    <div class="content">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h2>Order Details</h2>
                <p class="text-muted">Detailed view for order and customer information</p>
            </div>
            <div>
                <a href="{{ route('dashboard.orders') }}" class="btn btn-outline-secondary">Back to Orders</a>
            </div>
        </div>

        <div class="row g-3">
            <div class="col-md-6">
                <div class="card-box">
                    <h6 class="mb-3">Order Information</h6>
                    <div class="meta-row">
                        <div class="meta-item">
                            <div class="label">Order ID</div>
                            <div class="value">{{ $order->oderid }}</div>
                        </div>
                        <div class="meta-item">
                            <div class="label">Total Price</div>
                            <div class="value">${{ number_format($order->total_price, 2) }}</div>
                        </div>
                        <div class="meta-item">
                            <div class="label">Payment Method</div>
                            <div class="value text-capitalize">{{ $order->payment_method }}</div>
                        </div>
                        <div class="meta-item">
                            <div class="label">Payment Status</div>
                            <div class="value">{{ $order->payment_status }}</div>
                        </div>
                        <div class="meta-item">
                            <div class="label">Order Status</div>
                            <div class="value">{{ $order->order_status }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card-box">
                    <h6 class="mb-3">Customer & Shipping</h6>
                    <div class="label">Name</div>
                    <div class="value">{{ $order->name }}</div>
                    <div class="label mt-2">Contact</div>
                    <div class="value">{{ $order->email }} • {{ $order->phone }}</div>
                    <div class="label mt-2">Address</div>
                    <div class="value">{{ $order->address }}, {{ $order->city }}</div>
                </div>
            </div>

            <div class="col-12">
                <div class="card-box">
                    <h6 class="mb-3">Products</h6>
                    <p class="text-muted">Listed product identifiers (stored in `productId`). If your controller passes
                        related products, they will show here.</p>

                    @if (isset($products) && count($products))
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th class="text-end">Qty</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $p)
                                        <tr>
                                            <td style="width:64px"><img
                                                    src="{{ $p->thumb ?? '/images/placeholder.png' }}"
                                                    style="width:64px;height:48px;object-fit:cover;border-radius:8px;border:1px solid #E5E7EB">
                                            </td>
                                            <td>{{ $p->name }}</td>
                                            <td>${{ number_format($p->new_price ?? ($p->price ?? 0), 2) }}</td>
                                            <td class="text-end">{{ $p->pivot->quantity ?? 1 }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <pre class="small bg-light p-3">{{ $order->productId }}</pre>
                    @endif
                </div>
            </div>
        </div>

    </div>

</x-dashboard-layout.main>
