<?php
    session_start();

    if (!isset($_SESSION["author"]))
    {
        header("location:login.html");
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add News</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        textarea{
            width : 100%;
            border: 1px solid #ccc;
            border-radius: 4px;
            color : #555;
            padding: 6px 12px;
        }
        button {
            width: 50% !important;
            margin-left: auto !important;;
            margin-right: auto !important;;
            display: block !important;;
            font-family: none !important;;
            font-size: x-large !important;;
            background-color: darkgray !important;;
        }
        .myNews{
            height: 70px;
            width: 200px;
            background-color: lightgrey ;
            float: left;
            margin-top: 20px;
            margin-left: 20px;
            border: 2px solid black;
            border-radius: 20px;
            font-size: xx-large;
            display: flex;
            justify-content: center;
            align-items: center;
            color:black;
        }
    </style>
</head>

<body style = "font-family: none">
    <div >
        <a href = "MyNews.php"><input class = "myNews" type = "submit" value = "My News"></input></a>
    </div>
    <div class="container">
        <h1 style="margin : 40px ; text-align: center; "> Add News Articles</h1>
        
        <form class="form-horizontal" action="AutherAddN.php" method = "post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2">Title : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter the Title of the News Articles" name ="title" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Body :</label>
                <div class="col-sm-10">
                    <textarea rows="20"   placeholder="Enter the content" name = "body" required></textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Category :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Category" name = "category" required>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">Image :</label>
                <div class="col-sm-10">
                    <input type="file" name="file"  required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button style = "width: 50%;" type="submit" class="btn btn-default">Add News Articles</button>
                </div>
            </div>
        </form>
    </>

</body>

</html>