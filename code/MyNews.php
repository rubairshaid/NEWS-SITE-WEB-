<?php
 session_start();
 require "connection.php";
 if (isset($_SESSION["author"]))
 {
     $user=$_SESSION["author"];
 }
else  if (isset($_SESSION["admin"]))
{
    $user=$_SESSION["admin"];
}
else
{
    header("location:login.html");
}
$query  = "SELECT * FROM news WHERE PublisherName='$user' ";
$result = mysqli_query($conn , $query);
if (!$result)
{
    echo "ERROR" .mysqli_error($conn);
}
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>
<head>
<title>News Articles Table</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style>
h1{
    text-shadow: 2px 2px 13px black;
    font-size: -webkit-xxx-large;
    text-align: center;
    margin: 40px;
    color: #d33a3a;
}


</style>
</head>
<body>
<h1> Your Articles</h1>
<?php

echo "<div class='container'>";
echo "<table class='table table-striped'>";
?>

    <th>Title</th>
    <th>Category</th>
    <th>published</th>
    
<?php
while ($row)
{
    if($row["Published"]==0)
    {
        $pub="NO";
    }
    else{ 
        $pub="YES";
    }
    echo "<tr>";
    echo "<td>".$row["Title"]."</td>";
    echo "<td>".$row["Category"]."</td>";
    echo "<td>".$pub."</td>";
    echo "</tr>";
    $row = mysqli_fetch_assoc($result);
}
echo "</table>";
echo "</div>";
?>

</body>
</html>
