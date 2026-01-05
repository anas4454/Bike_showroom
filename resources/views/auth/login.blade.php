<x-admin>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form action="{{ route('login.post') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label fw-semibold">Email Address</label>
          <input type="email" class="form-control" placeholder="admin@bikemart.com">
          @error("email")
            <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="mb-3">
          <label class="form-label fw-semibold">Password</label>
          <input type="password" class="form-control" placeholder="••••••••">
            @error("password")
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">Remember me</label>
          </div>
          <a href="#" class="text-decoration-none text-warning">Forgot password?</a>
        </div>

        <button class="btn btn-primary w-100 py-2 fw-bold">
          Login to Dashboard
        </button>
      </form>
</x-admin>
