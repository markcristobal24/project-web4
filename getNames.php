<?php

$gName = ucwords($_REQUEST["q"]); //ucwords capital first letter of words
$hint = "";


$xml = new domdocument("1.0");
$xml->load("BSIT3EG2G1.xml");
$games = $xml->getElementsByTagName("name");

$flag = 0;


foreach ($games as $game) // lookup all hints from array
{

    $gameName = $game->nodeValue;

    if ($gName == substr($gameName, 0, strlen($gName))) //test if input has a match 
    {
        $flag = 1;
        if ($hint == "") //if $hint has no value yet simply copy the matching name
        $hint = "<div onclick='searchGame(`" . $gameName . "`); document.getElementById(`search`).value=`$gameName`' class='suggestion-result'>$gameName</div>";
        else //if there is an existing value already,append next names with comma
        $hint .= "<div onclick='searchGame(`" . $gameName . "`); document.getElementById(`search`).value=`$gameName`' class='suggestion-result'>$gameName</div>";
    }
}
if ($hint == "") //if no matching name 
    echo "No suggestion.";
else //else display updated value of $hint
    echo $hint;
?>