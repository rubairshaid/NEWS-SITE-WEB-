<?php
require "connection.php";

session_start();
if (!isset($_SESSION['admin']))
{
header("location:login.html");
}
$ID= $_POST["id"];
$location=$_POST["location"];

$query  = "SELECT * FROM advertising WHERE Location='$location'";

$result = mysqli_query($conn , $query);
$row = mysqli_fetch_assoc($result);

if($row)
{
    echo "<h1>there is another advertising in this location </h1>";
}
else{
    $activate = "UPDATE advertising SET  Location='$location' , active=1  WHERE ID=$ID ";
    $resultActivate = mysqli_query($conn , $activate);
    if($resultActivate)
    {
        header("location:AdverTable.php");
    }
    else{
        echo "ERROR" .mysqli_error($conn);
    }
}

?>