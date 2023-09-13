<?php
$file = fopen("bricks.csv", "r");
$data = array();

while (($row = fgetcsv($file)) !== FALSE) {
    $data[] = $row;
}

fclose($file);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ancho = $_POST["ancho"];
    $alto = $_POST["alto"];
    $tladrillo = $_POST["tladrillo"];
    $tmuro = $_POST["tmuro"];
    $jhorizontal = $_POST["jhorizontal"];
    $jvertical = $_POST["jvertical"];

    echo "Ancho: $ancho<br>";
    echo "Alto: $alto<br>";
    echo "Tipo de Ladrillo: $tladrillo<br>";
    echo "Tipo de muro: $tmuro<br>";
    echo "Junta Horizontal: $jhorizontal<br>";
    echo "Junta Vertical: $jvertical<br>";

    if ($tmuro === "soga") {
        $cl = 0;
        foreach ($data as $element) {
            if ($element[0] === $tladrillo) {
                $width = $element[1];
                $espesor = $element[2];
                $height = $element[3];
                $cl += 1 / (($width + $jhorizontal) * ($height + $jvertical));
            }
        }
        $rounded = round($cl);
        echo "La cantidad de ladrillos = $rounded<br>";
    }
}
?>
