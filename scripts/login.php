<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kitchen Inventory Tracker</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<!-- Stylesheet -->
<link rel="stylesheet" href="../styles/style.css">

</head>
<body>
    <header>
        <!-- Navbar -->
        <nav class="navbar">
            <div class="logo-container">
                <a href="#" aria-label="homepage" class="logo-text"><img src="../styles/icons/shopping-list.svg" alt="The Kitchen Tracker" class="logo-img" aria-hidden="true">The Kitchen Tracker</a>
            </div>
            <div class="nav-icon-container">
                <button class="nav-icon hamburger" type="button" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="../styles/icons/hamburger.svg" alt="open menu" class="nav-icon-img">
                </button>
                <button class="nav-icon close" type="button" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                    <img src="../styles/icons/icon-close.svg" alt="close menu" class="nav-icon-img">
                </button>
            </div>
            <div class="navlist-container">
                <ul class="navlist">
                    <li class="navitem"><a href="../index.php" class="navlink">Inventory</a></li>
                    <li class="navitem"><a href="list.php" class="navlink" aria-current="page">Shopping List</a></li>
                </ul>
            </div>     
        </nav>
        <!-- Navbar end -->
        <div class="overlay"></div>
    </header>
    <main>
        <div class="container login-container">
            <div class="logo-container-login">
                <h1 class="logo-login"><img src="../styles/icons/shopping-list.svg" alt="The Kitchen Tracker" class="logo-img" aria-hidden="true">The Kitchen Tracker</h1>
            </div>
            <form class="login">
                <div class="inputs-login">
                    <label for="email">Email:</label>
                        <input type="email" name="email" id="email" required>
                </div>
                <div class="inputs-login">
                    <label for="password">Password:</label>
                        <input type="password" name="password" id="password" required>
                </div>
                <div class="btn-container">
                    <button type="submit" class="btn btn-fill">Log In</button>
                </div>
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
                        <input type="password" name="password"  required>
                </div>
                <div class="btn-container">
                    <button type="submit" class="btn btn-fill">Sign Up</button>
                </div>
            </form>
                
                    
   
        </div>
    </main>
    <script src="../dist/bundle.js"></script>
</body>