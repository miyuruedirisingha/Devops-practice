<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="navbar">
        <h1>Admin Dashboard</h1>
        <div class="user-info">
            <span>Welcome, Admin</span>
            <a href="index.html" class="logout-btn">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="welcome-section">
            <h2>Welcome back, Admin!</h2>
            <p>Here's what's happening with your system today.</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card users">
                <h3>Total Users</h3>
                <div class="number">1,234</div>
                <div class="change">↑ 12% from last month</div>
            </div>

            <div class="stat-card orders">
                <h3>Total Orders</h3>
                <div class="number">856</div>
                <div class="change">↑ 8% from last month</div>
            </div>

            <div class="stat-card revenue">
                <h3>Revenue</h3>
                <div class="number">$45,678</div>
                <div class="change">↑ 15% from last month</div>
            </div>

            <div class="stat-card pending">
                <h3>Pending Tasks</h3>
                <div class="number">24</div>
                <div class="change">↓ 5% from yesterday</div>
            </div>
        </div>

        <div class="content-grid">
            <div class="recent-activity">
                <h3>Recent Activity</h3>
                <div class="activity-item">
                    <div class="time">2 minutes ago</div>
                    <div class="desc">New user registered: john@example.com</div>
                </div>
                <div class="activity-item">
                    <div class="time">15 minutes ago</div>
                    <div class="desc">Order #1234 has been completed</div>
                </div>
                <div class="activity-item">
                    <div class="time">1 hour ago</div>
                    <div class="desc">Database backup completed successfully</div>
                </div>
                <div class="activity-item">
                    <div class="time">3 hours ago</div>
                    <div class="desc">Payment received from customer #567</div>
                </div>
                <div class="activity-item">
                    <div class="time">5 hours ago</div>
                    <div class="desc">System maintenance completed</div>
                </div>
            </div>

            <div class="quick-actions">
                <h3>Quick Actions</h3>
                <button class="action-btn">👤 Add New User</button>
                <button class="action-btn">📦 Create Order</button>
                <button class="action-btn">📊 View Reports</button>
                <button class="action-btn">⚙️ Settings</button>
                <button class="action-btn">💬 Messages</button>
            </div>
        </div>
    </div>
</body>
</html>