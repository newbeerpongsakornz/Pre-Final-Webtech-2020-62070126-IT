<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newbeer Spotify</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";
        $res = file_get_contents($url);
        $data = json_decode($res);

        echo "<div>";
        for ($i = 0; $i < sizeof($data->tracks->items); $i++){
            
            $song = $data->tracks->items[$i]->album;

            echo "<div class='myCard'>";
            echo "<img src='".$song->images[0]->url."' width='100%'>";
            echo "<div>";
            echo "<b>".$song->name."</b><br>";
            echo "Artist: ".$song->artists[0]->name;
            for ($j = 1; $j < sizeof($song->artists); $j++)
            {
                echo ", ".$song->artists[$j]->name;
            }
            echo "<br>Release date: ".$song->release_date."<br>";
            echo "Avaliable: ".sizeof($song->available_markets)." countries";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        
    ?>
</body>
</html>