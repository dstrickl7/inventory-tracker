<?php
session_start();
session_unset();
session_destroy();
header( "Refresh:3; url=login.php", true, 303);
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
<body>
    <div class="container main-container">
        <h1>GoodBye!</h1>
    </div>
</body>
</html>