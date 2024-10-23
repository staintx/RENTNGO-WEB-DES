<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="css/style.css">
    

    <title>Rent N Go</title>
</head>

<body>
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
                    <li><a href="#home">home</a></li>
                    <li><a href="#about">about</a></li>
                    <li><a href="#services">services</a></li>
                    <li><a href="car-list.php">car-list</a></li>
                    <li><a href="login-register.php">login/register</a></li>
                    <li><a href="customer-dashboard.php"> <span class="lnr lnr-user"></span>  profile</a></li>
                </ul>
                <div class="menu-btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <header class="home" id="home">
        <div class="container home-container">
            <div class="info">
                <h1>Rent A Car is Within your finger tips</h1>
                <p>Renting a car is just a click away! With our user-friendly platform, you can easily browse and book a wide range 
                    of vehicles anytime, anywhere. Enjoy instant confirmations, 
                    flexible options, and 24/7 support for a seamless travel experience. Your next adventure is at your fingertips!.</p>
                <div class="booking-form">
                    <div class="form-group">
                        <h5>Select Vehicle:</h5>
                        <select name="Car" id="">
                            <option value="">select</option>
                            <option value="">Toyota</option>
                            <option value="">Mitsubishi</option>
                            <option value="">Nissan</option>
                            <option value="">Ford</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <h5>Pick up:</h5>
                        <input type="date" name="Pick Up" placeholder="Pick up">

                    </div>
                    <div class="form-group">
                        <h5>Drop off:</h5>
                        <input type="date" name="Drop-off" placeholder="Drop-off">
                    </div>
                </div>
                <button class="btn">Book</button>

            </div>
        </div>
    </header>

    <!--=================================WORKS==================================================== -->

    <section class="works">
        <div class="title">
            <h3>How it works?</h3>
            <p>At Rent & Go, booking a car is simple and straightforward. Just follow these steps:</p>
        </div>
        <div class="container works-container">
            <div class="step">
                <span class="number">01</span>
                <span class="caption">Select Car Type</span>
            </div>
            <div class="step">
                <span class="number">02</span>
                <span class="caption">Time</span>
            </div>
            <div class="step">
                <span class="number">03</span>
                <span class="caption">Pick n Drop</span>
            </div>
            <div class="step">
                <span class="number">04</span>
                <span class="caption">Check out</span>
            </div>
            <div class="step">
                <span class="number">05</span>
                <span class="caption">Done</span>
            </div>

        </div>
    </section>
    <!--=================================ABOUT==================================================== -->
    <section class="about" id="about">
        <div class="title">
            <h4><i class="fa-solid fa-car"></i></h4>
        </div>
        <div class="about-container">
            <div class="image">
                <img src="pic/about pixels.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">
                    <p>About us</p>
                    <h2>Welcome to Rent N Go</h2>
                    <p>Rent & Go offers a hassle-free car rental experience designed for your convenience. With a wide range of vehicles to choose from, you can find the perfect ride for any occasion, 
                        whether it’s a road trip, business travel, or a weekend getaway. Our easy online booking system 
                        ensures quick reservations, and our friendly customer service is always ready to assist you. Enjoy flexible rental options and competitive pricing as you hit the road with Rent & Go!
                    </p> <br>
                    
                </div>
            </div>
        </div>
    </section>
    <!--=================================SERVICES==================================================== -->
    <section class="services" id="services">
        <div class="title">
            <h4><i class="fa-solid fa-car"></i></h4>
            <h2>What services we offer to our clients?</h2>
            
        </div>

        <div class="container services-container">
            <div class="card">
                <div>
                    <span class="lnr lnr-rocket"></span>
                    <h4>Car Accessories</h4>
                </div>
                <p>We offer Car accessories to enhance your driving experience by adding comfort, functionality, 
                    and style to your vehicle. From protective seat covers and custom floor mats to handy gadgets 
                    like phone mounts and dash cams, these accessories cater to your needs. Whether you want to keep your 
                    car organized, improve safety, or express your personal style, there's an accessory to suit 
                    every driver. Explore our selection to find the perfect additions for your ride!</p>
            </div>
            <div class="card">
                <div>
                    <span class="lnr lnr-license"></span>
                    <h4>Technical Repair</h4>
                </div>
                <p> Technical repair services focus on diagnosing and fixing issues related to your vehicle's electronic systems and components. This includes repairs for the engine, transmission, brakes, 
                    and electrical systems, as well as troubleshooting problems with navigation systems, sensors, and 
                    infotainment units. Skilled technicians use advanced tools and technology to ensure your car operates efficiently and safely. Regular technical 
                    repairs can help prevent breakdowns and extend the life of your vehicle.</p>
            </div>
            <div class="card">
                <div>
                    <span class="lnr lnr-user"></span>
                    <h4>Vast Reservation</h4>
                </div>
                <p>Our platform offers a wide selection of vehicles to suit every need, from compact
                     cars to spacious SUVs. Enjoy competitive rates, flexible pickup and drop-off options, and reliable customer support. 
                     Whether you're planning a road trip or just need a vehicle for a day, Vast Reservation makes car 
                    rental simple and hassle-free. Experience the freedom of the open road with us!</p>
            </div>
            <div class="card">
                <div>
                    <span class="lnr lnr-phone"></span>
                    <h4>24/7 Support</h4>
                </div>
                <p>Our 24/7 support service is dedicated to ensuring you have assistance whenever you need it. Whether you have questions 
                    about your car rental, need help with roadside assistance, or require troubleshooting for your vehicle, our knowledgeable 
                    team is just a call or message away. With around-the-clock availability, you can drive with confidence, 
                    knowing that support is always ready to help you, day or night. Your peace of mind is our priority!</p>
            </div>
            <div class="card">
                <div>
                    <span class="lnr lnr-car"></span>
                    <h4>Rental Cars</h4>
                </div>
                <p>Rent N Go offer a convenient solution for your travel needs, whether you're on a business trip or 
                    exploring a new city. With a diverse fleet ranging from economy cars to luxury vehicles, you can choose the perfect ride 
                    for your journey. Enjoy flexible rental options, competitive pricing, and easy booking through our user-friendly platform. 
                    Experience the freedom to travel 
                    on your own schedule and discover new destinations with ease in a rental car that suits your lifestyle!</p>
            </div>
            <div class="card">
                <div>
                    <span class="lnr lnr-calendar-full"></span>
                    <h4>Booking System</h4>
                </div>
                <p>Rent N Go provide a flexible and convenient way to meet your transportation needs. Whether you 
                    need a vehicle for a day, a weekend, or an extended trip, we offer a diverse selection of cars to suit your preferences and 
                    budget. Enjoy easy online booking, competitive rates, and various pick-up and drop-off locations. 
                    Experience the freedom to explore your destination at your own pace with a rental car that fits your lifestyle!</p>
            </div>
        </div>

    </section>
    <!-- ==================================CARS=================================== -->
    <section class="cars" id="cars">
        <div class="title">
            <h4><i class="fa-solid fa-car"></i></h4>
            <h2>Choose Your Car</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, non quae.</p>
        </div>
        <div class="container cars-container-dets">
            <div class="box">
                <img src="pic\cars pixels (1).jpg" alt="">
                <div class="info">
                    <div class="tag">
                        <span class="lnr lnr-pointer-right"></span>
                        <p>3000/DAY</p>
                    </div>
                    <h5>Challenger</h5>
                    <p>Dodge</p>
                    <div>
                        <a href="car-info.php">2020</a>
                        <a href="">Manual</a>
                        <a href="">AC</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="pic\cars pixels (2).jpg" alt="">
                <div class="info">
                    <div class="tag">
                        <span class="lnr lnr-pointer-right"></span>
                        <p>3000/DAY</p>
                    </div>
                    <h5>Range Rover 2.0</h5>
                    <p>Land Rover</p>
                    <div>
                        <a href="">2020</a>
                        <a href="">Manual</a>
                        <a href="">AC</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="pic\cars pixels (3).jpg" alt="">
                <div class="info">
                    <div class="tag">
                        <span class="lnr lnr-pointer-right"></span>
                        <p>3000/DAY</p>
                    </div>
                    <h5>Huracan</h5>
                    <p>Lamborghini</p>
                    <div>
                        <a href="">2020</a>
                        <a href="">Manual</a>
                        <a href="">AC</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="pic\cars pixels (4).jpg" alt="">
                <div class="info">
                    <div class="tag">
                        <span class="lnr lnr-pointer-right"></span>
                        <p>3000/DAY</p>
                    </div>
                    <h5>Nissan</h5>
                    <p>350z</p>
                    <div>
                        <a href="">2020</a>
                        <a href="">Manual</a>
                        <a href="">AC</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="pic\cars pixels (10).jpg" alt="">
                <div class="info">
                    <div class="tag">
                        <span class="lnr lnr-pointer-right"></span>
                        <p>3000/DAY</p>
                    </div>
                    <h5>McLaren</h5>
                    <p>P1</p>
                    <div>
                        <a href="">2020</a>
                        <a href="">Manual</a>
                        <a href="">AC</a>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="pic\cars pixels (8).jpg" alt="">
                <div class="info">
                    <div class="tag">
                        <span class="lnr lnr-pointer-right"></span>
                        <p>3000/DAY</p>
                    </div>
                    <h5>SL 350</h5>
                    <p>Mercedez-Benz</p>
                    <div>
                        <a href="">2020</a>
                        <a href="">Manual</a>
                        <a href="">AC</a>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- ==============================BLOG========================================-->

    <section class="blog" id="blog">
        <div class="title">
            <h4><i class="fa-solid fa-car"></i></h4>
            <h2>Blog</h2>
            <p>Travel Tips & Guides: Our blog is packed with expert travel tips, destination guides, and insights 
                to help you make the most of your car rental experience. Discover 
                hidden gems, must-see attractions, and helpful advice for navigating your next adventure..</p>
        </div>
        <div class="container blog-container-bl">
            <div class="card card-1">
                <div class="image">
                    <img src="pic\blog pixels (1).jpg" alt="">
                </div>
                <div class="content">
                    <p> Stay informed with our blog articles covering everything you need to know about car rentals. From choosing the right 
                        vehicle to understanding rental policies and insurance options, we provide valuable information to ensure a smooth and enjoyable rental process.</p>
                </div>
            </div>
            <div class="card card-2">

                <div class="content">
                    <p>Customer Stories & Experiences: Get inspired by real-life stories from our customers! Our blog 
                        features testimonials and experiences that showcase the 
                        freedom and fun of exploring new places with Rent & Go. Join our community and share your own adventures!</p>
                </div>
                <div class="image">
                    <img src="pic\blog pixels (2).jpg" alt="">
                </div>

            </div>
    </section>


<!--=========================================FOOTER======================================-->

<footer>
    <div class="container footer-container">
        <div class="row-1">
            <div class="logo">
                <img src="pic\logo.png" alt="">
            </div>
            <p>Rent A Car is Within your finger tips</p>
        </div>
        <div class="row-2">
            <ul class="quick-links">
                <h4>Quick Links</h4>
                    <li><a href="#about">about</a></li>
                    <li><a href="#services">services</a></li>
                    <li><a href="car-list.php">car-list</a></li>

            </ul>
        </div>
        <div class="row-3">
            <ul class="explore">
                <h4>Support</h4>
                    <li style="color: var(--color-primary);"><a href="">Help</a></li>
                    <li style="color: var(--color-primary);"><a href="#services">services</a></li>
                    <li style="color: var(--color-primary);"><a href="#services">Terms & Conditions</a></li>
                    <li style="color: var(--color-primary);"><a href="#services">Privacy Policy</a></li>

            </ul>
        </div>
        <div class="row-4">
            <ul class="explore">
                <h4>Support</h4>
                    <li style="color: var(--color-primary);"><a href="">Contact us</a></li>
                    <li style="color: var(--color-primary);"><a href="#services">0123456789</a></li>
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
</body>

</html>