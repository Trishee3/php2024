<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register Form</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ffadc2, #b3e5fc);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }

        .logo {
            width: 100px;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input[type="text"], input[type="password"], input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #ffadc2;
            color: white;
            border: none;
            padding: 10px;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #ff7494;
        }

        .toggle-link {
            margin-top: 15px;
            display: inline-block;
            color: #007bff;
            cursor: pointer;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
        }

        .register-container {
            display: none;
        }
    </style>
    <script>
        function toggleForm() {
            var loginForm = document.getElementById('login-form');
            var registerForm = document.getElementById('register-form');
            if (loginForm.style.display === 'none') {
                loginForm.style.display = 'block';
                registerForm.style.display = 'none';
            } else {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
            }
        }
    </script>
</head>
<body>
    <div class="container">
        <img src="C:/Users/personal/Pictures/AandK-png.png" alt="A&K Logo" class="logo" width="100">

        <!-- Login Form -->
        <div id="login-form">
            <h2>Login</h2>
            <form action="#" method="post">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Log In">
            </form>
            <div class="toggle-link" onclick="toggleForm()">Don't have an account? Register</div>
        </div>

        <!-- Register Form -->
        <div id="register-form" class="register-container">
            <h2>Register</h2>
            <form action="#" method="post">
                <input type="text" name="fullname" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="submit" value="Register">
            </form>
            <div class="toggle-link" onclick="toggleForm()">Already have an account? Login</div>
        </div>

        <div class="footer">
            <p>© 2024 A&K Car Tent and Accessories</p>
        </div>
    </div>
</body>
</html>
