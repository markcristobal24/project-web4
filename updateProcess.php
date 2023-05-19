
	<?php
	$xml = new domdocument("1.0");
	$xml->formatOutput = true;
	$xml->preserveWhiteSpace = false;
	$xml->load("BSIT3EG2G1.xml");

	$searchName = $_REQUEST["name"];
	$company = $_REQUEST["newCompany"];
	$revenue = $_REQUEST["newRevenue"];
	$gamePic = $_FILES['gamePic']['tmp_name'];
	
	$flag = 0;
	$games = $xml->getElementsByTagName("game");
	foreach ($games as $game) {
		$name = $game->getElementsByTagName("name")->item(0)->nodeValue;
		$id = $game->getAttribute("id");
		if ($searchName == $name) {
			$flag = 1;
			$gameName = $game->getElementsByTagName("name")->item(0)->nodeValue;
			$gameGenre = $game->getElementsByTagName("genre")->item(0)->nodeValue;
			$gameRelDate = $game->getElementsByTagName("releaseDate")->item(0)->nodeValue;

			$newNode = $xml->createElement("game");
			$name = $xml->createElement("name", $gameName);
			$genre = $xml->createElement("genre", $gameGenre);
			$releaseDate = $xml->createElement("releaseDate", $gameRelDate);

			$revenue = $xml->createElement("revenue", '$' . $revenue);
			$company = $xml->createElement("company", $company);


			$newGamePic = $xml -> createElement("gamePic");
			$imageData = file_get_contents($gamePic);
			$base64 = base64_encode($imageData);
			$cdata = $xml -> createCDATASection($base64);
			$newGamePic -> appendChild($cdata);
	
			
			$newNode->appendChild($name);
			$newNode->appendChild($genre);
			$newNode->appendChild($company);
			$newNode->appendChild($releaseDate);
			$newNode->appendChild($revenue);
			$newNode->appendChild($newGamePic);


			$newNode->setAttribute("id", "$id");

			$oldNode = $game;

			$xml->getElementsByTagName("games")->item(0)->replaceChild($newNode, $oldNode);
			$xml->save("BSIT3EG2G1.xml");

			echo "<p style='color: white; text-align: center;'>Details Updated...<br><a href='HomePage.php' style='color: white; margin-top: 10px; display: inline-block; padding: 6px 12px; background-color: #337ab7; text-decoration: none; border: 1px solid #2e6da4; border-radius: 4px;'>Back</a></p>

		";


			break;
		}
	}
	if ($flag == 0)
		echo "<p style='color: white; text-align: center;'>Modification Failed.<br><a href='HomePage.php' style='color: white; margin-top: 10px; display: inline-block; padding: 6px 12px; background-color: #337ab7; text-decoration: none; border: 1px solid #2e6da4; border-radius: 4px;'>Back</a></p>

	";
	?>
