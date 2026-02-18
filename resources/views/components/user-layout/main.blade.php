<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Dashboard | Bike Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
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
            font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background: var(--bg);
        }

        .sidebar {
            width: 220px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            flex-direction: column;
            background: linear-gradient(180deg, var(--sidebar-bg), var(--sidebar-soft));
        }

        .sidebar .brand {
            display: flex;
            gap: 12px;
            align-items: center;
            padding: 18px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
        }

        .logo {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: rgba(245, 158, 11, .15);
            color: var(--accent);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand h4 {
            margin: 0;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
        }

        .brand span {
            display: block;
            color: #9CA3AF;
            font-size: 11px;
        }

        .nav {
            padding: 14px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .nav a {
            display: flex;
            gap: 10px;
            align-items: center;
            padding: 10px 12px;
            border-radius: 10px;
            color: #9CA3AF;
            text-decoration: none;
            font-size: 13px;
        }

        .nav a:hover {
            color: #e1e4ea;
        }

        .nav a.active {
            background: rgba(245, 159, 11, 0.212);
            color: var(--accent);
        }

        .sidebar .footer {
            margin-top: auto;
            padding: 16px;
        }

        .logout {
            color: #F87171;
            text-decoration: none;
            font-size: 13px;
        }

        .main {
            margin-left: 220px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header.header {
            height: 64px;
            padding: 0 24px;
            background: #fff;
            border-bottom: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header-left h2 {
            margin: 0;
            font-size: 16px;
            font-weight: 600;
        }

        .header-left p {
            margin: 2px 0 0;
            color: var(--muted);
            font-size: 12px;
        }

        .content {
            padding: 24px;
            flex: 1;
        }

        .card {
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 20px;
        }

        /* small helpers */
        .menu-icon {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: transparent;
            color: inherit;
        }
    </style>
</head>

<body>

   <x-user-layout.sidebar/>

   {{ $slot }}

</body>

</html>
