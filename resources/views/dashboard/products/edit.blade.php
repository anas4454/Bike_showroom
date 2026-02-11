<!-- Edit product design (plain HTML placeholders) -->
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

/* FORM CARD */
.card-box {
    background: #FFFFFF;
    border: 1px solid #E5E7EB;
    border-radius: 14px;
    padding: 22px;
}

/* LABELS */
.form-label {
    font-size: 12px;
    font-weight: 500;
    color: #374151;
    margin-bottom: 4px;
}

/* INPUTS */
.form-control,
.form-select {
    font-size: 12.5px;
    padding: 8px 12px;
    border-radius: 10px;
    border: 1px solid #CBD5E1;
}

/* INPUT FOCUS */
.form-control:focus,
.form-select:focus {
    border-color: #F59E0B;
    box-shadow: 0 0 0 2px rgba(245,158,11,.15);
}

/* TEXTAREA */
textarea.form-control {
    resize: vertical;
}

/* FILE INPUT */
input[type="file"].form-control {
    padding: 6px 10px;
}

/* BUTTONS */
.card-box .btn {
    font-size: 12.5px;
    padding: 6px 16px;
    border-radius: 10px;
    font-weight: 500;
}

/* SAVE BUTTON */
.btn-warning {
    background: #F59E0B;
    border-color: #F59E0B;
}

.btn-warning:hover {
    background: #D97706;
    border-color: #D97706;
}

/* SECONDARY BUTTON */
.btn-outline-secondary {
    border-color: #CBD5E1;
    color: #334155;
}

.btn-outline-secondary:hover {
    background: #F1F5F9;
}

/* FORM FOOTER ALIGNMENT */
.text-end {
    margin-top: 12px;
}

    </style>
<div class="content">

	<div class="d-flex justify-content-between align-items-center mb-3">
		<div>
			<h2>Edit Product</h2>
			<p class="text-muted">Make changes to product details</p>
		</div>

		<div>
			<a href="{{ route('dashboard.products') }}" class="btn btn-outline-secondary">Back</a>
		</div>
	</div>

	<div class="card-box">
		<form action="#" method="POST" enctype="multipart/form-data">

			<div class="row g-3">
				<div class="col-md-6">
					<label class="form-label">Name</label>
					<input name="name" class="form-control" value="Yamaha R6">
				</div>
				<div class="col-md-3">
					<label class="form-label">Price</label>
					<input name="price" class="form-control" value="$12499">
				</div>
				<div class="col-md-3">
					<label class="form-label">Category</label>
					<select name="category_id" class="form-select">
						<option value="">Select</option>
						<option selected>Sports</option>
						<option>Touring</option>
					</select>
				</div>

				<div class="col-12">
					<label class="form-label">Description</label>
					<textarea name="description" class="form-control" rows="4">A high-performance sport bike...</textarea>
				</div>

				<div class="col-md-6">
					<label class="form-label">Image</label>
					<input type="file" name="image" class="form-control">
				</div>

				<div class="col-12 text-end">
					<button type="button" class="btn btn-outline-secondary">Cancel</button>
					<button type="submit" class="btn btn-warning">Save changes</button>
				</div>
			</div>

		</form>
	</div>

</div>


</x-dashboard-layout.main>
