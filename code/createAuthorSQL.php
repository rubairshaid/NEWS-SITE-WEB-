<?php
    require "connection.php";
    session_start();
    if(!isset($_SESSION["admin"]))
    {
        header("location:login.html");
    }


    if(!isset($_POST["username"]) || !isset($_POST["pass"]))
    {
        header("location:newAuthor.php");
    }

    $Username = $_POST['username'];
    $Pass = $_POST["pass"];
    $type = $_POST["type"];

    $query = "INSERT INTO user (UserName , Password , Role ) VALUES ('$Username' , '$Pass' , $type)";
    $result = mysqli_query($conn , $query);

if (!$result)
{
    echo "ERROR" .mysqli_error($conn);
}
else{
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