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
<h1> Articles</h1>
<?php
require "connection.php";

$query  = "SELECT * FROM news ORDER BY DatePosted DESC ";

$result = mysqli_query($conn , $query);
$row = mysqli_fetch_assoc($result);
echo "<div class='container'>";
echo "<table class='table table-striped'>";
?>
    <th>ID</th>
    <th>Title</th>
    <th>Category</th>
    <th>Edit</th>
    <th>Delete</th>
<?php
while ($row)
{
    echo "<tr>";
    echo "<td>".$row["ID"]."</td>";
    echo "<td>".$row["Title"]."</td>";
    echo "<td>".$row["Category"]."</td>";
    echo "<td><a href = 'Editnew.php?ID=".$row["ID"]."'>Edit</a></td>";
    echo "<td><a href = 'Deletenew.php?ID=".$row["ID"]."'>Delete</a></td>";
    echo "</tr>";
    $row = mysqli_fetch_assoc($result);
}
echo "</table>";
echo "</div>";
?>

</body>
</html>
