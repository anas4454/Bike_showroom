<x-dashboard-layout.main>

    <style>
        .activity-card {
            background: #FFFFFF;
            border: 1px solid #E5E7EB;
            border-radius: 14px;
            padding: 20px;
            margin-top: 24px;
        }

        .activity-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }

        .activity-header h6 {
            font-size: 13.5px;
            font-weight: 600;
            margin: 0;
            color: #0F172A;
        }

        .activity-sub {
            font-size: 11px;
            color: #6B7280;
        }

        .activity-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .activity-item {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 10px 0;
        }

        .activity-item:not(:last-child) {
            border-bottom: 1px solid #F1F5F9;
        }

        .activity-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
        }

        .activity-dot.success {
            background: #22C55E;
        }

        .activity-dot.info {
            background: #3B82F6;
        }

        .activity-dot.warning {
            background: #F59E0B;
        }

        .activity-dot.danger {
            background: #EF4444;
        }

        .activity-content {
            flex-grow: 1;
        }

        .activity-content p {
            font-size: 12.5px;
            font-weight: 500;
            margin: 0;
            color: #0F172A;
        }

        .activity-content small {
            font-size: 11px;
            color: #6B7280;
        }

        .activity-time {
            font-size: 11px;
            color: #9CA3AF;
            white-space: nowrap;
        }
    </style>

    <div class="container-fluid py-4">

        <!-- Stats -->
        <main class="content">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card-box">
                        <h6>Total Orders</h6>
                        <h3>1,248</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box">
                        <h6>Revenue</h6>
                        <h3>$48,920</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box">
                        <h6>Customers</h6>
                        <h3>612</h3>
                    </div>
                </div>
            </div>
        </main>

        <!-- Recent Activity -->
        <div class="activity-card">

            <div class="activity-header">
                <h6>Recent Activity</h6>
                <span class="activity-sub">Last 24 hours</span>
            </div>

            <ul class="activity-list">

                <li class="activity-item">
                    <span class="activity-dot success"></span>
                    <div class="activity-content">
                        <p>New product added</p>
                        <small>Yamaha R6</small>
                    </div>
                    <span class="activity-time">2h ago</span>
                </li>

                <li class="activity-item">
                    <span class="activity-dot info"></span>
                    <div class="activity-content">
                        <p>Order placed</p>
                        <small>Order #1023</small>
                    </div>
                    <span class="activity-time">5h ago</span>
                </li>

                <li class="activity-item">
                    <span class="activity-dot warning"></span>
                    <div class="activity-content">
                        <p>Category updated</p>
                        <small>Sports Bikes</small>
                    </div>
                    <span class="activity-time">Yesterday</span>
                </li>

                <li class="activity-item">
                    <span class="activity-dot danger"></span>
                    <div class="activity-content">
                        <p>Payment failed</p>
                        <small>Order #1019</small>
                    </div>
                    <span class="activity-time">Yesterday</span>
                </li>

            </ul>

        </div>

    </div>


</x-dashboard-layout.main>
