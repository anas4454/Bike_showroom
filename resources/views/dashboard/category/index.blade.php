<!-- Category index design (plain HTML placeholders + local CSS matching product pages) -->
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
			<h2>Categories</h2>
			<p class="text-muted">Manage product categories</p>
		</div>
		<div>
			<a href="{{ route('dashboard.categories.create') }}" class="btn btn-warning">Add Category</a>
		</div>
	</div>

	<div class="card-box">
		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Description</th>
					<th class="text-end">Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Sports</td>
					<td>High performance and track-ready motorcycles</td>
					<td class="text-end">
						<a href="{{ route('dashboard.categories.show') }}" class="btn btn-sm btn-outline-secondary">View</a>
						<a href="{{ route('dashboard.categories.edit') }}" class="btn btn-sm btn-outline-warning">Edit</a>
						<a href="{{ route('dashboard.categories.delete') }}" class="btn btn-sm btn-danger">Delete</a>
					</td>
				</tr>
				<tr>
					<td>Touring</td>
					<td>Comfort-focused bikes for long distances</td>
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
