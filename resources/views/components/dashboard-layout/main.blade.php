
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | Bike Mart</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        :root {
            --sidebar-bg: #0B1C2D;
            --sidebar-soft: #102A43;
            --accent: #F59E0B;
            --muted: #6B7280;
            --border: #E5E7EB;
            --bg: #F9FAFB;
        }

        body {
            margin: 0;
            background: var(--bg);
            font-family: 'Inter', sans-serif;
        }

        /* ========== SIDEBAR ========== */
        .sidebar {
            width: 220px;
            height: 100vh;
            background: linear-gradient(180deg, var(--sidebar-bg), var(--sidebar-soft));
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
        }

        .sidebar-brand {
            display: flex;
            gap: 12px;
            padding: 18px;
            border-bottom: 1px solid rgba(255,255,255,0.06);
        }

        .logo-box {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: rgba(245,158,11,.15);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-title {
            font-size: 14px;
            font-weight: 600;
            color: #fff;
        }

        .brand-subtitle {
            font-size: 11px;
            color: #9CA3AF;
        }

        .sidebar-nav {
            padding: 14px;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .nav-link {
            display: flex;
            gap: 12px;
            padding: 10px 12px;
            border-radius: 10px;
            font-size: 13px;
            color: #9CA3AF;
            text-decoration: none;
        }
         .nav-link:hover{
            color: #e1e4ea;
         }

        .nav-link.active {
            background: rgba(245, 159, 11, 0.212);
            color: var(--accent);
        }

        .sidebar-footer {
            margin-top: auto;
            padding: 16px;
        }

        .logout-btn {
            font-size: 13px;
            color: #F87171;
            text-decoration: none;
        }

        /* ========== MAIN LAYOUT ========== */
        .main {
            margin-left: 220px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ========== HEADER ========== */
        .header {
            height: 64px;
            padding: 0 24px;
            background: #fff;
            border-bottom: 1px solid var(--border);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h2 {
            font-size: 16px;
            font-weight: 600;
            margin: 0;
        }

        .header p {
            font-size: 12px;
            margin: 2px 0 0;
            color: var(--muted);
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .search {
            display: flex;
            gap: 8px;
            padding: 7px 12px;
            background: #F1F5F9;
            border-radius: 10px;
            font-size: 12px;
        }

        .search input {
            border: none;
            outline: none;
            background: transparent;
        }

        .icon-btn {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            background: #F1F5F9;
            border: none;
        }

        .profile {
            display: flex;
            gap: 10px;
            padding-left: 14px;
            border-left: 1px solid var(--border);
        }

        .avatar {
            width: 32px;
            height: 32px;
            border-radius: 10px;
            background: linear-gradient(135deg, #F59E0B, #FBBF24);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 600;
        }

        /* ========== CONTENT ========== */
        .content {
            padding: 24px;
            flex-grow: 1;
        }

        .card-box {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 20px;
        }

        .card-box h6 {
            font-size: 12px;
            color: var(--muted);
        }

        .card-box h3 {
            font-size: 18px;
            font-weight: 600;
        }

        /* ========== FOOTER ========== */
        .footer {
            height: 48px;
            padding: 0 24px;
            background: #fff;
            border-top: 1px solid var(--border);
            font-size: 11.5px;
            color: var(--muted);
            display: flex;
            align-items: center;
            justify-content: space-between;


        }
    </style>
</head>

<body>

<!-- SIDEBAR -->
{{-- <aside class="sidebar">
    <div class="sidebar-brand">
        <div class="logo-box"><i class="bi bi-bicycle"></i></div>
        <div>
            <div class="brand-title">Bike Mart</div>
            <div class="brand-subtitle">Admin</div>
        </div>
    </div>

    <nav class="sidebar-nav">
        <a class="nav-link active"><i class="bi bi-grid"></i>Dashboard</a>
        <a class="nav-link"><i class="bi bi-box"></i>Products</a>
        <a class="nav-link"><i class="bi bi-credit-card"></i>Payments</a>
    </nav>

    <div class="sidebar-footer">
        <a class="logout-btn"><i class="bi bi-box-arrow-right"></i> Logout</a>
    </div>
</aside> --}}

<x-dashboard-layout.sidebar/>

<!-- MAIN -->
<div class="main">

    <!-- HEADER -->
    <x-dashboard-layout.header/>

    <!-- CONTENT -->

    {{ $slot }}

    <!-- FOOTER -->
    <x-dashboard-layout.footer/>

</div>

</body>
</html>
