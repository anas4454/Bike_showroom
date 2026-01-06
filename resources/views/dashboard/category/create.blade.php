<!-- Category create design (plain HTML placeholders + local CSS matching product pages) -->
<x-dashboard-layout.main>

    <style>
        :root {
            --muted: #6B7280;
            --border: #E5E7EB;
            --bg: #F9FAFB;
            --accent: #F59E0B
        }

        .content {
            padding: 24px;
            background: var(--bg)
        }

        .card-box {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 20px
        }

        h2 {
            font-size: 18px;
            margin: 0 0 6px
        }

        .text-muted {
            color: var(--muted)
        }

        .form-label {
            font-size: 13px;
            margin-bottom: 6px;
            display: block
        }

        .form-control,
        .form-select {
            width: 100%;
            padding: .55rem .75rem;
            border: 1px solid #E6E9EE;
            border-radius: 8px
        }

        .btn {
            padding: .45rem .75rem;
            border-radius: 8px;
            text-decoration: none;
            display: inline-block
        }

        .btn-warning {
            background: var(--accent);
            color: #fff;
            border: none
        }

        .btn-outline-secondary {
            background: #fff;
            border: 1px solid var(--border);
            color: #111
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 12px
        }

        .col-md-6 {
            flex: 0 0 48%
        }

        .col-12 {
            flex: 0 0 100%
        }

        .text-end {
            text-align: right
        }
    </style>

    <div class="content">

        <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:16px">
            <div>
                <h2>Create Category</h2>
                <p class="text-muted">Add a new category</p>
            </div>
            <div>
                <a href="{{ route('dashboard.category.index') }}" class="btn btn-outline-secondary">Back</a>
            </div>
        </div>

        <div class="card-box">
            <form action="#" method="POST">

                <div class="row">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input class="form-control" name="name" placeholder="Category name" />
                    </div>

                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea class="form-control" name="description" rows="3" placeholder="Short description"></textarea>
                    </div>

                    <div class="col-12 text-end" style="margin-top:12px">
                        <button type="button" class="btn btn-outline-secondary">Cancel</button>
                        <button type="submit" class="btn btn-warning">Create category</button>
                    </div>
                </div>

            </form>
        </div>

    </div>


</x-dashboard-layout.main>
