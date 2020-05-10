<?php
require "connection.php";

$id = $_GET["ID"];

if(is_numeric($id))
{
    $query ="DELETE FROM news WHERE ID = $id ";
    $result = mysqli_query($conn , $query);

    if ($result)
    {
        header("location:ASTable.php");
    }
    else{
        echo "ERROR ". mysqli_error($conn);
    }
}
else{
    header("location:ASTable.php");
}
?>