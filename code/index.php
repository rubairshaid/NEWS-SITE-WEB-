<?php
    require "connection.php";
?>


<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>News Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</head>
<body>
    
<?php

$query = "SELECT * FROM news WHERE Published=1  ORDER BY DatePosted DESC LIMIT 9" ;
$news = mysqli_query($conn , $query);
$new = mysqli_fetch_assoc($news);
?>
    <div class= "header">
        <div class = "logo" style = "float: right;  width : 30%;">
            <img style = "height : 100px ; float: right; " src="https://i.pinimg.com/originals/26/91/f2/2691f2fa1a0f078f5f274edf7fea6763.png">
        </div>
        <div class = "containerADVER1">
            <div class = "adver1">
                    <h3>Advertising</h3>
            </div>
        </div>
    </div>   
    <div class= "navBar"  >
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
            <a class="navbar-brand" href="javascript:void(0)">Logo</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navb">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navb">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0)">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="javascript:void(0)">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="button">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <div class = "latestNewsContainer">
        <div class= "latestnews">
            <h5 style = "text-align: center;">اخر الأخبار</h5>
        </div>
        <div class = "news">

        </div>
    </div>
    <div class= "adver2AND3">
        <div class=  "adver2">
            <h3>advertising 2</h3>
        </div>
        <div class= "adver3">
            <h3>advertising 3</h3>
        </div>
    </div>


    <div class="featuredContainer Alink">
        <div class="mainNews">
            <a href="contentPage.php?ID=<?php echo $new["ID"];?>"><img src="<?php echo $new["Image"] ; ?>" style="width: 100%; height: 330px;">
                <p style = "background-color: #da4247;height: 30px;"><?php echo $new["Title"] ; ?></p>
            </a>
        </div>
        <div class="leftFeatured ">
    <?php

        $cnt = 4 ;

        while ($cnt>0)
        {
            $new = mysqli_fetch_assoc($news);
            echo "<a href = 'contentPage.php?ID=".$new["ID"]."' style = 'height: 25%;'>";
                echo  "  <div class='part'>";
        
                    echo "  <div class='paraINFEATURED'>";
                        echo   "<p>".$new["Title"]."</p>";
                    echo   " </div>";
                    echo    "<img src='".$new["Image"]."' class='imageFeatured'>";
        
                echo "</div>";
            echo "</a>";
            $cnt--;
        }  
        echo "</div>"; 
            echo "</div>";
    ?>
      
    <div class= "adver4">
        <h3>advertising4</h3>
    </div>
    <div class= "mostCommented">
        <h3>most Commented</h3>
    </div>
    <div class= "adver5">
        <h3>advertising 5</h3>
    </div>
    <div class = "secondPartOfNews Alink">

    <?php
    $cnt = 4;

    while ($cnt>0)
    {
        $new = mysqli_fetch_assoc($news);
        echo "<a href = 'contentPage.php?ID=".$new["ID"]."' style = 'width: 25%;padding : 15px'>";
            echo "<div class = 'partB'>";
                echo "<img src = '" .$new["Image"] ."' style = 'height: 70px; width: 100%;'>";
                echo "<p>".$new["Title"]."</p>";
            echo "</div>";
        echo "</a>";

        $cnt--;
    }
    
    ?>
    </div>

    <div class= "mostViewed">
        <div class= "mostViewedpart">
            <div class = "mostViewedpartnews">

            </div>
            <div class = "mostViewedpartnews">

            </div>
        </div>
        <div class= "mostViewedpart">
            <div class = "mostViewedpartnews">
            </div>
            <div class = "mostViewedpartnews">
            </div>
        </div>
    </div>
</body>
</html>