<aside class="sidebar">

    <!-- Brand -->
    <div class="sidebar-brand">
        <div class="logo-box">
            <i class="bi bi-bicycle"></i>
        </div>
        <div class="brand-text">
            <span class="brand-title">Bike Mart</span>
            <span class="brand-subtitle">Admin</span>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="sidebar-nav">

        <a href="{{ route('dashboard') }}" class="nav-link active">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('dashboard.products') }}" class="nav-link">
            <i class="bi bi-box"></i>
            <span>Products</span>
        </a>

        <a href="{{ route('dashboard.categories') }}" class="nav-link">
            <i class="bi bi-tags"></i>
            <span>Categories</span>
        </a>

        <a href="{{ route('dashboard.collections') }}" class="nav-link">
            <i class="bi bi-layers"></i>
            <span>Collections</span>
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-receipt"></i>
            <span>Orders</span>
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-credit-card"></i>
            <span>Payments</span>
        </a>

        <a href="#" class="nav-link">
            <i class="bi bi-people"></i>
            <span>Users</span>
        </a>

    </nav>

    <!-- Footer -->
    <div class="sidebar-footer">
        <a href="#" class="logout-btn">
            <i class="bi bi-box-arrow-right"></i>
            <span>Logout</span>
        </a>
    </div>

</aside>
