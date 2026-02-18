 <aside class="sidebar">
        <div class="brand">
            <div class="logo"><i class="bi bi-bicycle"></i></div>
            <div>
                <h4>Bike Mart</h4>
                <span>User</span>
            </div>
        </div>

        <nav class="nav">
            <a href="{{ route('users.index') }}" class=" @if (Route::currentRouteName ()=='users.index') active @endif"><span class="menu-icon"><i class="bi bi-speedometer2"></i></span>
                Dashboard</a>
            <a href="{{ route('users.information') }}" class=" @if (Route::currentRouteName()=='users.information') active @endif"><span class="menu-icon"><i class="bi bi-person"></i></span> Profile Information</a>
        </nav>

        <div class="footer">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="logout" style="border:0; background:transparent; cursor:pointer; display:block; width:100%; text-align:center; padding:8px 8px; font-size:13px;">
                    Logout->
                </button>
            </form>
        </div>
    </aside>
