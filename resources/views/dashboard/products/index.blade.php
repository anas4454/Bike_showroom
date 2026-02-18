<!-- Products index design (plain HTML placeholders) -->
<x-dashboard-layout.main>

    <style>
        /* PAGE TITLE */
        .content h2 {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 2px;
            color: #0F172A;
        }

        .content p {
            font-size: 12px;
            color: #6B7280;
            margin-bottom: 0;
        }

        /* ADD PRODUCT BUTTON */
        .content .btn-warning {
            font-size: 12.5px;
            font-weight: 500;
            padding: 6px 14px;
            border-radius: 10px;
        }

        /* CARD CONTAINER */
        .card-box {
            background: #FFFFFF;
            border: 1px solid #E5E7EB;
            border-radius: 14px;
            padding: 0;
            overflow: hidden;
        }

        /* TABLE */
        .table {
            margin: 0;
        }

        .table thead {
            background: #F9FAFB;
        }

        .table thead th {
            font-size: 11.5px;
            font-weight: 600;
            color: #6B7280;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            border-bottom: 1px solid #E5E7EB;
            padding: 12px 16px;
        }

        .table tbody td {
            font-size: 12.5px;
            color: #0F172A;
            padding: 14px 16px;
            border-top: 1px solid #F1F5F9;
            vertical-align: middle;
        }

        /* ROW HOVER */
        .table tbody tr:hover {
            background: #F9FAFB;
        }

        /* PRODUCT IMAGE */
        .table img {
            width: 48px;
            height: 48px;
            object-fit: cover;
            border-radius: 10px;
            border: 1px solid #E5E7EB;
        }

        /* ACTION BUTTONS */
        .table .btn {
            font-size: 11.5px;
            padding: 5px 10px;
            border-radius: 8px;
        }

        .table .btn-outline-secondary {
            color: #334155;
            border-color: #CBD5E1;
        }

        .table .btn-outline-warning {
            color: #F59E0B;
            border-color: #FCD34D;
        }

        .table .btn-danger {
            background: #EF4444;
            border-color: #EF4444;
        }

        /* END ROW */
        .table tbody tr:last-child td {
            font-size: 11.5px;
            color: #9CA3AF;
            text-align: center;
            padding: 16px;
        }

        /* RESPONSIVE FIX */
        .table-responsive {
            overflow-x: auto;
        }
    </style>

    <div class="content">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h2>Products</h2>
                <p class="text-muted">Manage your product catalog</p>
            </div>

            <div>
                <a href="{{ route('dashboard.products.create') }}" class="btn btn-warning">Add Product</a>
            </div>
        </div>

        <div class="card-box">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($products as $product)
                            <tr>
                                <td style="width:64px">
                                    {{-- <img src="{{ asset('storage/' . $product->image->image_url) }}"> --}}
                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>${{ number_format($product->new_price, 2) }}</td>
                                <td class="text-end">
                                    <a href="{{ route('dashboard.products.show', $product) }}"
                                        class="btn btn-sm btn-outline-secondary">View</a>
                                    <a href="{{ route('dashboard.products.edit', $product) }}"
                                        class="btn btn-sm btn-outline-warning">Edit</a>
                                    <a href="{{ route('dashboard.products.delete', $product) }}"
                                        class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                        {{-- <tr>
						<td style="width:64px">
							<img src="/images/placeholder.png" alt="" class="img-fluid rounded" style="max-width:64px">
						</td>
						<td>Honda CBR</td>
						<td>Sports</td>
						<td>$9,750.00</td>
						<td class="text-end">
							<a href="#" class="btn btn-sm btn-outline-secondary">View</a>
							<a href="#" class="btn btn-sm btn-outline-warning">Edit</a>
							<a href="#" class="btn btn-sm btn-danger">Delete</a>
						</td>
					</tr> --}}
                        <tr>
                            <td colspan="5" class="text-muted">End of sample rows.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>


</x-dashboard-layout.main>
