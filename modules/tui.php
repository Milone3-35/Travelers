<?php

function readKey(): string {

    $exePath = __DIR__ . DIRECTORY_SEPARATOR . 'readKey.exe';
    return trim(shell_exec("\"$exePath\""));

}

function drawMenu(string $prompt = "Was willst du tun?", array $options, int $reihe, int $spalte, int $position) {

    $reihe--;
    echo "\033[5m\033[{$reihe};{$spalte}H$prompt\n";
    echo "\033[0m";
    $reihe++;

    foreach ($options as $index => $option) {

        if ($index === $position) {
                $cursor = ">";

        } else {
            $cursor = " ";
        }

        if ($index === 0) {

            echo "\033[{$reihe};{$spalte}H";
            echo "$cursor $option\n";

        } else {

            $reihe++;
            echo "\033[{$reihe};{$spalte}H";
            echo "$cursor $option\n";

        }     
    }
}

function select(string $prompt = "Was willst du tun?",array $options, int $reihe, int $spalte): string {

    $position = 0;
    drawMenu($prompt, $options, $reihe, $spalte, $position);
    echo "\033[?25l";

    while (true) {

        $key = readKey();
        switch ($key) {

            case "UpArrow":
                
                if ($position > 0) $position--;
                drawMenu($prompt, $options, $reihe, $spalte, $position);
                continue 2;
            case "DownArrow":

                if ($position < count($options) - 1) $position++;
                drawMenu($prompt, $options, $reihe, $spalte, $position);
                continue 2;

            case "Enter":
                return $options[$position];

            default:
                continue 2;

        }
    }


}

?>