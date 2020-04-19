<?php
session_start();
require "connection.php";

if (!isset($_POST['username']) || !isset($_POST['pass']))
{
    header("location:login.html");
}

$Username = $_POST["username"];
$Pass = $_POST["pass"];

 $query = "SELECT * FROM user WHERE UserName='$Username' ";
 $result = mysqli_query($conn , $query);
 if(!$result)
 {
       header("location:login.html");
 }
$user = mysqli_fetch_assoc($result);
if ($Pass != $user["Password"])
{
    header("location:login.html");
}
else {
    if ($user["Role"]==3)
    {
        $_SESSION['author']=$Username;
        header("location:authorAddNews.php");
    }
}
?>
 
 
