
	<?php
	$xml = new domdocument("1.0");
	$xml->load("BSIT3EG2G1.xml");
	$games = $xml->getElementsByTagName("game");

	$searchName = $_REQUEST["name"];

	foreach ($games as $game) {
		$name = $game->getElementsByTagName("name")->item(0)->nodeValue;

		if ($searchName == $name) {
			$xml->getElementsByTagName("games")->item(0)->removeChild($game);
			$xml->save("BSIT3EG2G1.xml");
			echo "<p style='color: white; text-align: center;'>Record Deleted!<br><a href='HomePage.php' style='color: white; margin-top: 10px; display: inline-block; padding: 6px 12px; background-color: #337ab7; text-decoration: none; border: 1px solid #2e6da4; border-radius: 4px;'>Back</a></p>

		";
			break;
		}
	}
	?>
