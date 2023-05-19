<?php
            $xml = new domdocument("1.0");
            $xml->load("BSIT3EG2G1.xml");

            $games = $xml->getElementsByTagName("game");



            foreach ($games as $game) {
                $id = $game->getAttribute("id");
                $name = $game->getElementsByTagName("name")->item(0)->nodeValue;
                $genre = $game->getElementsByTagName("genre")->item(0)->nodeValue;
                $date = $game->getElementsByTagName("releaseDate")->item(0)->nodeValue;
                $company = $game->getElementsByTagName("company")->item(0)->nodeValue;
                $revenue = $game->getElementsByTagName("revenue")->item(0)->nodeValue;
                $gamePic = $game->getElementsByTagName("gamePic")->item(0)->nodeValue;
                echo "
			
				<div class='game'>
                    <div class='picGame'><img src='data:image;base64,".$gamePic."' height='300px' width='auto'></div>
					<div class='id'>$id</div>
					<div class='name'>$name</div>
					<div class='genre'>$genre</div>
					<div class='date'>$date</div>
					<div class='company'>$company</div>
					<div class='revenue'>$revenue</div>
				</div>
				";
            }
            ?>