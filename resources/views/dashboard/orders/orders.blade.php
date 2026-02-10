<x-dashboard-layout.main>

	<style>
		.content h2{font-size:16px;font-weight:600;margin-bottom:2px;color:#0F172A}
		.content p{font-size:12px;color:#6B7280;margin-bottom:0}
		.card-box{background:#fff;border:1px solid #E5E7EB;border-radius:14px;padding:0;overflow:hidden}
		.table thead{background:#F9FAFB}
		.table thead th{font-size:11.5px;font-weight:600;color:#6B7280;text-transform:uppercase;letter-spacing:.04em;border-bottom:1px solid #E5E7EB;padding:12px 16px}
		.table tbody td{font-size:12.5px;color:#0F172A;padding:12px 16px;border-top:1px solid #F1F5F9;vertical-align:middle}
		.table tbody tr:hover{background:#F9FAFB}
		.badge-muted{background:#F1F5F9;color:#334155;padding:6px 8px;border-radius:8px;font-weight:600}
	</style>

	<div class="content">

		<div class="d-flex justify-content-between align-items-center mb-3">
			<div>
				<h2>Orders</h2>
				<p class="text-muted">Review customer orders and confirm fulfillment</p>
			</div>
		</div>

		<div class="card-box">
			<div class="table-responsive">
				<table class="table align-middle">
					<thead>
						<tr>
							<th>Order ID</th>
							<th>Customer</th>
							<th>Contact</th>
							<th>City</th>
							<th>Total</th>
							<th>Payment</th>
							<th>Payment Status</th>
							<th>Order Status</th>
							<th>Created</th>
							<th class="text-end">Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($orders as $order)
						<tr>
							<td>{{ $order->oderid }}</td>
							<td>{{ $order->name }}</td>
							<td>
								<div>{{ $order->email }}</div>
								<div class="text-muted small">{{ $order->phone }}</div>
							</td>
							<td>{{ $order->city }}</td>
							<td>${{ number_format($order->total_price,2) }}</td>
							<td class="text-capitalize">{{ $order->payment_method }}</td>
							<td>
								<span class="badge bg-light text-dark">{{ $order->payment_status }}</span>
							</td>
							<td>
								<span class="badge bg-warning text-dark">{{ $order->order_status }}</span>
							</td>
							<td>{{ $order->created_at->format('Y-m-d') }}</td>
							<td class="text-end">
								<a href="{{ route('dashboard.orders.detail', $order->id ?? $order->oderid) }}" class="btn btn-sm btn-outline-secondary">View</a>
							</td>
						</tr>

						<tr>
							<td colspan="10" class="text-muted">No orders found.</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

	</div>

</x-dashboard-layout.main>
