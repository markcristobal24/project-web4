
	<?php
	$xml = new domdocument("1.0");
	$xml->load("BSIT3EG2G1.xml");
	$games = $xml->getElementsByTagName("game");

	$flag = 0;
	$search = $_REQUEST["d"];

	foreach ($games as $game) {
		$id = $game->getAttribute("id");
		$name = $game->getElementsByTagName("name")->item(0)->nodeValue;
		if (($search == $id) || ($search == $name)) {
			$flag = 1;

			$id = $game->getAttribute("id");
			$name = $game->getElementsByTagName("name")->item(0)->nodeValue;
			$genre = $game->getElementsByTagName("genre")->item(0)->nodeValue;
			$company = $game->getElementsByTagName("company")->item(0)->nodeValue;
			$releaseDate = $game->getElementsByTagName("releaseDate")->item(0)->nodeValue;
			$revenue = $game->getElementsByTagName("revenue")->item(0)->nodeValue;
			$gamePic = $game->getElementsByTagName("gamePic")->item(0)->nodeValue;

			echo "<br>";
			echo "
				<div class='game'>
					<div class='picGame'><img src='data:image;base64,".$gamePic."' height='300px' width='auto'></div>
					<div class='id'>$id</div>
					<div class='name'>$name</div>
					<div class='genre'>$genre</div>
					<div class='date'>$releaseDate</div>
					<div class='company'>$company</div>
					<div class='revenue'>$revenue</div>
				</div>
				";
			
			
			break;
		}
	}
	if ($flag == 0)
		echo '<span style="color: white;">No record found.</span><a href="HomePage.php" style=color:white;">Back</a>';
	?>
	

