<?php

// Opdracht 1
$tijd = date("h");
if ($tijd < 12) {
    echo("Goedenmorgen");
} else if ($tijd > 11 && $tijd < 18) {
    echo("Goedemiddag");
} else {
    echo("Goedenavond");
}
//

echo "<br>";

// Opdracht 2
function berekengemiddelde($cijfer1, $cijfer2) {
    $cijfer3 = ($cijfer1 + $cijfer2) / 2;
    echo "het gemmidelde van $cijfer1 en $cijfer2 = $cijfer3";
}

berekengemiddelde(7, 9);
//

echo "<br>";

// Opdracht 3
function daysleft() {

    $date1=date_create("now");
    $date2=date_create("2023-12-30");
    $diff=date_diff($date1, $date2);
    echo $diff->format("%R%a days");
}

daysleft();

//

echo "<br>";

// Opdracht 4

$array = ["string1", "string2", "string3", "string4"];

function getlength($array) {
    $lengte = 0;
    foreach ($array as $string) {
        $lengte += strlen($string);
    }
    return($lengte);
}

echo(getlength($array));

//

?>