<?php

function drawTitel() {

    echo "\033[2J";

    echo "\033[21;85H";
    echo "\033[38;5;202m        ████████╗██████╗  █████╗ ██╗   ██╗███████╗██╗     ███████╗██████╗ ███████";

    echo "\033[22;85H";
    echo "\033[38;5;202m        ╚══██╔══╝██╔══██╗██╔══██╗██║   ██║██╔════╝██║     ██╔════╝██╔══██╗██╔════╝";

    echo "\033[23;85H";
    echo "\033[38;5;202m           ██║   ██████╔╝███████║██║   ██║█████╗  ██║     █████╗  ██████╔╝███████╗";

    echo "\033[24;85H";
    echo "\033[38;5;202m           ██║   ██╔══██╗██╔══██║╚██╗ ██╔╝██╔══╝  ██║     ██╔══╝  ██╔══██╗╚════██║";

    echo "\033[25;85H";
    echo "\033[38;5;202m           ██║   ██║  ██║██║  ██║ ╚████╔╝ ███████╗███████╗███████╗██║  ██║███████║";

    echo "\033[26;85H";
    echo "\033[38;5;202m           ╚═╝   ╚═╝  ╚═╝╚═╝  ╚═╝  ╚═══╝  ╚══════╝╚══════╝╚══════╝╚═╝  ╚═╝╚══════╝";
    echo "\033[0m";
}

function drawCharakterErstellungTitel() {

    echo "\033[6;12H\033[38;5;76m";
    echo " ██████╗██╗  ██╗ █████╗ ██████╗  █████╗ ██╗  ██╗████████╗███████╗██████╗               ";

    echo "\033[7;12H";
    echo "██╔════╝██║  ██║██╔══██╗██╔══██╗██╔══██╗██║ ██╔╝╚══██╔══╝██╔════╝██╔══██╗               ";

    echo "\033[8;12H";
    echo "██║     ███████║███████║██████╔╝███████║█████╔╝    ██║   █████╗  ██████╔╝               ";

    echo "\033[9;12H";
    echo "██║     ██╔══██║██╔══██║██╔══██╗██╔══██║██╔═██╗    ██║   ██╔══╝  ██╔══██╗               ";

    echo "\033[10;12H";
    echo "╚██████╗██║  ██║██║  ██║██║  ██║██║  ██║██║  ██╗   ██║   ███████╗██║  ██║               ";

    echo "\033[11;12H";
    echo " ╚═════╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝╚═╝  ╚═╝   ╚═╝   ╚══════╝╚═╝  ╚═╝               ";

    echo "\033[13;12H";
    echo "███████╗██████╗ ███████╗████████╗███████╗██╗     ██╗     ██╗   ██╗███╗   ██╗ ██████╗    ";

    echo "\033[14;12H";
    echo "██╔════╝██╔══██╗██╔════╝╚══██╔══╝██╔════╝██║     ██║     ██║   ██║████╗  ██║██╔════╝ ██╗";

    echo "\033[15;12H";
    echo "█████╗  ██████╔╝███████╗   ██║   █████╗  ██║     ██║     ██║   ██║██╔██╗ ██║██║  ███╗╚═╝";

    echo "\033[16;12H";
    echo "██╔══╝  ██╔══██╗╚════██║   ██║   ██╔══╝  ██║     ██║     ██║   ██║██║╚██╗██║██║   ██║██╗";

    echo "\033[17;12H";
    echo "███████╗██║  ██║███████║   ██║   ███████╗███████╗███████╗╚██████╔╝██║ ╚████║╚██████╔╝╚═╝";

    echo "\033[18;12H";
    echo "╚══════╝╚═╝  ╚═╝╚══════╝   ╚═╝   ╚══════╝╚══════╝╚══════╝ ╚═════╝ ╚═╝  ╚═══╝ ╚═════╝    ";
    
}

function drawTitelBox() {

    echo "\033[38;5;202m";
    echo "\033[18;83H";
    echo "┌────────────────────────────────────────────────────────────────────────────────────────────┐";
    
    for ($i = 19; $i < 29; $i++) {
       
        echo "\033[$i;83H";
        echo "│";
    }

    echo "\033[29;83H";
    echo "└────────────────────────────────────────────────────────────────────────────────────────────┘";

    for ($i = 19; $i < 29; $i++) {
       
        echo "\033[$i;176H";
        echo "│";
    }

}

function drawBox(int $width, int $length, int $reihe, int $spalte) {

    echo "\033[{$reihe};{$spalte}H┌";

    $oben = $width + $spalte;
    $oberesI = $spalte + 1;

    while ($oberesI < $oben) {

        echo"\033[{$reihe};{$oberesI}H─";
        $oberesI++;

    }

    echo "\033[{$reihe};{$oberesI}H┐";

    $rechts = $length + $reihe;
    $rechtesI = $reihe + 1;

    while ($rechtesI < $rechts) {

        echo"\033[{$rechtesI};{$oberesI}H│";
        $rechtesI++;

    }

    echo"\033[{$rechtesI};{$oberesI}H┘";

    $unteresI = $oben - 1;

    while ($unteresI > $spalte) {

        echo "\033[{$rechtesI};{$unteresI}H─";
        $unteresI--;

    }

    $linkesI = $rechtesI;

    while ($linkesI > $reihe) {

        echo"\033[{$linkesI};{$spalte}H│";
        $linkesI--;

    }

    echo"\033[{$rechtesI};{$spalte}H└";

}
function drawAsciiArt(int $zeile, int $spalte, string $filePath): void {

    if (!file_exists($filePath)) {
        echo "Fehler: Datei '$filePath' nicht gefunden.\n";
        return;
    }

    $ascii = file_get_contents($filePath);
    $lines = explode("\n", $ascii);

    foreach ($lines as $i => $line) {

        $row = $zeile + $i;
        echo "\033[" . $row . ";" . $spalte . "H" . $line;

    }
}
function drawFrame() {
        
    echo "\033[38;5;202m";
    echo "\033[3;7H┌";
    
    for ($i = 8; $i < 265; $i++) {
        echo "\033[3;{$i}H─";
    }

    echo "\033[3;265H┐";

    for ($i = 4; $i <= 63; $i++) {

        echo "\033[$i;7H";
        echo "│";

    }


    for ($i = 4; $i <= 63; $i++) {
        
        echo "\033[$i;265H";
        echo "│";

    }

    echo "\033[64;7H└";

    for ($i = 8; $i < 265; $i++) {
        echo "\033[64;{$i}H─";
    }

    echo "\033[64;265H┘";
    
}

function wholeScreenAnimation() {

    for ($i = 1; $i < 66; $i++) {

        for ($j = 1; $j < 269; $j++) {

            echo "\033[{$i};{$j}H\033[38;5;232m█";
            
        }

        usleep(10000);

    }

    for ($i = 66; $i > 1; $i--) {

        echo "\033[{$i};1H\033[0K";
        usleep(10000);

    }

    echo "\033[0m";
}

?>