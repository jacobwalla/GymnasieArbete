<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('location:login.html');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Schwing Casino</title>
</head>

<body class="background-1">
    <header>
        <a href="./Shwing-casino.html"><img src="./bilder/schwing prototype logo.png" class="logo"></a>
        <nav>
            <ul>
                <li><a href="./Shwing-casino.html">Home</a></li>
                <li><a href="./dice.html">Dice</a></li>
                <li><a href="./roulette.html">Roulette</a></li>
                <li><a href="./coinflip.html">Coin Flip</a></li>
                <li><a href="./faq.html">FAQs</a></li>
            </ul>
        </nav>

        <a class="loginBtn" href="./logout.php"><button>Log Out</button></a>
    </header>
    <main>
        <h2 class="welcome-msg">Welcome <span class="username"><?php echo $_SESSION['username']; ?></span></h2>
    </main>

    <footer>
        <div class="footer-content">
            <h3>Schwing Casino</h3>
            <p>A great casino</p>
            <ul class="socials">
                <li><a href="https://www.instagram.com/schwingcasino/"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://twitter.com/schwingcasino"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/schwingcasino"><i class="fab fa-facebook"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;2020 Schwing Casino.</p>
        </div>
    </footer>

    <script src="main.js"></script>
</body>
</html>