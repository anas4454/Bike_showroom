<!-- Collection details design (plain HTML placeholders + embedded CSS) -->
<x-dashboard-layout.main>

<style>
	:root{--muted:#6B7280;--border:#E5E7EB;--bg:#F9FAFB;--accent:#F59E0B}
	.content{padding:24px;background:var(--bg)}
	.card-box{background:#fff;border:1px solid var(--border);border-radius:14px;padding:20px}
	h2{font-size:18px;margin:0 0 6px}
	.text-muted{color:var(--muted)}
	.btn{padding:.45rem .75rem;border-radius:8px;text-decoration:none;display:inline-block}
	.btn-outline-secondary{background:#fff;border:1px solid var(--border);color:#111}
</style>

<div class="content">

	<div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
		<div>
			<h2>Collection Details</h2>
			<p class="text-muted">Overview of this collection</p>
		</div>
		<div>
			<a href="{{ route('dashboard.collection.index') }}" class="btn btn-outline-secondary">Back</a>
		</div>
	</div>

	<div class="card-box">
		<h3>Summer Specials</h3>
		<p class="text-muted">A curated selection of summer-ready bikes and gear.</p>

		<div style="margin-top:12px">
			<a href="#" class="btn btn-outline-secondary">Edit</a>
			<a href="#" class="btn btn-danger">Delete</a>
		</div>
	</div>

</div>

</x-dashboard-layout.main>
