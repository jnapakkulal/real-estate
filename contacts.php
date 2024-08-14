<?php
session_start();

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
    <title>Real Estate</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
     crossorigin="anonymous">
        <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <script src="index.js"></script>

        <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>




<script type="text/javascript">
   (function(){
      emailjs.init("FXnK3UQwTeoRM0rvJ");
   })();
</script>
        
</head>
<body>
    <header>
        <div class="nav container">
            <a href="" class="logo"><i class='bx bxs-building-house'></i>Real Estate</a>
        <input type="checkbox" name="" id="menu">
        <label for="menu" <i class='bx bx-menu' id="menu-icon" ></i>> </label>
        <div class="cont">
        </div>
        
    <div class="container border mt-3 bg-light">
        <div class="row">
            <div class="col-md-6 p-5 bg-primary text-white">
                <h1>Hi There!</h1>
                <h4>Any Queries.</h4>
            </div>
            <div class="col-md-6 py-3">
                <h1>Contact Form</h1>
                <div class="form-group">
                    <h5 for="name">Name</h5>
                    <input type="text" class="form-control" id="name" placeholder="Enter Your Name" required>
                </div>
                <div class="form-group">
                    <h5 for="name">Email</h5>
                    <input type="email" class="form-control" id="email" placeholder="Enter Your Mail" required>
                </div>
                <div class="form-group">
                    <h5 for="message">Message</h5>
                    <textarea id="message" rows="3" class="form-control" required></textarea>
                </div>
                <button class="btn btn-primary" onclick="sendMail()" >Submit</button>
            </div>

        </div>
    </div>
    
    
</body>
</html>