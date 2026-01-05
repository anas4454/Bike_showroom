<x-admin>
   <form>
  <div class="mb-4">
    <label class="form-label fw-semibold">Email Address</label>
    <input
      type="email"
      class="form-control"
      placeholder="admin@bikemart.com"
      required
    >
    <small class="text-muted">
      Enter your registered email and we’ll send you a password reset link.
    </small>
  </div>

  <button class="btn btn-primary w-100 py-2 fw-bold">
    Send Reset Link
  </button>

  <div class="text-center mt-3">
    <small class="text-muted">
      Remembered your password?
      <a href="admin-login.html" class="text-warning text-decoration-none fw-semibold">
        Back to Login
      </a>
    </small>
  </div>
</form>

</x-admin>
