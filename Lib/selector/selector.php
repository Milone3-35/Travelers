<?php

function clearScreen() {

    echo "\033[2J";

}

function moveCursor(int $row, int $column) {

    echo "\033[{$row};{$column}H";

}
function drawOptions(string $prompt, array $options, int $position_row = 0 , int $position_column = 0 ) {

    clearScreen();
    moveCursor($position_row, $position_column);

    echo "\033[4m$prompt\n\033[24m";

    foreach ($options as $index => $option) {

        

        if ($index == 0) {

            echo "> $option\n";
            continue;

        } else {
        
            echo "  $option\n";

        }

    }

}

$array= array("Spiel Starten", "Spiel beenden");
$prompt = "Was willst du machen?";

function Select(string $prompt, array $options):string {

    drawOptions($prompt, $options);
    return ""; //change later
}

?>