
<?php 
require "connection.php";
$query = "SELECT * FROM news WHERE Published=1  ORDER BY DatePosted DESC LIMIT 5" ;
$news = mysqli_query($conn , $query);
$new = mysqli_fetch_assoc($news);
?>
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
