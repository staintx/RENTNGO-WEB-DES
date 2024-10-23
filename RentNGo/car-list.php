<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <style>
        :root {
            --color-primary: #0C2340;
            --color-secondary: #6BABD6;
            --color-tertiary: #E0E0F4;
            --color-bg: #595959;
            --color-text: #FFFFFF;
            --shadow: 0 2px 8px rgba(0,0,0,.4);
            --shadow-1: -1rem 1rem 1.2rem 0 rgba(157,157,157,.5);
            --transition: all .4s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
        }

        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background: var(--color-primary);
            color: var(--color-text);
            line-height: 1.7;
        }

        /* Navigation Styles */
        nav {
            background: rgba(255,255,255,.9);
            padding: 1rem 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo img {
            width: 3rem;
        }

        .navlist {
            display: flex;
            gap: 2.2rem;
            list-style: none;
        }

        .navlist a {
            color: var(--color-primary);
            text-transform: uppercase;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .navlist a:hover {
            color: var(--color-secondary);
        }

        /* Car List Styles */
        .car-list {
            padding: 4rem 0;
        }

        .title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .title h2 {
            color: var(--color-text);
            font-size: 2.2rem;
            text-transform: uppercase;
            margin-bottom: 1rem;
        }

        .filters {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .filter-btn {
            background: var(--color-bg);
            color: var(--color-text);
            padding: 0.5rem 1.5rem;
            border-radius: 5px;
            cursor: pointer;
            transition: var(--transition);
        }

        .filter-btn:hover {
            background: var(--color-secondary);
        }

        .cars-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .car-card {
            background: var(--color-bg);
            border-radius: 8px;
            overflow: hidden;
            transition: var(--transition);
        }

        .car-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .car-image {
            height: 200px;
            width: 100%;
            background: #ddd;
        }

        .car-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .car-details {
            padding: 1.5rem;
        }

        .car-type {
            color: var(--color-secondary);
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .car-name {
            font-size: 1.3rem;
            margin-bottom: 1rem;
        }

        .car-specs {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .spec {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .spec i {
            color: var(--color-secondary);
        }

        .car-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .price {
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--color-secondary);
        }

        .book-btn {
            background: var(--color-secondary);
            color: var(--color-primary);
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: var(--transition);
        }

        .book-btn:hover {
            background: var(--color-primary);
            color: var(--color-secondary);
        }

        @media (max-width: 1024px) {
            .cars-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .filters {
                flex-wrap: wrap;
            }
            .cars-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <title>Car List - Rent N Go</title>
</head>
<body>
    <nav>
        <div class="container nav-container">
            <div class="logo">
                <img src="pic/logo.png" alt="Rent N Go">
            </div>
            <ul class="navlist">
                <li><a href="index.php">home</a></li>
                <li><a href="index.php#about">about</a></li>
                <li><a href="index.php#services">services</a></li>
                <li><a href="#cars">car-list</a></li>
                <li><a href="login-register.php">login/register</a></li>
                <li><a href="customer-dashboard.php"> <span class="lnr lnr-user"></span>  profile</a></li>
            </ul>
        </div>
    </nav>

    <section class="car-list">
        <div class="container">
            <div class="title">
                <h2>Our Car Collection</h2>
                <p>Choose from our wide range of premium vehicles</p>
            </div>

            <div class="filters">
                <div class="filter-btn">All Cars</div>
                <div class="filter-btn">Luxury</div>
                <div class="filter-btn">Sports</div>
                <div class="filter-btn">SUV</div>
                <div class="filter-btn">Sedan</div>
            </div>

            <div class="cars-grid">
                <!-- Car Card 1 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="pic\cars pixels (1).jpg" alt="Dodge Challenger">
                    </div>
                    <div class="car-details">
                        <div class="car-type">Sports Car</div>
                        <h3 class="car-name">Dodge Challenger</h3>
                        <div class="car-specs">
                            <div class="spec">
                                <i class="fa-solid fa-gauge"></i>
                                <span>3.6L V6</span>
                            </div>
                            <div class="spec">
                                <i class="fa-solid fa-gear"></i>
                                <span>Automatic</span>
                            </div>
                            <div class="spec">
                                <i class="fa-solid fa-user"></i>
                                <span>5 Seats</span>
                            </div>
                            <div class="spec">
                                <i class="fa-solid fa-snowflake"></i>
                                <span>A/C</span>
                            </div>
                        </div>
                        <div class="car-price">
                            <span class="price">₱3000/day</span>
                            <a href="car-info.php" class="book-btn">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Car Card 2 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="pic\cars pixels (2).jpg" alt="Range Rover">
                    </div>
                    <div class="car-details">
                        <div class="car-type">Luxury SUV</div>
                        <h3 class="car-name">Range Rover Sport</h3>
                        <div class="car-specs">
                            <div class="spec">
                                <i class="fa-solid fa-gauge"></i>
                                <span>3.0L V6</span>
                            </div>
                            <div class="spec">
                                <i class="fa-solid fa-gear"></i>
                                <span>Automatic</span>
                            </div>
                            <div class="spec">
                                <i class="fa-solid fa-user"></i>
                                <span>5 Seats</span>
                            </div>
                            <div class="spec">
                                <i class="fa-solid fa-snowflake"></i>
                                <span>A/C</span>
                            </div>
                        </div>
                        <div class="car-price">
                            <span class="price">₱4500/day</span>
                            <a href="car-info.php" class="book-btn">Book Now</a>
                        </div>
                    </div>
                </div>

                <!-- Car Card 3 -->
                <div class="car-card">
                    <div class="car-image">
                        <img src="pic\cars pixels (10).jpg" alt="McLaren P1">
                    </div>
                    <div class="car-details">
                        <div class="car-type">Supercar</div>
                        <h3 class="car-name">McLaren P1</h3>
                        <div class="car-specs">
                            <div class="spec">
                                <i class="fa-solid fa-gauge"></i>
                                <span>3.8L V8</span>
                            </div>
                            <div class="spec">
                                <i class="fa-solid fa-gear"></i>
                                <span>Auto-Manual</span>
                            </div>
                            <div class="spec">
                                <i class="fa-solid fa-user"></i>
                                <span>2 Seats</span>
                            </div>
                            <div class="spec">
                                <i class="fa-solid fa-snowflake"></i>
                                <span>A/C</span>
                            </div>
                        </div>
                        <div class="car-price">
                            <span class="price">₱15000/day</span>
                            <a href="car-info.php" class="book-btn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.style.background = 'var(--color-bg)');
                btn.style.background = 'var(--color-secondary)';
            });
        });
    </script>
    <script src="js\script.js"></script>
</body>
</html>