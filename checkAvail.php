
    <?php
    $xml = new domdocument("1.0");
    $xml->formatOutput = true;
    $xml->preserveWhiteSpace = false;
    $xml->load("BSIT3EG2G1.xml");

    $getGames = $xml->getElementsByTagName("game");

    $steam = $_REQUEST["steamId"];
    $flag = 0;
    foreach ($getGames as $getGame) {
        $steamId = $getGame->getAttribute('id');
        if ($steam == $steamId) {
            $flag = 1;
            echo "<script> btnDisable(); </script>";
            echo "Steam App ID " . $steam . " already exist!";
            
            break;
        }
    }
    if ($flag == 0) {
        echo "Steam App ID " . $steam . " is available";
    }
    ?>
