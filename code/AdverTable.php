<?php
    session_start();

    if (!isset($_SESSION['admin']))
    {
    header("location:login.html");
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Advertising Table</title>
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
<h1> Advertisings</h1>
<?php
require "connection.php";

$query  = "SELECT * FROM advertising ORDER BY DatePosted DESC ";

$result = mysqli_query($conn , $query);
$row = mysqli_fetch_assoc($result);
echo "<div class='container'>";
echo "<table class='table table-striped'>";
?>
    <th>ID</th>
    <th>Title</th>
    <th>Published</th>
    <th>Location</th>
    <th>Activate</th>
    <th>Disactivate</th>
    
<?php
while ($row)
{
    if($row["active"]==1)
    $pub='YES';
    else
    $pub='NO';
    echo "<tr>";
    echo "<td>".$row["ID"]."</td>";
    echo "<td>".$row["Title"]."</td>";
    echo "<td>".$pub."</td>";
    echo "<td>".$row["Location"]."</td>";
    echo "<td><a href = 'AdverActivationForm.php?ID=".$row["ID"]."'>activate & publish</a></td>";
    echo "<td><a href = 'DisactivateAdver.php?ID=".$row["ID"]."'>Disactivate</a></td>";
    echo "</tr>";
    $row = mysqli_fetch_assoc($result);
}
echo "</table>";
echo "</div>";
?>

</body>
</html>
