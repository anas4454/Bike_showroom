<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login | Bike Mart</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="asset/css/style.css" rel="stylesheet">

<style>
.admin-bg {
  min-height: 100vh;
  background: linear-gradient(135deg, #0B1C2D, #1F3A5F);
}
.admin-card {
  border-radius: 15px;
  padding: 40px;
  background: #F9FAFB;
}
.admin-logo {
  font-size: 28px;
  font-weight: 800;
  color: #0B1C2D;
}
.admin-logo span {
  color: #F59E0B;
}
.form-control {
  height: 48px;
}
</style>
</head>

<body>

<div class="admin-bg d-flex align-items-center justify-content-center">
  <div class="col-md-4 col-sm-10">

    <div class="admin-card shadow-lg">

      <!-- Logo -->
      <div class="text-center mb-4">
        <div class="admin-logo">BIKE <span>MART</span></div>
        <small class="text-muted">Admin Panel Login</small>
      </div>

      <!-- Login Form -->
    {{ $slot }}

      <!-- Footer -->
      <div class="text-center mt-4">
        <small class="text-muted">
          © 2026 Bike Mart Admin Panel
        </small>
      </div>

    </div>

  </div>
</div>

</body>
</html>
