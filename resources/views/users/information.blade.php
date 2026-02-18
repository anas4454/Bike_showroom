
<x-user-layout.main>
    <style>
        :root{--muted:#6B7280;--border:#E5E7EB;--bg:#F9FAFB;--accent:#F59E0B}
        .content{padding:24px;background:var(--bg)}
        .card-box{background:#fff;border:1px solid var(--border);border-radius:14px;padding:20px;margin-bottom:24px}
        .dashboard-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:24px}
        .dashboard-header .user-info{display:flex;align-items:center;gap:16px}
        .dashboard-header .user-avatar{width:46px;height:46px;border-radius:10px;background:linear-gradient(135deg,#F59E0B,#FBBF24);display:flex;align-items:center;justify-content:center;color:#fff;font-weight:600;font-size:22px}
        .dashboard-header .user-details{font-weight:600}
        .row{display:flex;flex-wrap:wrap;gap:16px}
        .col-md-6{flex:0 0 48%}
        .col-md-4{flex:0 0 31%}
        .col-12{flex:0 0 100%}
        .form-label{font-size:13px;margin-bottom:6px;display:block}
        .form-control{width:100%;padding:.55rem .75rem;border:1px solid #E6E9EE;border-radius:8px;background:#F9FAFB}
        @media (max-width: 900px) {
            .row{gap:8px}
            .col-md-6,.col-md-4{flex:0 0 100%}
        }
    </style>
    <div class="main">
          <main class="content">
            <div class="row g-4 d-flex">
                <div class="col-12 col-md-8 col-lg-7 ">
                    <div class="card">
                        <h5 style="margin-top:0; color:var(--muted); font-size:13px">Overview</h5>
                        <h3 style="margin:6px 0 0;">Your activity</h3>
                        <p style="color:var(--muted); margin-top:12px">This panel is intentionally left component-free —
                            add your widgets here later.</p>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-3">
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
        <main class="content">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="card-box">
                        <h5 style="margin-top:0;color:var(--muted);font-size:13px">User Information</h5>
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" value="{{ $user->name ?? '' }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control" value="{{ $user->email ?? '' }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Role</label>
                                    <input type="text" class="form-control" value="{{ $user->role ?? '' }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Email Verified At</label>
                                    <input type="text" class="form-control" value="{{ $user->email_verified_at ?? '' }}" readonly>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="card-box">
                        <h5 style="margin-top:0;color:var(--muted);font-size:13px">Login Information</h5>
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">IP Address</label>
                                    <input type="text" class="form-control" value="{{ $session->ip_address ?? '' }}" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">User Agent</label>
                                    <input type="text" class="form-control" value="{{ $session->user_agent ?? '' }}" readonly>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-box">
                <h5 style="margin-top:0;color:var(--muted);font-size:13px">Checkout & Payment Information</h5>
                @if(isset($order))
                <form>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Order ID</label>
                            <input type="text" class="form-control" value="{{ $order->oderid ?? '' }}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Total Price</label>
                            <input type="text" class="form-control" value="{{ $order->total_price ?? '' }}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Order Status</label>
                            <input type="text" class="form-control" value="{{ $order->order_status ?? '' }}" readonly>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Payment Method</label>
                            <input type="text" class="form-control" value="{{ $order->payment_method ?? '' }}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Payment Status</label>
                            <input type="text" class="form-control" value="{{ $order->payment_status ?? '' }}" readonly>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control" value="{{ $order->address ?? '' }}" readonly>
                        </div>
                    </div>
                </form>
                @else
                    <p style="color:var(--muted);margin-top:12px">No order information available.</p>
                @endif
            </div>
        </main>
        <footer style="height:48px;padding:0 24px;background:#fff;border-top:1px solid var(--border);display:flex;align-items:center;justify-content:space-between;color:var(--muted);margin-top:24px">
            <div>© {{ date('Y') }} Bike Mart</div>
            <div>Need help? <a href="#">Contact</a></div>
        </footer>
    </div>
</x-user-layout.main>
