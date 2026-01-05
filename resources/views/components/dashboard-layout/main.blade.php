<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard | Bike Mart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --midnight-blue: #0B1C2D;
            --steel-blue: #1F3A5F;
            --chrome-gray: #B8C1CC;
            --accent-orange: #F59E0B;
            --white-smoke: #F9FAFB;
        }

        body {
            margin: 0;
            background: var(--white-smoke);
            font-family: 'Segoe UI', sans-serif;
        }

        /* SIDEBAR */
        .sidebar {
            width: 260px;
            height: 100vh;
            background: #0B1C2D;
            position: fixed;
            /* 🔥 THIS WAS MISSING */
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
        }

        .sidebar-brand {
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-menu a,
        .sidebar-footer a {
            display: flex;
            align-items: center;
            padding: 14px 22px;
            color: #F9FAFB;
            text-decoration: none;
            font-weight: 500;
            transition: all .3s ease;
        }

        .sidebar-menu a:hover {
            background: #1F3A5F;
            /* Steel Blue */
        }

        .sidebar-menu a.active {
            background: #1F3A5F;
            border-left: 4px solid #F59E0B;
            /* Accent Orange */
        }

        .sidebar-footer a.logout {
            color: #F9FAFB;
            background: rgba(245, 158, 11, 0.1);
            border-radius: 8px;
        }

        .sidebar-footer a.logout:hover {
            background: #F59E0B;
            color: #0B1C2D;
        }


        /* MAIN CONTENT */
        .main-content {
            margin-left: 260px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* HEADER */
        .admin-header {
            background: linear-gradient(135deg, #0B1C2D, #1F3A5F);
            padding: 28px 32px;
            border-radius: 0 0 18px 18px;
            color: #F9FAFB;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .12);
        }

        .admin-header h2 {
            color: #F9FAFB;
        }

        .admin-header p {
            font-size: 14px;
        }

        .header-actions .btn {
            border-radius: 8px;
            font-weight: 500;
        }

        .admin-profile {
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 12px;
            border-radius: 10px;
        }

        .admin-avatar {
            width: 38px;
            height: 38px;
            background: #F59E0B;
            color: #0B1C2D;
            font-weight: 700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }


        /* CARDS */
        .stat-card {
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .08);
        }

        /* FOOTER */
        .admin-footer {
            background: #1F3A5F;
            /* Steel Blue */
            color: #F9FAFB;
            padding: 30px 25px;
            margin-top: 40px;
            border-top: 4px solid #F59E0B;
            /* Accent Orange */
        }

        .footer-brand {
            font-size: 18px;
            color: #F9FAFB;
        }

        .footer-brand span {
            color: #F59E0B;
        }

        .footer-text {
            font-size: 13px;
            color: #B8C1CC;
        }
    </style>
    <!-- styles here -->
</head>

<body>

    <!-- Sidebar -->
</x-dashboard-layout.sidebar>
    <!-- Main Content -->
    <div class="main-content">

        <!-- Bulky Header -->

</x-dashboard-layout.header>

        <!-- Dashboard Content -->
       {{ $slot }}
        <!-- Bulky Footer -->
</x-dashboard-layout.footer>

    </div>

</body>

</html>
