<?php
    session_start();
    require "connection.php";
    if (!$_SESSION["editor"])
    {
        header("location:login.html");
    }
    if (!isset($_GET["ID"]) || !isset($_GET["Published"]))
    {
        header("location:editorTable.php");
    }
    
    $id=$_GET["ID"];
    if($_GET["Published"]==1)
    $publish=0;
    else 
    $publish=1;

    $query = "UPDATE news SET Published=$publish WHERE ID=$id";

    $result = mysqli_query($conn , $query);
    if($result)
    {
        header("location:editorTable.php");
    }
    else
    {
        echo "ERROR" .mysqli_error($conn);
    }
?>