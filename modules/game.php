<?php
class Player {

    public string $haarfarbe;
    public string $rolle;
    public string $herkunft;
    public string $name;
    public string $waffe;
    public int $leben;
    public int $verteidigung;
    public int $stärke; 

    public function __construct(string $haarfarbe, string $rolle, string $herkunft, string $name, string $waffe, int $leben, int $verteidigung, int $stärke) {

        $this->haarfarbe = $haarfarbe;
        $this->rolle = $rolle;
        $this->herkunft = $herkunft;
        $this->name = $name;
        $this->waffe = $waffe;
        $this->leben = $leben;
        $this->verteidigung = $verteidigung;
        $this->stärke = $stärke;

    }

}

function spielerErstellen() {

    drawFrame();
    drawCharakterErstellungTitel(); echo "\033[0m";
    drawBox(100, 20,22,85);
    
    echo "\033[20;125HWie heißt du?";
    echo "\033[21;125H\033[?25h";
    
    $name = readline();
    echo "\033[?25l";

        while (true) {

        $spielerArray = [];

        $haarfarbeOptionen = ["Braun", "Blond", "Schwarz", "Grau", "Weiß"];
        $haarfarbe = select("\033[24;88H[1] Haarfarbe", $haarfarbeOptionen, 26, 88);
        $spielerArray["haarfarbe"] = $haarfarbe;

        $rollenOptionen = ["Krieger", "Magier", "Dieb"];
        $rolle = select("\033[24;104H[2] Rolle", $rollenOptionen,26 , 104);
        $spielerArray["rolle"] = $rolle;

        $herkunftOptionen = ["Elfenwald", "Burg Landskorn", "Mine von Salzes", "Sumpf der Tiefländer"];
        $herkunft = select("\033[24;116H[3] Herkunft", $herkunftOptionen, 26, 116);
        $spielerArray["herkunft"] = $herkunft;

        $waffenMapping = [

            "Krieger" => ["Kurzschwert", "Langschwert", "Bogen      ", "Armbrust   "],
            "Magier" => ["Schnellstab","Großstab   ", "Buch       ", "Hände      "],
            "Dieb" => ["Dolch      ","Wurfmesser ", "Axt        ", "Keule      "]
        ];

        $waffenOptionen = $waffenMapping[$rolle] ?? [];
        $waffe = select("\033[24;139H[4] Waffe", $waffenOptionen, 26, 139);
        $spielerArray["waffe"] = $waffe;
        
        $bistDuDirSicherOptionen = ["Ja", "Nein"];
        $bistDuDirSicher = select("\033[24;154H[5] Bist du dir Sicher?", $bistDuDirSicherOptionen, 26, 154);
        
        switch ($bistDuDirSicher) {

            case "Ja":
                break 2;
            
            case "Nein":
                continue 2;
        }

    }
    $hp = [

        "Krieger" => 30,
        "Magier" => 25,
        "Dieb" => 20

    ];

    $verteidigung = [

        "Krieger" => 10,
        "Magier" => 8,
        "Dieb" => 5

    ];

    $stärke = [

        "Krieger" => 5,
        "Magier" => 7,
        "Dieb" => 10

    ];

    $spieler = new Player(

        $spielerArray["haarfarbe"],
        $spielerArray["rolle"],
        $spielerArray["herkunft"],
        $name,
        
        $spielerArray["waffe"],
        $hp[$rolle],
        $verteidigung[$rolle],
        $stärke[$rolle]

    );

}
function anfänge() {

    spielerErstellen();

}

function fortsetzen() {

    echo "\033[2J";
    echo "\033[33;114HWird geladen...";
    
}

?>