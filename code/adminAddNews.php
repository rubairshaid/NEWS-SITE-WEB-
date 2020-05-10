<?php
    session_start();
require "connection.php"; 
if (! isset($_POST["title"]) || !isset($_POST["body"]) || !isset($_POST["category"]) || !isset($_POST["image"])) 
{
    header ("location:autherAddNews.html");
}

if (!isset($_SESSION["admin"]))
{
    header("location:login.html");
}

$title = $_POST["title"];
$body = $_POST["body"];
$safeBody =htmlspecialchars($body);
$category = $_POST["category"];
$image = $_POST["image"];
$published = $_POST["Published"];
$adminName=$_SESSION["admin"];
$query = "INSERT INTO news (Title , Body , DatePosted, Published, Category , Image, PublisherName ) VALUES ('$title' , '$safeBody' ,  NOW() , $published , '$category' , '$image' , '$adminName')" ;
$result = mysqli_query($conn , $query);

if (!$result)
{
    echo "ERROR" .mysqli_error($conn);
}
else
{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>added</title>
    <style>
        h1{
            text-align: center;
            margin-top: 300px;
            width: 50%;
            margin-left: auto;
            margin-right: auto;
            background-color: indianred;
            padding: 20px;
            border-radius: 20px;
            border: 2px solid;
}
    </style>
</head>
<body>
    <div>
        <h1 >Added successfully</h1>
    </div>
</body>
</html>
<?php
}
?>