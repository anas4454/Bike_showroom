<!-- Product details design (plain HTML placeholders) -->
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

        /* HEADER ACTIONS */
        .content .btn {
            font-size: 12.5px;
            padding: 6px 14px;
            border-radius: 10px;
            font-weight: 500;
        }

        /* CARD */
        .card-box {
            background: #FFFFFF;
            border: 1px solid #E5E7EB;
            border-radius: 14px;
            padding: 22px;
        }

        /* PRODUCT IMAGE */
        .card-box img {
            border-radius: 14px;
            border: 1px solid #E5E7EB;
        }

        /* PRODUCT TITLE */
        .card-box h3 {
            font-size: 17px;
            font-weight: 600;
            margin-bottom: 4px;
            color: #0F172A;
        }

        /* META TEXT */
        .card-box p.text-muted {
            font-size: 12.5px;
            color: #6B7280;
        }

        /* DESCRIPTION */
        .card-box p {
            font-size: 13px;
            color: #374151;
            line-height: 1.6;
        }

        /* ACTIONS */
        .card-box .btn-outline-secondary {
            border-color: #CBD5E1;
            color: #334155;
        }

        .card-box .btn-outline-secondary:hover {
            background: #F1F5F9;
        }

        /* DANGER BUTTON */
        .btn-danger {
            background: #EF4444;
            border-color: #EF4444;
        }

        .btn-danger:hover {
            background: #DC2626;
            border-color: #DC2626;
        }

        /* WARNING BUTTON */
        .btn-outline-warning {
            border-color: #FCD34D;
            color: #F59E0B;
        }

        .btn-outline-warning:hover {
            background: #FFFBEB;
        }
    </style>
    <div class="content">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div>
                <h2>Product Details</h2>
                <p class="text-muted">Overview of the product</p>
            </div>

            <div>
                <a href="#" class="btn btn-outline-warning">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </div>
        </div>

        <div class="card-box">
            <div class="row g-4">
                <div class="col-md-4">
                    <img src="{{ $product->images->first()->image_url }}" alt="Product image" class="img-fluid rounded w-100">
                </div>
                <div class="col-md-8">
                    <h3>{{ $product->name }}</h3>
                    <p class="text-muted">{{ $product->category->name }} • ${{ number_format($product->new_price, 2) }}</p>
                    <p style="margin-top:12px">A high-performance sport bike with modern ergonomics and race-inspired
                        handling. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                    <div class="mt-3">
                        <a href="{{ route('dashboard.products') }}" class="btn btn-outline-secondary">Back to list</a>
                    </div>
                </div>
            </div>
        </div>

    </div>


</x-dashboard-layout.main>
