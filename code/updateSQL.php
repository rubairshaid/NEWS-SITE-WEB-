<?php
    require "connection.php";

if (!isset($_POST["title"]) || !isset($_POST["body"]) || !isset($_POST["category"])  ) 
{
    header ("location:ASTable.php");
}

$id = $_POST["id"];
$title = $_POST["title"];
$body = $_POST["body"];
$safeBody =htmlspecialchars($body);
$category = $_POST["category"];

$published = $_POST["Published"];

$query = "UPDATE news SET  Title='$title' , Body='$safeBody' ,Published=$published , Category='$category'  WHERE ID=$id ";

$result = mysqli_query($conn , $query);
if($result)
{
    header ("location:ASTable.php");
}
else
{
    echo "ERROR" .mysqli_error($conn);
}
?>