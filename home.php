<?php
session_start();
$username=$_SESSION['name'];

if(!isset($_SESSION['name'])) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="X-UA-compatible" content="IE-edge">
    <link rel="icon" href="img/icon.jpg">
    <title>Real estate</title>
    <link rel="stylesheet" href="style.css">
    
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <style>
            .properties-container .box .content{
               display: flex;
               justify-content: space-between;
               margin-top: 2rem;
               }
            .properties-container .box .content .text h3,.text a{
            font-weight: 500;
            color: black;
}
            </style>
</head>
<body>
    <header>
        <div class="nav container">
            <a href="home.php" class="logo"><i class='bx bxs-building-house'></i>Real Estate</a>
        <input type="checkbox" name="" id="menu">
        <label for="menu" <i class="bx bx-menu" id="menu-icon" ></i>> </label>
        <!--list-->
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="#properties">Properties</a></li>
            <li><a href="contacts.php">Contact</a></li>
        </ul>
        <span>Welcome :<span style="padding-left:10px;font-weight:bold;text-transform: uppercase;"><?php echo $username; ?></span></span>
        <a href="logout.php" class="btn">logout</a>

    </div>
    </header>
    <section class="home container" id="home">
    
        <div class="home-text">
            <h1>Find Your Perfect Place<br>To Live In Mangalore</h1>
            <a href="#about" class="btn">Learn More</a>
        </div>
    </section>

    <!--about-->
    <section class="about container" id="about"> 
        <div class="about-img">
            <img src="img/i2.jpg" alt="">
            </div>
            <div class="about-text">
            <span>About Us</span>
            <h2>We Provide The Best Property<br>In Mangalore.</h2>
            <p>We have projects that have modernized and reinvigorated the coastal city of Mangalore. 
                we focus on modern design with
                distinct architecture and world-class amenities 
                for gracious living. We don't just build buildings but also lifestyles!
                 Our projects are aesthetically Vastu-oriented and innovative,
                 helping you build your dream home into reality.</p>
            <p style="padding:0.1rem">
             And we will provide the best property or houses in mangalore, In a Decent price.</p>
        </div> 
    </section>
    <!--sales-->
    <section class="sales container" id="sale">
        <div class="box">
            <i class='bx bx-user'></i>
            <h3>Make Your Dream True</h3>
        </div>
        <div class="box">
            <i class='bx bx-desktop'></i>
            <h3>Start Your New Relation With Us</h3>
        </div>
        <div class="box">
            <i class='bx bx-home-alt'></i>
            <h3>Enjoy Your New Home</h3>
        </div>
    </section>
    <!--property-->
    <section class="properties container" id="properties">
        <div class="heading">
            <span></span>
            <h2>Our Featured Properties</h2>
            <p>Most Loved Properties<br>In Mangalore</p>
        </div>
        <div class="properties-container container">
            <!--box1-->
            <div class="box">
                <img src="img/i1.jpg" alt="">
                <h3>22,20,000 INR</h3>
                <div class="content">
                    <div class="text">
                        <a href="property1.php">West Side</a>
                        <p>Balmatta,DK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span>4</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                   </div>
                </div>

            </div>
            <!--box2-->
            <div class="box">
                <img src="img/re.jpg" alt="">
                <h3>40,50,000 INR</h3>
                <div class="content">
                    <div class="text">
                        <a href="property2.php">The palace</a>
                        <p>Pumpwell.DK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span>5</span></i>
                        <i class='bx bx-bath'><span>4</span></i>
                   </div>
                </div>

            </div>
            <!--box3-->
            <div class="box">
                <img src="img/i3.jpg" alt="">
                <h3>33,20,000 INR</h3>
                <div class="content">
                    <div class="text">
                    <a href="property3.php">The Skyside</a>
                        <p>Nanthoor.DK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span>2</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                   </div>
                </div>

            </div>
             <!--box4-->
             <div class="box">
                <img src="img/i4.jpg" alt="">
                <h3>20,00,000 INR</h3>
                <div class="content">
                    <div class="text">
                        <a href="property4.php">Prestige Valley</a>
                        <p>Hampankatta,DK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span>5</span></i>
                        <i class='bx bx-bath'><span>3</span></i>
                   </div>
                </div>

            </div>
             <!--box5-->
             <div class="box">
                <img src="img/i5.jpg" alt="">
                <h3>17,00,000 INR</h3>
                <div class="content">
                    <div class="text">
                     <a href="property5.php">Marian Park</a>
                        <p>Mallikatte.DK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span>3</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                   </div>
                </div>

            </div>
             <!--box6-->
             <div class="box">
                <img src="img/i10.jpg" alt="">
                <h3>45,20,000 INR</h3>
                <div class="content">
                    <div class="text">
                         <a href="property6.php">Inland Pacific</a>
                        <p>Bondel,DK</p>
                    </div>
                    <div class="icon">
                        <i class='bx bx-bed' ><span>4</span></i>
                        <i class='bx bx-bath'><span>2</span></i>
                   </div>
                </div>

            </div>
        </div>
    </section>

    <!--footer-->
    <section class="footer">
        <div class="footer-container container">
            <h2>Real Estate</h2>
            <div class="footer-box">
                <h3>Quick Links</h3>
                <a href="#home">Home</a>
                <a href="#about">About Us</a>
                <a href="#properties">Properties</a>
                <a href="contacts.php">Contact</a>
            </div>
            <div class="footer-box">
                <h3>Locations</h3>
                <a href="#properties">Balmatta</a>
                <a href="#properties">Pumpwell</a>
                <a href="#properties">Nanthoor</a>
                <a href="#properties">Hampankatta....</a>

            </div>
            <div class="footer-box">
                <h3>Contacts</h3>
                <a href="#">+91 9108756368</a>
                <a href="#">jnapakm@gmail.com</a>
                <a href="#">You Can Follow Us On: </a>
                <div class="social">
                    <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
                    <a href="https://www.linkedin.com/"><i class='bx bxl-linkedin'></i></a>
                    <a href="https://www.github.com/"><i class='bx bxl-github'></i></a>
                    <a href="https://www.instagram.com/"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>
        </div>

    </section>
    <div class="copyright">
        <p>&#169; jnapak M  2023</p>
    </div>
</body>
</html>