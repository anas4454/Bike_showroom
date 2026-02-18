<x-user-layout.main>

     <div class="main">
        <header class="header">
            <div class="header-left">
                <h2>Dashboard</h2>
                <p>Welcome back — view and manage your account</p>
            </div>
            <div class="header-right d-flex align-items-center">
                <div class="me-3">
                    <div
                        style="background:#F1F5F9;padding:8px 12px;border-radius:10px;color:var(--muted);font-size:13px">
                        Search</div>
                </div>
                <div class="d-flex align-items-center"
                    style="gap:12px; padding-left:14px; border-left:1px solid var(--border)">
                    <div
                        style="width:36px;height:36px;border-radius:10px;background:linear-gradient(135deg,#F59E0B,#FBBF24);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:600">
                        U</div>
                </div>
            </div>
        </header>

        <main class="content">
            <div class="row g-4">
                <div class="col-12 col-md-8">
                    <div class="card">
                        <h5 style="margin-top:0; color:var(--muted); font-size:13px">Overview</h5>
                        <h3 style="margin:6px 0 0;">Your activity</h3>
                        <p style="color:var(--muted); margin-top:12px">This panel is intentionally left component-free —
                            add your widgets here later.</p>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card">
                        <h6 style="color:var(--muted); font-size:12px;margin:0">Account</h6>
                        <div style="margin-top:14px; display:flex; gap:10px; align-items:center">
                            <div
                                style="width:46px;height:46px;border-radius:10px;background:linear-gradient(135deg,#F59E0B,#FBBF24);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:600">
                                U</div>
                            <div>
                                <div style="font-weight:600">{{ auth()->user()->name ?? 'User' }}</div>
                                <div style="color:var(--muted); font-size:13px">Member since
                                    {{ auth()->user()->created_at?->format('M Y') ?? '-' }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div class="content">

            <div class="card-box mb-3">
                <h6>Account</h6>
                <h3>My Orders</h3>
            </div>

            <div class="card-box">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">Order #</th>
                                <th scope="col">Date</th>
                                <th scope="col">Items</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($orders ?? [] as $order)
                                <tr>
                                    <td>#{{ $order->id }}</td>
                                    <td>{{ optional($order->created_at)->format('Y-m-d') }}</td>
                                    <td>{{ $order->items_count ?? ($order->products->count() ?? 0) }}</td>
                                    <td>${{ number_format($order->total ?? 0, 2) }}</td>
                                    <td>
                                        @php
                                            $status = $order->status ?? 'unknown';
                                        @endphp
                                        @if ($status === 'pending')
                                            <span class="badge bg-warning text-dark">Pending</span>
                                        @elseif($status === 'processing')
                                            <span class="badge bg-info text-dark">Processing</span>
                                        @elseif($status === 'completed')
                                            <span class="badge bg-success">Completed</span>
                                        @elseif($status === 'cancelled')
                                            <span class="badge bg-secondary">Cancelled</span>
                                        @else
                                            <span class="badge bg-light text-dark">{{ ucfirst($status) }}</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <a href="{{ route('orders.show', $order->id) }}"
                                            class="btn btn-sm btn-outline-primary">View</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted">You have not placed any orders
                                        yet.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </div>




        <footer
            style="height:48px;padding:0 24px;background:#fff;border-top:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;color:var(--muted);">
            <div>© {{ date('Y') }} Bike Mart</div>
            <div>Need help? <a href="#">Contact</a></div>
        </footer>
    </div>


</x-user-layout.main>
