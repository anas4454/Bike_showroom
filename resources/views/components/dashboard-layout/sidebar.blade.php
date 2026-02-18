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

        <a href="{{ route('dashboard') }}" class="nav-link @if (Route::currentRouteName() == 'dashboard') active @endif">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
        </a>

        <a href="{{ route('dashboard.products') }}" class="nav-link @if (Route::currentRouteName() == 'dashboard.products') active @endif">
            <i class="bi bi-box"></i>
            <span>Products</span>
        </a>

        <a href="{{ route('dashboard.categories') }}" class="nav-link @if (Route::currentRouteName() == 'dashboard.categories') active @endif">
            <i class="bi bi-tags"></i>
            <span>Categories</span>
        </a>

        <a href="{{ route('dashboard.collections') }}" class="nav-link @if (Route::currentRouteName() == 'dashboard.collections') active @endif">
            <i class="bi bi-layers"></i>
            <span>Collections</span>
        </a>

        <a href="{{ route('dashboard.orders') }}"
            class="nav-link @if (Route::currentRouteName() == 'dashboard.orders') active @endif">
            <i class="bi bi-receipt"></i>
            <span>Orders</span>
        </a>

        <a href="{{ route('dashboard.payments') }}" class="nav-link @if (Route::currentRouteName() == 'dashboard.payments') active @endif">
            <i class="bi bi-credit-card"></i>
            <span>Payments</span>
        </a>

        <a href="{{ route('dashboard.users') }}" class="nav-link @if (Route::currentRouteName() == 'dashboard.users') active @endif">
            <i class="bi bi-people"></i>
            <span>Users</span>
        </a>

    </nav>

    <!-- Footer -->
    <div class="sidebar-footer">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit"
                class="w-full text-center block px-2 py-1 text-sm text-red-600 border-0 bg-transparent">
                Logout->
            </button>
        </form>
    </div>

</aside>
