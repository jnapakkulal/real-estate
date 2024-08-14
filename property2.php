<?php
session_start();

if(!isset($_SESSION['name'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.jpg">
    <link rel="stylesheet" href="style2.css">
    <title>Real Estate</title>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<header>
        <div class="nav container">
            <a href="" class="logo"><i class='bx bxs-building-house'></i>Real Estate</a>
        <input type="checkbox" name="" id="menu">
        <label for="menu" class='bx bx-menu' id="menu-icon" ></i>> </label>
        <a href="home.php #properties" class="btn" style="margin-top:4px">Back</a>

    </div>
    </header>

    <section style="max-width:70%;margin-left:15%">
       <div class="head">
        <h1 style="font-size:40px;margin-bottom:3%;padding-top: 1rem;">The Palace</h1>
       </div>
       <div>
        <span style="color:red;font-size:22px">40,50,000 INR</span>
       </div>
       <div style="padding-top:2rem">
        <img src="img/re.jpg" height="600px" style="border-radius:2rem 2rem 2rem 2rem">
       </div>




       <div>
        <h2 style="font-size:19px;padding-top:2.5rem">Property Description</h2>
      </div>

      <div style="width:60%;coolor:2B2B2B;;padding-top:1.5rem;font-size:15px;justify:content">
        <p>A 5 BHK house is a five-bedroom, four-bathroom house. 
            It is typically the biggest type of house, And it is a comfortable and spacious home for a Joint family or a Nuclear family. 
            The bedrooms are typically of a good size, and there is enough space for a living room, a dining room, and a kitchen.</p>
       
      </div>




<style>
    .class span{
        font-weight:bold;
        color:#000
    }
</style>






      <div style="padding-top:4rem" class="class">

            <div style="display:inline-block;margin-right:80px">
            <svg preserveAspectRatio="xMidYMid meet" data-bbox="28.153 28.153 143.693 143.693" viewBox="28.153 28.153 143.693 143.693" height="30" width="30" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true"><defs><style>#comp-jpqo4bqu svg [data-color="1"] {fill: #B2BECF;}</style></defs>
    <g>
        <path d="M28.153 28.153v143.693h143.693V28.153H28.153zm135.694 8v44.339H36.153V36.153h127.694zM36.153 163.847V88.492h127.693v75.354H36.153z" fill="#000001" data-color="1"></path>
        <path d="M96.246 41.723H43.661v31.262h52.585V41.723zm-8 23.261H51.661V49.723h36.585v15.261z" fill="#000001" data-color="1"></path>
        <path d="M156.339 41.723h-52.585v31.262h52.585V41.723zm-8 23.261h-36.585V49.723h36.585v15.261z" fill="#000001" data-color="1"></path>
    </g>
</svg>
                <p style="padding-top:10px;padding-bottom:10px">Bedrooms</p>
                <span>5</span>
            </div>




            <div style="display:inline-block;margin-right:80px">
            <svg preserveAspectRatio="xMidYMid meet" data-bbox="30.57 30.57 138.86 138.86" viewBox="30.57 30.57 138.86 138.86" height="30" width="30" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true"><defs><style>#comp-jpqo4bs4 svg [data-color="1"] {fill: #B2BECF;}</style></defs>
    <g>
        <path d="M30.57 30.57v138.86h138.86V30.57H30.57zm130.86 130.86H38.57V38.57h122.86v122.86z" fill="#000001" data-color="1"></path>
        <path d="M87.175 112.825h-41.65v41.649h41.649v-41.649zm-8 33.65h-25.65v-25.649h25.649v25.649z" fill="#000001" data-color="1"></path>
    </g>
</svg>
            <p style="padding-top:10px;padding-bottom:10px">Sqft</p>
                <span>3000 ft</span>
            </div> 
            


            
            <div style="display:inline-block;margin-right:80px">
            <svg preserveAspectRatio="xMidYMid meet" data-bbox="28.932 28.931 143.122 142.137" viewBox="28.932 28.931 143.122 142.137" height="30" width="30" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true"><defs><style>#comp-jpqo4brf svg [data-color="1"] {fill: #B2BECF;}</style></defs>
    <g>
        <path d="M47.107 111.33l11.498 51.738H36.932V36.932h18.14l4.775 12.734 7.49-2.809-6.723-17.926H28.932v142.137H158.78l13.274-59.738H47.107zm105.255 51.738H66.801L57.08 119.33h105.002l-9.72 43.738z" fill="#000001" data-color="1"></path>
    </g>
</svg>
            <p style="padding-top:10px;padding-bottom:10px">Bathrooms</p>
                <span>4</span>
            </div>

      </div>




      <div style="padding-top:4rem" class="class">

<div style="display:inline-block;margin-right:110px">
<svg preserveAspectRatio="xMidYMid meet" data-bbox="34.57 31.149 130.859 137.702" viewBox="34.57 31.149 130.859 137.702" height="30" width="30" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true"><defs><style>#comp-jpr06hah svg [data-color="1"] {fill: #B2BECF;}</style></defs>
    <g>
        <path fill="#000001" d="M165.429 160.851v8H34.57v-8h130.859z" data-color="1"></path>
        <path fill="#000001" d="M165.429 96v8H34.57v-8h130.859z" data-color="1"></path>
        <path fill="#000001" d="M165.429 31.149v8H34.57v-8h130.859z" data-color="1"></path>
        <path fill="#000001" d="M99.663 52.766v8H46.557v-8h53.106z" data-color="1"></path>
        <path fill="#000001" d="M119.685 74.383v8H66.579v-8h53.106z" data-color="1"></path>
        <path fill="#000001" d="M157.872 117.617v8h-53.106v-8h53.106z" data-color="1"></path>
        <path fill="#000001" d="M133.106 139.234v8H80v-8h53.106z" data-color="1"></path>
    </g>
</svg>
    <p style="padding-top:10px;padding-bottom:10px">Levels</p>
    <span>2</span>
</div>




<div style="display:inline-block;margin-right:80px">
<svg preserveAspectRatio="xMidYMid meet" data-bbox="50.836 31.854 98.328 126.783" viewBox="50.836 31.854 98.328 126.783" height="30" width="30" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true"><defs><style>#comp-jpr05y6r svg [data-color="1"] {fill: #B2BECF;}</style></defs>
    <g>
        <path d="M100 31.854c-27.109 0-49.164 22.055-49.164 49.164 0 26.254 44.393 72.663 46.282 74.626l2.882 2.993 2.882-2.993c1.89-1.963 46.282-48.372 46.282-74.626 0-27.109-22.055-49.164-49.164-49.164zm0 115.181c-13.717-14.854-41.164-48.246-41.164-66.017 0-22.698 18.466-41.164 41.164-41.164s41.164 18.466 41.164 41.164c0 17.771-27.447 51.164-41.164 66.017z" fill="#000001" data-color="1"></path>
        <path d="M100 62.648c-10.129 0-18.37 8.241-18.37 18.37s8.241 18.37 18.37 18.37 18.37-8.241 18.37-18.37-8.241-18.37-18.37-18.37zm0 28.741c-5.718 0-10.37-4.652-10.37-10.37s4.652-10.37 10.37-10.37 10.37 4.652 10.37 10.37-4.652 10.37-10.37 10.37z" fill="#000001" data-color="1"></path>
    </g>
</svg>
<p style="padding-top:10px;padding-bottom:10px">Location</p>
    <span>Pumpwell</span>
</div> 






</div>
<!--contact form style-->

<style>

input[name=name] {
  width: 150%;
  /* padding: 12px 20px; */
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #000;
  outline:none;
}
input[name=lname] {
  width: 150%;
  /* padding: 12px 20px; */
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #000;
  outline:none;
}
input[name=email] {
  width: 50%;
  /* padding: 12px 20px; */
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #000;
  outline:none;
}
input[name=message] {
  width: 50%;
  /* padding: 12px 20px; */
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  border-bottom: 2px solid #000;
  outline:none;
}
.submit{
    padding: 8px 22px;
background: var(--main-color);
color: var(--bg-color) ;
border-radius: 5rem;
border-color:var(--main-color);
}
.submit:hover{
    background: #3492fd;

}
</style>
<!--contact form -->

<div style="padding-top:5rem">
<p style="font-size:23px">CONTACT US</p>

<div>
    <form action="process.php"  method="POST">
    <div style="display:inline;margin-right:45px;"><input type="radio" value="The Palace" name="propertyradio" style="margin-right:10px" checked>The Palace</div>

    <div style="padding-top:2rem">
        <div style="display:inline-block;margin-right:15%"><p>First Name</p><input type="text" name="name" style="input" id="" required></div>
        <div style="display:inline-block"><p>Last Name</p><input type="text" name="lname" id="" required></div>
    </div>
    
    <br><br>
    <p>Email<span style="color:red;">*</span></p><input type="email" name="email" id="" required><br><br>

<p>Interested in:</p><br>
<div style="display:inline;margin-right:45px"><input type="radio" value="buy" name="radio" style="margin-right:10px">Buy    </div>

<div style="display:inline;margin-right:45px"><input type="radio" value="rent" name="radio" style="margin-right:10px"> Rent   </div> 


 <br><br><br>   <p>Message</p><input type="text" name="message" id="" required>
   <input type="submit" name="submit" value="Submit" class="submit" style="margin-left:14px">
    </form>
</div>
</div>










    </section>

    


    <!--footer-->
    <section class="footer">
        <div class="footer-container container">
            <h2>Real Estate</h2>
            <div class="footer-box">
                <h3>Quick Links</h3>
                <a href="home.php #home">Home</a>
                <a href="home.php #about">About Us</a>
                <a href="home.php #properties">Properties</a>
                <a href="contacts.php">Contact</a>
            </div>
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
                <a href="#">You Can Follow Us On:</a>
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
    
</body>
</html>