
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
			echo "Steam App ID already exist!";
		
			break;
		}
	}
	if ($flag == 0) {
		//$id = $_REQUEST["steamId"];
		$gameTitle = $_REQUEST["gameTitle"];
		$newGenre = $_REQUEST["genre"];
		$newCompany = $_REQUEST["company"];
		$newDate = $_REQUEST["date"];
		$newRevenue = $_REQUEST["revenue"];
		$gamePic = $_FILES['gamePic']['tmp_name'];

		$game = $xml->createElement("game");
		$name = $xml->createElement("name", $gameTitle);
		$genre = $xml->createElement("genre", $newGenre);
		$company = $xml->createElement("company", $newCompany);
		$date = $xml->createElement("releaseDate", $newDate);
		$revenue = $xml->createElement("revenue", '$' . $newRevenue);

		$newGamePic = $xml -> createElement("gamePic");
		$imageData = file_get_contents($gamePic);
		$base64 = base64_encode($imageData);
		$cdata = $xml -> createCDATASection($base64);
		$newGamePic -> appendChild($cdata);

		$game->appendChild($name);
		$game->appendChild($genre);
		$game->appendChild($company);
		$game->appendChild($date);
		$game->appendChild($revenue);
		$game -> appendChild ($newGamePic);

		$game->setAttribute("id", $steam);
		$xml->getElementsByTagName("games")->item(0)->appendchild($game);
		$xml->save("BSIT3EG2G1.xml");
		echo "<span style='font-size: 16px; color: white;'>Record saved...</span><a href='mainpage.php'>Back</a>";



	} 
	?>
