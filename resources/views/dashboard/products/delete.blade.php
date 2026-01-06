<!-- Delete confirmation design (plain HTML placeholders) -->
<x-dashboard-layout.main>

<style>
    /* PAGE TITLE */
.content h2 {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 2px;
    color: #0F172A;
}

.content p.text-muted {
    font-size: 12px;
    margin-bottom: 0;
    color: #6B7280;
}

/* CARD CONTAINER */
.card-box {
    background: #FFFFFF;
    border: 1px solid #E5E7EB;
    border-radius: 14px;
    padding: 22px;
    max-width: 520px;
}

/* CONFIRM TEXT */
.card-box p {
    font-size: 13px;
    color: #374151;
    margin-bottom: 20px;
    line-height: 1.6;
}

/* BUTTONS */
.card-box .btn {
    font-size: 12.5px;
    padding: 6px 16px;
    border-radius: 10px;
    font-weight: 500;
}

/* DELETE BUTTON */
.card-box .btn-danger {
    background: #EF4444;
    border-color: #EF4444;
}

.card-box .btn-danger:hover {
    background: #DC2626;
    border-color: #DC2626;
}

/* SECONDARY BUTTON */
.card-box .btn-outline-secondary {
    border-color: #CBD5E1;
    color: #334155;
}

.card-box .btn-outline-secondary:hover {
    background: #F1F5F9;
}

</style>

<div class="content">

	<div class="d-flex justify-content-between align-items-center mb-3">
		<div>
			<h2>Delete Product</h2>
			<p class="text-muted">Confirm deletion</p>
		</div>

		<div>
			<a href="{{ route('dashboard.products.index') }}" class="btn btn-outline-secondary">Back</a>
		</div>
	</div>

	<div class="card-box">
		<p>Are you sure you want to delete <strong>Yamaha R6</strong>? This action cannot be undone.</p>

		<form action="#" method="POST" class="d-inline">
			<button class="btn btn-danger">Yes, delete</button>
		</form>

		<a href="#" class="btn btn-outline-secondary ms-2">Cancel</a>
	</div>

</div>


</x-dashboard-layout.main>
