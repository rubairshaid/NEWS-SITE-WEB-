<?php
    session_start();
    require "connection.php";

    if(!isset($_SESSION["editor"]))
    {
        header("location:login.html");
    }
?>

<!DOCTYPE html>
<html>
<head>
<title>NEWS</title>
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
    <th>Published</th>
    <th>Edit Publish</th>
<?php
$pub;
$pubNum;
while ($row)
{
    if($row["Published"]==0)
    {
    $pub="NO";$newpub="approve";
    }
    else{ 
        $pub="YES";
        $newpub="disapprove";
    }
    echo "<tr>";
    echo "<td>".$row["ID"]."</td>";
    echo "<td>".$row["Title"]."</td>";
    echo "<td>".$pub."</td>";
    echo "<td><a href = 'editPublish.php?ID=".$row["ID"]."&Published=".$row["Published"]."'>".$newpub."</a></td>";
    echo "</tr>";
    $row = mysqli_fetch_assoc($result);
}
echo "</table>";
echo "</div>";
?>

</body>
</html>
