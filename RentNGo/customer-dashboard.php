<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <title>Customer Dashboard - Rent N Go</title>
    <style>
        :root {
            --color-primary: #0C2340;
            --color-secondary: #6BABD6;
            --color-tertiary: #E0E0F4;
            --color-bg: #595959;
            --color-text: #FFFFFF;
            --shadow: 0 2px 8px rgba(0,0,0,.4);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background: var(--color-primary);
            color: var(--color-text);
            line-height: 1.7;
        }

        .dashboard-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .dashboard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            background: rgba(255, 255, 255, 0.1);
            padding: 1rem;
            border-radius: 8px;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .user-avatar {
            width: 60px;
            height: 60px;
            background: var(--color-secondary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
        }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .dashboard-card {
            background: var(--color-bg);
            padding: 1.5rem;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
        }

        .card-header i {
            color: var(--color-secondary);
            font-size: 1.5rem;
        }

        .current-rental {
            background: rgba(107, 171, 214, 0.1);
            padding: 1rem;
            border-radius: 8px;
            margin-top: 1rem;
        }

        .rental-history {
            margin-top: 1rem;
        }

        .rental-item {
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .btn {
            background: var(--color-secondary);
            color: var(--color-primary);
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            border: none;
            font-weight: bold;
        }

        .btn:hover {
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .dashboard-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="dashboard-container">
        <div class="dashboard-header">
            <div class="user-info">
                <div class="user-avatar">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <h2>Welcome, John Doe</h2>
                    <p>Member since January 2024</p>
                </div>
            </div>
            <div class="action-buttons">
                <button class="btn">Edit Profile</button>
                <button class="btn">Logout</button>
            </div>
        </div>

        <div class="dashboard-grid">
            <div class="dashboard-card">
                <div class="card-header">
                    <h3>Current Rental</h3>
                    <i class="fa-solid fa-car"></i>
                </div>
                <div class="current-rental">
                    <h4>Toyota Camry</h4>
                    <p>Pickup: Jan 20, 2024</p>
                    <p>Return: Jan 25, 2024</p>
                    <p>Status: Active</p>
                    <button class="btn">Extend Rental</button>
                </div>
            </div>

            <div class="dashboard-card">
                <div class="card-header">
                    <h3>Quick Stats</h3>
                    <i class="fa-solid fa-chart-simple"></i>
                </div>
                <div>
                    <p>Total Rentals: 8</p>
                    <p>Reward Points: 250</p>
                    <p>Member Status: Gold</p>
                </div>
            </div>

            <div class="dashboard-card">
                <div class="card-header">
                    <h3>Upcoming Reservations</h3>
                    <i class="fa-solid fa-calendar"></i>
                </div>
                <div>
                    <p>No upcoming reservations</p>
                    <button class="btn">Book Now</button>
                </div>
            </div>
        </div>

        <div class="dashboard-card">
            <div class="card-header">
                <h3>Rental History</h3>
                <i class="fa-solid fa-clock-rotate-left"></i>
            </div>
            <div class="rental-history">
                <div class="rental-item">
                    <h4>Mercedes-Benz SL 350</h4>
                    <p>Dec 15 - Dec 20, 2023</p>
                    <p>Status: Completed</p>
                </div>
                <div class="rental-item">
                    <h4>Nissan 350z</h4>
                    <p>Nov 5 - Nov 10, 2023</p>
                    <p>Status: Completed</p>
                </div>
                <div class="rental-item">
                    <h4>Range Rover 2.0</h4>
                    <p>Oct 1 - Oct 5, 2023</p>
                    <p>Status: Completed</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>