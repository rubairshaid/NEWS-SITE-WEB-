<?php

require "connection.php";
if (!isset($_POST["title"]))
header("location:AddAdverForm.html");

$title = $_POST["title"];

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
            $fileDestination = "advertising/".$ImageName;
            move_uploaded_file($fileTmpName , $fileDestination);
        }
        else{
            echo "there is an Error ";
        }

    }
    else{
        echo "you cannot upload files of this type ";
    }


$query = "INSERT INTO advertising (Title , Image ,DatePosted ) VALUES ('$title' , '$ImageName' , NOW() )" ;
$result = mysqli_query($conn , $query);

if (!$result)
{
    echo "ERROR" .mysqli_error($conn);
}
else{
    header("location:AddAdverForm.html");
}
?>