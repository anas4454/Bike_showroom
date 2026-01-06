<!-- Collection index design (plain HTML placeholders + embedded CSS matching site style) -->
<x-dashboard-layout.main>
<style>
	:root{--muted:#6B7280;--border:#E5E7EB;--bg:#F9FAFB;--accent:#F59E0B}
	.content{padding:24px;background:var(--bg)}
	.card-box{background:#fff;border:1px solid var(--border);border-radius:14px;padding:20px}
	h2{font-size:18px;margin:0 0 6px}
	.text-muted{color:var(--muted)}
	.btn{padding:.45rem .75rem;border-radius:8px;text-decoration:none;display:inline-block}
	.btn-warning{background:var(--accent);color:#fff;border:none}
	.btn-outline-secondary{background:#fff;border:1px solid var(--border);color:#111}
	.table{width:100%;border-collapse:collapse}
	.table th,.table td{padding:10px;border-bottom:1px solid #F1F5F9;text-align:left}
	.text-end{text-align:right}
</style>

<div class="content">

	<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
		<div>
			<h2>Collections</h2>
			<p class="text-muted">Organize products into collections</p>
		</div>
		<div>
			<a href="{{ route('dashboard.collections.create') }}" class="btn btn-warning">Add Collection</a>
		</div>
	</div>

	<div class="card-box">
		<table class="table">
			<thead>
				<tr>
					<th>Title</th>
					<th>Products</th>
					<th class="text-end">Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Summer Specials</td>
					<td>12</td>
					<td class="text-end">
						<a href="{{ route('dashboard.collections.show') }}" class="btn btn-sm btn-outline-secondary">View</a>
						<a href="{{ route('dashboard.collections.edit') }}" class="btn btn-sm btn-outline-warning">Edit</a>
						<a href="{{ route('dashboard.collections.delete') }}" class="btn btn-sm btn-danger">Delete</a>
					</td>
				</tr>
				<tr>
					<td>New Arrivals</td>
					<td>8</td>
					<td class="text-end">
						<a href="#" class="btn btn-sm btn-outline-secondary">View</a>
						<a href="#" class="btn btn-sm btn-outline-warning">Edit</a>
						<a href="#" class="btn btn-sm btn-danger">Delete</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

</div>

</x-dashboard-layout.main>
