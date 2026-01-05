<x-admin>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label fw-semibold">Full Name</label>
            <input type="text" class="form-control" placeholder="Admin Name">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Email Address</label>
            <input type="email" class="form-control" placeholder="admin@bikemart.com">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" class="form-control" placeholder="••••••••">
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Confirm Password</label>
            <input type="password" class="form-control" placeholder="••••••••">
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox">
                <label class="form-check-label">
                    I agree to the Terms & Conditions
                </label>
            </div>
        </div>

        <button class="btn btn-primary w-100 py-2 fw-bold">
            Create Admin Account
        </button>

        <div class="text-center mt-3">
            <small class="text-muted">
                Already have an account?
                <a href="{{ route('login') }}" class="text-warning text-decoration-none fw-semibold">
                    Login
                </a>
            </small>
        </div>
    </form>

</x-admin>
