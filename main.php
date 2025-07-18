<?php

require_once "modules/game.php";
require_once "modules/tui.php";
require_once "modules/visuals.php";

$startAuswahl = ["Eine Reise beginnen", "Deine Reise fortsetzen", "Eine Pause machen"];

drawTitel();
drawTitelBox();
drawAsciiArt(37, 30, "assets/galaxy.ans");
drawAsciiArt(15, 180, "assets/saturn2.ans");
drawAsciiArt(0,0, "assets/rocket.ans");

$startMenu = select("\033[31;119H\033[38;5;224mWas willst du tun:", $startAuswahl, 33, 117);

// ! Zeile 33 ist mitte! also 33;119
$game = New GameManager();

switch ($startMenu) {

    case "Eine Reise beginnen":

        $game -> anfänge();
        break;

    case "Deine Reise fortsetzen":
        
        $game -> fortsetzen();
        break;

    case "Eine Pause machen":
        exit(0);

    default:

        echo "\033[2J";
        echo "\033[33;114HEin fehler ist aufgetreten exit code 1";
        exit(1);

}

?>
