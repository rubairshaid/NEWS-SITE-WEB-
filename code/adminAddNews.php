<?php
    session_start();
require "connection.php"; 
if (! isset($_POST["title"]) || !isset($_POST["body"]) || !isset($_POST["category"])) 
{
    header ("location:adminAddNewsForm.php");
}

if (!isset($_SESSION["admin"]))
{
    header("location:login.html");
}

$title = $_POST["title"];
$body = $_POST["body"];
$safeBody =htmlspecialchars($body);
$category = $_POST["category"];
$published = $_POST["Published"];
$adminName=$_SESSION["admin"];


    $file = $_FILES["file"];
    $fileName = $_FILES["file"]["name"];
    $fileTmpName = $_FILES["file"]["tmp_name"];
    $fileError = $_FILES["file"]["error"];
    $fileType = $_FILES["file"]["type"];
    

    $fileExt = explode('.' , $fileName);
    $fileActulaExt = strtolower(end($fileExt));

    $allowed = array ('jpg' , 'jpeg' , 'png');

    if (in_array($fileActulaExt , $allowed))
    {
        if($fileError === 0 )
        {
            $ImageName = $fileExt[0].".".$fileActulaExt;
            $fileDestination = "images/".$ImageName;
            move_uploaded_file($fileTmpName , $fileDestination);
        }
        else{
            echo "there is an Error ";
        }

    }
    else{
        echo "you cannot upload files of this type ";
    }


$query = "INSERT INTO news (Title , Body , DatePosted, Published, Category , Image, PublisherName ) VALUES ('$title' , '$safeBody' ,  NOW() , $published , '$category' , '$ImageName' , '$adminName')" ;
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