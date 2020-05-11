<?php
    require "connection.php";
    session_start();
    if(!isset($_SESSION["admin"]))
    {
        header("location:login.html");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>create author</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    .centering{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width : 50%;
        padding: 20px;
        height: 70%;
        border-radius: 30px;
        background-color: teal;
        color: white;
        border: 2px solid black;
    }
</style>    
</head>
<body>

<div class="container " style = "height: 100%; display: flex; justify-content: center; align-items: center;">
    <div class="centering">
        <h2 style = "margin-bottom: 50px;">Create new Author / Editor</h2>
        <h4>(Enter the fields below to create a new Author / Editor)</h4>
  <form action="createAuthorSQL.php" method = "POST" style  = "width :100%; ">
    <div class="form-group">
      <label >UserName:</label>
      <input type="text" class="form-control"  placeholder="Enter UserName" name="username">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input class="form-control" id="pwd" placeholder="Enter password" name="pass">
    </div>
    <div class="form-group">

      <label class="control-label col-sm-2"> Type :</label>
      <input type="radio"   name = "type" value = 3 required>Author<br>
      <input type="radio"   name = "type" value =  2 required>Editor<br>
    </div>
    <button type="submit" class="btn btn-default">Create</button>
  </form>
</div>
</div>

</body>
</html>
