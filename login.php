<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Inventory Tracker</title>
    <link rel="icon" type="image/png" sizes="32x32" href="styles/icons/favicon.ico">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="/styles/style.css">

</head>

<body class="green">
    <header>
        <!-- Navbar -->
        <nav class="navbar">
            <div class="logo-container-login">
                <a href="#" aria-label="homepage" class="logo-text"><img src="/styles/icons/shopping-list.svg"
                        alt="The Kitchen Tracker" class="logo-img" aria-hidden="true">The Kitchen Tracker</a>
            </div>
        </nav>
        <!-- Navbar end -->
        <div class="overlay"></div>
    </header>
    <main>
        <div class="container login-container">
            <div class="logo-container-login">
                <h1 class="logo-login"><img src="/styles/icons/shopping-list.svg" alt="The Kitchen Tracker"
                        class="logo-img" aria-hidden="true">The Kitchen Tracker</h1>
            </div>
            <div class="error-container">
                <p class="error"></p>
            </div>
            <form class="login" method="POST">
                <div class="inputs-login">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="inputs-login">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="btn-container">
                    <button type="submit" class="btn btn-fill btn-md">Log In</button>
                    <button class="btn btn-md" type=button id="signupBtn">SignUp</button>
                </div>
                <button type="button" role="link" class="guest-login">Login as guest</button>
            </form>

            <form class="signup" method="POST">
                <div class="inputs-login">
                    <label for="Name">Name:</label>
                    <input type="name" name="name" required>
                </div>
                <div class="inputs-login">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required>
                </div>
                <div class="inputs-login">
                    <label for="password">Password(min 6 characters):</label>
                    <input type="password" name="password" required>
                </div>
                <div class="btn-container">
                    <button type="submit" class="btn btn-fill btn-md">Sign Up</button>
                    <button class="btn btn-md" id="backBtn">Back to Login</button>
                </div>
            </form>          

        </div>
    </main>
    <script src="/dist/bundle.js"></script>
    <script src="/scripts/script.js"></script>
</body>