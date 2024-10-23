<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent N Go - Login/Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Existing styles from login-register.php */
        :root {
            --color-primary: #0C2340;
            --color-secondary: #6BABD6;
            --color-tertiary: #E0E0F4;
            --color-bg: #595959;
            --color-text: #FFFFFF;
            --shadow: 0 2px 8px rgba(0,0,0,.4);
            --transition: all .4s ease;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 400px;
            margin: 2rem auto;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: var(--color-secondary);
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
        }

        .form-group input {
            width: 100%;
            padding: 0.5rem;
            border: none;
            background: rgba(255, 255, 255, 0.1);
            color: var(--color-text);
            border-radius: 5px;
        }

        .btn {
            display: block;
            width: 100%;
            padding: 0.75rem;
            background: var(--color-secondary);
            color: var(--color-primary);
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
            transition: var(--transition);
        }

        .btn:hover {
            background: var(--color-tertiary);
        }

        .switch-form {
            text-align: center;
            margin-top: 1rem;
        }

        .switch-form a {
            color: var(--color-secondary);
            text-decoration: none;
        }

        .switch-form a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <div class="n1-container">
            <div class="container">
                <div class="logo">
                    <img src="pic/logo.png" alt="">
                </div>
                <ul class="navlist">
                    <li><a href="index.php#home">home</a></li>
                    <li><a href="index.php#about">about</a></li>
                    <li><a href="index.php#services">services</a></li>
                    <li><a href="index.php#car-list">car-list</a></li>
                    <li><a href="login-register.php">login/register</a></li>
                </ul>
                <div class="menu-btn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </nav>

    <div class="login-container">
        <div class="logo">
            <img src="pic/logo.png" alt="Rent N Go Logo">
        </div>
        <h2>Login</h2>
        <form id="loginForm">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="switch-form">
            <p>Don't have an account? <a href="#" id="switchToRegister">Register</a></p>
        </div>
    </div>

    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/script.js"></script>
    <script>
        const loginForm = document.getElementById('loginForm');
        const switchToRegister = document.getElementById('switchToRegister');

        switchToRegister.addEventListener('click', (e) => {
            e.preventDefault();
            const container = document.querySelector('.login-container');
            container.innerHTML = `
                <div class="logo">
                    <img src="pic/logo.png" alt="Rent N Go Logo">
                </div>
                <h2>Register</h2>
                <form id="registerForm">
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="confirmPassword" required>
                    </div>
                    <button type="submit" class="btn">Register</button>
                </form>
                <div class="switch-form">
                    <p>Already have an account? <a href="#" id="switchToLogin">Login</a></p>
                </div>
            `;

            const switchToLogin = document.getElementById('switchToLogin');
            switchToLogin.addEventListener('click', (e) => {
                e.preventDefault();
                location.reload();
            });
        });
    </script>
</body>
</html>