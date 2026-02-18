<!-- Create product design (plain HTML placeholders + local CSS to match dashboard) -->
<x-dashboard-layout.main>

<style>
	/* Local styles to match dashboard look and keep this file self-contained */
	:root{--muted:#6B7280;--border:#E5E7EB;--bg:#F9FAFB;--accent:#F59E0B}
	.content{padding:24px;background:var(--bg)}
	.card-box{background:#fff;border:1px solid var(--border);border-radius:14px;padding:20px}
	h2{font-size:18px;margin:0 0 6px}
	.text-muted{color:var(--muted)}
	.form-label{font-size:13px;margin-bottom:6px;display:block}
	.form-control,.form-select{width:100%;padding:.55rem .75rem;border:1px solid #E6E9EE;border-radius:8px}
	.btn{padding:.45rem .75rem;border-radius:8px;text-decoration:none;display:inline-block}
	.btn-warning{background:var(--accent);color:#fff;border:none}
	.btn-outline-secondary{background:#fff;border:1px solid var(--border);color:#111}
	.row{display:flex;flex-wrap:wrap;gap:12px}
	.col-md-6{flex:0 0 48%}
	.col-12{flex:0 0 100%}
	.text-end{text-align:right}
</style>


<div class="content">
	<div class="d-flex" style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
		<div>
			<h2>Create Product</h2>
			<p class="text-muted">Add a new product to your catalog</p>
		</div>
		<div>
			<a href="{{ route('dashboard.products') }}" class="btn btn-outline-secondary">Back</a>
		</div>
	</div>
	<div class="card-box">
		<form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="row">
				<div class="col-md-6">
					<label class="form-label">Name</label>
					<input class="form-control" name="name" placeholder="Enter product name" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Slug</label>
					<input class="form-control" name="slug" placeholder="Unique slug" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Old Price</label>
					<input class="form-control" name="old_price" placeholder="Old price" type="number" />
				</div>
				<div class="col-md-6">
					<label class="form-label">New Price</label>
					<input class="form-control" name="new_price" placeholder="New price" type="number" />
				</div>
				<div class="col-12">
					<label class="form-label">Description</label>
					<textarea class="form-control" name="description" rows="3" placeholder="Product description..."></textarea>
				</div>
				<div class="col-12">
					<label class="form-label">Excerpt</label>
					<input class="form-control" name="excerpt" placeholder="Short excerpt" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Category ID</label>
					<input class="form-control" name="category_id" placeholder="Category ID" type="number" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Brand</label>
					<input class="form-control" name="brand" placeholder="Brand name" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Condition</label>
					<input class="form-control" name="condition" placeholder="Condition" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Model Name</label>
					<input class="form-control" name="model_name" placeholder="Model name" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Bike Type</label>
					<input class="form-control" name="bike_type" placeholder="Bike type" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Launch Year</label>
					<input class="form-control" name="launch_year" placeholder="Launch year" />
				</div>
				<div class="col-md-6">
					<label class="form-label">No. of Cylinder</label>
					<input class="form-control" name="no_of_cylinder" placeholder="No. of cylinder" type="number" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Engine CC</label>
					<input class="form-control" name="engine_cc" placeholder="Engine CC" type="number" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Max Meter</label>
					<input class="form-control" name="max_meter" placeholder="Max meter" type="number" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Max Torque</label>
					<input class="form-control" name="max_torque" placeholder="Max torque" type="number" />
				</div>
				<div class="col-md-6">
					<label class="form-label">No. of Gear</label>
					<input class="form-control" name="no_of_gear" placeholder="No. of gear" type="number" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Tank Capacity</label>
					<input class="form-control" name="tank_capacity" placeholder="Tank capacity" type="number" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Milage</label>
					<input class="form-control" name="milage" placeholder="Milage" type="number" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Weight</label>
					<input class="form-control" name="weight" placeholder="Weight" type="number" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Break Type</label>
					<input class="form-control" name="break_type" placeholder="Break type" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Wheel Type</label>
					<input class="form-control" name="wheel_type" placeholder="Wheel type" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Tyre Type</label>
					<input class="form-control" name="tyre_type" placeholder="Tyre type" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Headlight</label>
					<input class="form-control" name="headlight" placeholder="Headlight" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Colors</label>
					<input class="form-control" name="colors" placeholder="Colors (comma separated)" />
				</div>
				<div class="col-md-6">
					<label class="form-label">Image</label>
					<input type="file" name="image" class="form-control" />
				</div>
				<div class="col-12 text-end" style="margin-top:12px">
					<button type="button" class="btn btn-outline-secondary">Cancel</button>
					<button type="submit" class="btn btn-warning">Create product</button>
				</div>
			</div>
		</form>
	</div>
</div>


</x-dashboard-layout.main>
