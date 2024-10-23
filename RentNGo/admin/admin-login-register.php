<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login/Register - Rent N Go</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/admin-style.css">
    <style>
        body {
            background: var(--color-primary);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .auth-container {
            background-color: var(--color-text);
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: var(--shadow);
            width: 100%;
            max-width: 400px;
        }
        .auth-container h2 {
            color: var(--color-primary);
            margin-bottom: 1rem;
            text-align: center;
        }
        .auth-container input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid var(--color-bg);
            border-radius: 0.3rem;
        }
        .auth-container .btn {
            width: 100%;
            text-align: center;
            background: var(--color-secondary);
            color: var(--color-text);
        }
        .auth-container .btn:hover {
            background: var(--color-primary);
        }
        .auth-toggle {
            margin-top: 1rem;
            text-align: center;
            color: var(--color-primary);
        }
        .auth-toggle a {
            color: var(--color-secondary);
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="auth-container" id="loginForm">
        <h2>Admin Login</h2>
        <form>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit" class="btn">Login</button>
        </form>
        <div class="auth-toggle">
            Don't have an account? <a href="#" onclick="toggleForm('register')">Register</a>
        </div>
    </div>

    <div class="auth-container" id="registerForm" style="display: none;">
        <h2>Admin Register</h2>
        <form>
            <input type="text" placeholder="Full Name" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <input type="password" placeholder="Confirm Password" required>
            <button type="submit" class="btn">Register</button>
        </form>
        <div class="auth-toggle">
            Already have an account? <a href="#" onclick="toggleForm('login')">Login</a>
        </div>
    </div>

    <script>
        function toggleForm(formType) {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            if (formType === 'login') {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
            } else {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
            }
        }
    </script>
</body>
</html>