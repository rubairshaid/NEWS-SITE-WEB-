<?php
require "connection.php";
$query = "SELECT * FROM news WHERE Published=1  ORDER BY DatePosted DESC LIMIT 9" ;
$news = mysqli_query($conn , $query);
$new = mysqli_fetch_assoc($news);
$new = mysqli_fetch_assoc($news);
$new = mysqli_fetch_assoc($news);
$new = mysqli_fetch_assoc($news);
$new = mysqli_fetch_assoc($news);

?>
<div class = "secondPartOfNews Alink">

<?php
$cnt = 4;

while ($cnt>0)
{
    $new = mysqli_fetch_assoc($news);
    echo "<a href = 'contentPage.php?ID=".$new["ID"]."' style = 'width: 25%;padding : 15px'>";
        echo "<div class = 'partB'>";
            echo "<img src = 'images/" .$new["Image"] ."' style = 'height: 70px; width: 100%;'>";
            echo "<p>".$new["Title"]."</p>";
        echo "</div>";
    echo "</a>";

    $cnt--;
}

?>
</div>

<?php
    $mostviewed= "SELECT * FROM news WHERE Published=1  ORDER BY views DESC LIMIT 4";
    $viewResult = mysqli_query($conn , $mostviewed);
    
    echo '<div class= "mostViewed" style = "margin-top:50px;">';

    $section=2 ; 
    $parts = 2 ; 

    while ($section>0)
    {
        
        echo '<div class= "mostViewedpart">';
        while($parts>0)
        {
            $viwesNews = mysqli_fetch_assoc($viewResult);
            echo "<a style ='padding  : 5px;color : black;' href = 'contentPage.php?ID=".$viwesNews["ID"]."' class = 'mostViewedpartnews'>";
            echo "<img src = 'images/" .$viwesNews["Image"] ."' style = 'height: 90px; width: 100%;'>";
            echo "<p>".$viwesNews["Title"]."</p>";
            echo '</a>';
            $parts--;
        }


        
        echo "</div>";
        $section--;
        $parts = 2 ;
    }
    echo '</div>';
    ?> 
    


