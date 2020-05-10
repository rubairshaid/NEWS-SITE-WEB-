<?php
session_start();
require "connection.php";
if (isset($_SESSION["admin"]))
{
    unset($_SESSION["admin"]);
}
if (isset($_SESSION["editor"]))
{
    unset($_SESSION["editor"]);
}
if (isset($_SESSION['author']))
{
    unset($_SESSION['author']);
}


if (!isset($_POST['username']) || !isset($_POST['pass']))
{
    header("location:login.html");
}

$Username = $_POST["username"];
$Pass = $_POST["pass"];

$newUserName = mysqli_real_escape_String($conn , $Username);
$newPass = mysqli_real_escape_String($conn , $Pass);

 $query = "SELECT * FROM user WHERE UserName='$newUserName' AND Password='$newPass'";
 $result = mysqli_query($conn , $query);
 if(!$result)
 {
       header("location:login.html");
 }
 else{
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
        else if ($user["Role"]==1)
        {
            $_SESSION["admin"]=$Username;
            header("location:adminOptions.html");
        }
        else if ($user["Role"]==2){

            $_SESSION["editor"]=$Username;
            header("location:editorTable.php");
        }
    }
 }
?>
 
 
                                                                               