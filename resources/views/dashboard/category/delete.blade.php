<!-- Category delete confirmation design (plain HTML placeholders + local CSS) -->
<x-dashboard-layout.main>
<style>
	:root{--muted:#6B7280;--border:#E5E7EB;--bg:#F9FAFB;--accent:#F59E0B}
	.content{padding:24px;background:var(--bg)}
	.card-box{background:#fff;border:1px solid var(--border);border-radius:14px;padding:20px}
	h2{font-size:18px;margin:0 0 6px}
	.text-muted{color:var(--muted)}
	.btn{padding:.45rem .75rem;border-radius:8px;text-decoration:none;display:inline-block}
	.btn-outline-secondary{background:#fff;border:1px solid var(--border);color:#111}
	.btn-danger{background:#EF4444;color:#fff;border:none;padding:.45rem .75rem;border-radius:8px}
</style>

<div class="content">

	<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
		<div>
			<h2>Delete Category</h2>
			<p class="text-muted">Confirm deletion</p>
		</div>
		<div>
			<a href="{{ route('dashboard.category.index') }}" class="btn btn-outline-secondary">Back</a>
		</div>
	</div>

	<div class="card-box">
		<p>Are you sure you want to delete <strong>Sports</strong>? This action cannot be undone.</p>

		<div style="margin-top:12px">
			<button class="btn-danger">Yes, delete</button>
			<a href="#" class="btn btn-outline-secondary" style="margin-left:8px">Cancel</a>
		</div>
	</div>

</div>


</x-dashboard-layout.main>
