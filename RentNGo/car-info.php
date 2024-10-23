<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .car-info-container {
            padding: 2rem 0;
            background: rgba(16, 46, 82, 0.2);
            margin-top: 6rem;
        }

        .car-details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            padding: 2rem;
            background: var(--color-primary);
            border-radius: 0.5rem;
            box-shadow: var(--shadow);
        }

        .car-images {
            position: relative;
        }

        .main-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
        }

        .thumbnail-container {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
        }

        .thumbnail {
            width: 100%;
            height: 80px;
            object-fit: cover;
            border-radius: 0.3rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .thumbnail:hover {
            opacity: 0.8;
        }

        .car-info {
            padding: 1rem;
        }

        .car-info h2 {
            color: var(--color-secondary);
            margin-bottom: 1rem;
            text-align: left;
        }

        .car-specs {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .spec-item {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 0.5rem;
            background: var(--color-bg);
            border-radius: 0.3rem;
        }

        .spec-item i {
            color: var(--color-secondary);
            font-size: 1.2rem;
        }

        .price-section {
            margin: 2rem 0;
            padding: 1rem;
            background: var(--color-bg);
            border-radius: 0.3rem;
        }

        .price-section h3 {
            color: var(--color-secondary);
            margin-bottom: 1rem;
        }

        .booking-section {
            margin-top: 2rem;
        }

        .availability {
            display: flex;
            gap: 1rem;
            margin: 1rem 0;
        }

        @media (max-width: 824px) {
            .car-details {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 624px) {
            .car-specs {
                grid-template-columns: 1fr;
            }
            
            .thumbnail-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
    <title>Car Information - Rent N Go</title>
</head>

<body>
    <!-- Reuse the same navigation from index.php -->
    <nav>
        <div class="nt-container">
            <div class="container">
                <div class="nav-top">
                    <div>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Nueva Ecija, Philippines</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-clock"></i>
                        <span>24/7 Open</span>
                    </div>
                    <div>
                        <i class="fa-solid fa-phone"></i>
                        <span>1234567890</span>
                    </div>
                    <div class="social-icons">
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-twitter"></i>
                        <i class="fa-brands fa-linkedin-in"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="n1-container">
            <div class="container">
                <div class="logo">
                    <img src="pic/logo.png" alt="">
                </div>
                <ul class="navlist">
                    <li><a href="index.php#home">home</a></li>
                    <li><a href="index.php#about">about</a></li>
                    <li><a href="index.php#services">services</a></li>
                    <li><a href="index.php#cars">car-list</a></li>
                    <li><a href="login-register.php">login/register</a></li>
                    <li><a href="customer-dashboard.php"> <span class="lnr lnr-user"></span>  profile</a></li>

                </ul>
                <div class="menu-btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <section class="car-info-container">
        <div class="container">
            <div class="car-details">
                <div class="car-images">
                    <img src="pic/cars pixels (1).jpg" alt="Dodge Challenger" class="main-image">
                    <div class="thumbnail-container">
                        <img src="pic/cars pixels (1).jpg" alt="Challenger Front" class="thumbnail">
                        <img src="pic/cars pixels (1).jpg" alt="Challenger Side" class="thumbnail">
                        <img src="pic/cars pixels (1).jpg" alt="Challenger Back" class="thumbnail">
                        <img src="pic/cars pixels (1).jpg" alt="Challenger Interior" class="thumbnail">
                    </div>
                </div>
                <div class="car-info">
                    <h2>Dodge Challenger 2020</h2>
                    <p>Experience raw power and classic muscle car styling with our Dodge Challenger. Perfect for those who appreciate American muscle and modern performance.</p>
                    
                    <div class="car-specs">
                        <div class="spec-item">
                            <i class="fa-solid fa-car"></i>
                            <span>Manual Transmission</span>
                        </div>
                        <div class="spec-item">
                            <i class="fa-solid fa-gas-pump"></i>
                            <span>Petrol</span>
                        </div>
                        <div class="spec-item">
                            <i class="fa-solid fa-gauge"></i>
                            <span>485 HP</span>
                        </div>
                        <div class="spec-item">
                            <i class="fa-solid fa-users"></i>
                            <span>5 Seats</span>
                        </div>
                        <div class="spec-item">
                            <i class="fa-solid fa-snowflake"></i>
                            <span>Air Conditioning</span>
                        </div>
                        <div class="spec-item">
                            <i class="fa-solid fa-suitcase"></i>
                            <span>2 Large Bags</span>
                        </div>
                    </div>

                    <div class="price-section">
                        <h3>Rental Rates</h3>
                        <p>Daily Rate: ₱3,000</p>
                        <p>Weekly Rate: ₱18,000</p>
                        <p>Monthly Rate: ₱65,000</p>
                    </div>

                    <div class="booking-section">
                        <h3>Book This Car</h3>
                        <div class="booking-form">
                            <div class="form-group">
                                <h5>Pick up:</h5>
                                <input type="date" name="Pick Up" required>
                            </div>
                            <div class="form-group">
                                <h5>Drop off:</h5>
                                <input type="date" name="Drop-off" required>
                            </div>
                        </div>
                        <button class="btn">Book Now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reuse the same footer from index.php -->
    <footer>
        <div class="container footer-container">
            <div class="row-1">
                <div class="logo">
                    <img src="pic/logo.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam consectetur accusantium sint.</p>
            </div>
            <div class="row-2">
                <ul class="quick-links">
                    <h4>Quick Links</h4>
                    <li><a href="#about">about</a></li>
                    <li><a href="#services">services</a></li>
                    <li><a href="#car-list">car-list</a></li>
                </ul>
            </div>
            <div class="row-3">
                <ul class="explore">
                    <h4>Support</h4>
                    <li><a href="">Help</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#services">Terms & Conditions</a></li>
                    <li><a href="#services">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="row-4">
                <ul class="explore">
                    <h4>Contact</h4>
                    <li><a href="">Contact us</a></li>
                    <li><a href="#services">0123456789</a></li>
                    <p>dfg@gmail.com</p>
                    <ul class="footer-social">
                        <li class="fa-brands fa-facebook"></li>
                        <li class="fa-brands fa-instagram"></li>
                        <li class="fa-brands fa-twitter"></li>
                        <li class="fa-brands fa-linkedin-in"></li>
                    </ul>
                </ul>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/script.js"></script>
    <script>
        // Additional JavaScript for car info page
        const thumbnails = document.querySelectorAll('.thumbnail');
        const mainImage = document.querySelector('.main-image');

        thumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', () => {
                mainImage.src = thumbnail.src;
            });
        });

        // Add ScrollReveal animations
        sr.reveal('.car-images', {delay: 300, origin: 'left'});
        sr.reveal('.car-info', {delay: 300, origin: 'right'});
    </script>
</body>
</html>