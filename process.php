<?php
$db = new mysqli("localhost","root","","estate");
$action=$_POST['submit'];

if($action==="Submit"){
    $propertyradio=$_POST['propertyradio'];
    $firstname=$_POST['name'];
    $lastname=$_POST['lname'];
    $email=$_POST['email'];
    $radio=$_POST['radio'];
    $message=$_POST['message'];

        $query="INSERT INTO contacts(propertyradio,name,lname,email,radio,message)VALUES('$propertyradio','$firstname','$lastname','$email','$radio','$message')";
if($db->query($query)==TRUE){
    echo"<script>alert('Submitted Succesfully')</script>";
    echo"<script>window.history.back();</script>";

} 
}
$db->close();
?>