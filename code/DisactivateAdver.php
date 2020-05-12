<?php
require "connection.php";

if(!isset($_GET["ID"]))
{
    header("location:AdverTable.php");
}
$ID=$_GET["ID"];
$activate = "UPDATE advertising SET  Location='----------' , active=0  WHERE ID=$ID ";
$result = mysqli_query($conn , $activate);
if(!$result)
{
    echo "ERROR" .mysqli_error($conn);
}
else{
    header("location:AdverTable.php");
}
?>