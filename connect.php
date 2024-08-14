<?php
session_start();
$db = new mysqli("localhost","root","","estate");
$action=$_POST['action'];

if($action==="Sign Up"){
    $username=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

        $query="INSERT INTO user(name,email,password,phone)VALUES('$username','$email','$password','$phone')";
if($db->query($query)==TRUE){
    echo"<script>alert('Registration succesful')</script>";
    echo"<script>window.location.href='login.php'</script>";

} 
   

}elseif($action==="Log In"){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query="SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result=$db->query($query);
    $row=mysqli_fetch_assoc($result);

    if($result->num_rows==1){
        $_SESSION['name']=$row['name'];
        // header("Location:home.php");
        echo"<script>window.location.href='home.php'</script>";
    }else{
        echo"<script>alert('Invalid username or password')</script>";
        echo"<script>window.location.href='login.php'</script>";
    }
}
$db->close();
?>