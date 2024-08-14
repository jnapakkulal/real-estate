<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="X-UA-compatible" content="IE-edge">
    <link rel="icon" href="img/icon.jpg">
    <title>Real Estate</title>
    <link rel="stylesheet" href="style.css">
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
       
</head>
<body >
    <header>
        <div class="nav container">
            <a href="" class="logo"><i class='bx bxs-building-house'></i>Real Estate</a>
        <input type="checkbox" name="" id="menu">
        <label for="menu" class='bx bx-menu' id="menu-icon" ></i>> </label>
 
      
        <!--login button -->
        <a href="login.php" class="btn"  name="action">Log In</a>

    </div>
    </header>
    <!--sign up page-->
    <div class="login container">
        <div class="login-container">
            <h2>Welcome ,Let's get started</h2>
            <!--form-->
            <form action="connect.php" method="POST">
                <span>Full Name</span>
                <input type="text" name="name" id="" placeholder="Your Name" required>
                <span>Enter Your Email Address</span>
                <input type="email" name="email" id="" placeholder="youremail@gmail.com" required>
                <span>Phone</span>
                <input type="tel" name="phone" id="" placeholder="Enter Your Number" required>
                <span>Enter Your Password</span>
                <input type="password" name="password" id="" placeholder="password" required>
                <span>Re Enter Password</span>
                <input type="password" name="repassword" id="" placeholder="Re enter password" required>
                <input type="submit" value="Sign Up"  name="action"class="button">
                <a href="login.php">Already Have An Account</a> </form></div>
        <div class="login-img">
            <img src="img/welcome.jpg" alt=""></div> </div>
    <!--footer-->
    <section class="footer">
        <div class="footer-container container">
            <h2>Real Estate</h2>
            <div class="footer-box">
                <h3>Locations</h3>
                <a href="#">Balmatta</a>
                <a href="#">Pumpwell</a>
                <a href="#">Nanthoor</a>
                <a href="#">Hampankatta....</a>
            </div>
            <div class="footer-box">
                <h3>Contact</h3>
                <a href="#">+91 9108756368</a>
                <a href="#">jnapakm@gmail.com</a>
                <a href="#">You Can Follow Us On: </a>
                <div class="social">
                    <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
                    <a href="https://www.linkedin.com/"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://www.github.com/"><i class='bx bxl-github'></i></a>
                    <a href="https://www.instagram.com/"><i class='bx bxl-twitter'></i></a> </div>
            </div>
        </div>
    </section>
    <div class="copyright">
        <p>&#169; jnapak M  2023</p>
    </div>
</body>
</html>