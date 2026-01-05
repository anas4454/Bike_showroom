<x-admin>
  <form>
  <div class="mb-3">
    <label class="form-label fw-semibold">New Password</label>
    <input
      type="password"
      class="form-control"
      placeholder="••••••••"
      required
    >
  </div>

  <div class="mb-4">
    <label class="form-label fw-semibold">Confirm New Password</label>
    <input
      type="password"
      class="form-control"
      placeholder="••••••••"
      required
    >
    <small class="text-muted">
      Make sure both passwords match.
    </small>
  </div>

  <button class="btn btn-primary w-100 py-2 fw-bold">
    Reset Password
  </button>

  <div class="text-center mt-3">
    <small class="text-muted">
      Remember your password?
      <a href="admin-login.html" class="text-warning text-decoration-none fw-semibold">
        Back to Login
      </a>
    </small>
  </div>
</form>

</x-admin>
