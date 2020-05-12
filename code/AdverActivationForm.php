<?php
require "connection.php";

session_start();
if (!isset($_SESSION['admin']))
{
header("location:login.html");
}
$ID=$_GET["ID"];
$query  = "SELECT * FROM advertising WHERE ID=$ID";

$result = mysqli_query($conn , $query);
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        
        button {
            width: 50% !important;
            margin-left: auto !important;;
            margin-right: auto !important;;
            display: block !important;;
            font-family: none !important;;
            font-size: x-large !important;;
            background-color: white !important;;
            border : 1px solid black !important;
        }
        .container{
            border: 5px solid black;
            border-radius: 20px;
            margin-top: 150px;
            width: 50%;
            background-color: lightgray;
        }
        input{
            margin: 20px 0 0 150px !important;
        }
    </style>
</head>
<body>
<div class="container">
        <h1 style="margin : 40px ; text-align: center; "> Activate <?php echo $row["Title"]?></h1>
        <form class="form-horizontal" action="AdverActivation.php" method = "post"  >
            <input type = "hidden" name = "id" value="<?php echo $row["ID"]?>">
            <div class="form-group">
                <label class="control-label col-sm-2"> Location :</label><br><br>
                
                    <input type="radio"   name = "location" value = 'A' required>  A<br>
                    <input type="radio"   name = "location" value =  'B' required>  B<br>
                    <input type="radio"   name = "location" value =  'C' required>  C<br>
                    <input type="radio"   name = "location" value =  'D' required>  D<br>
                    <input type="radio"   name = "location" value =  'E' required>  E<br>

            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button style = "width: 50%;" type="submit" class="btn btn-default">Activate</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>