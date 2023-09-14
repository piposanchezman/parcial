<?php
function readCSV($filename)
{
    $file = fopen($filename, "r");
    $data = array();

    while (($row = fgetcsv($file)) !== FALSE) {
        $data[] = $row;
    }

    fclose($file);

    return $data;
}

function BrickRequirements($data, $bricksT, $wallT, $horizontalG, $verticalG)
{
    $cl = 0;

    foreach ($data as $element) {
        if ($element[0] === $bricksT) {
            $width = ($wallT === "soga") ? $element[1] : $element[2];
            $height = $element[3];
            $cl += 1 / (($width + $horizontalG) * ($height + $verticalG));
        }
    }

    return $cl;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $widthW = $_POST["widthW"];
    $heightW = $_POST["heightW"];
    $bricksT = $_POST["bricksT"];
    $wallT = $_POST["wallT"];
    $horizontalG = $_POST["horizontalG"];
    $verticalG = $_POST["verticalG"];
    $costBrick = $_POST["costBrick"];

    $data = readCSV("bricks.csv");
    $cl = BrickRequirements($data, $bricksT, $wallT, $horizontalG, $verticalG);

    if ($cl > 0) {
        // Redondear la cantidad de ladrillos por m^2
        $rounded = ceil($cl);
        echo "Cantidad de ladrillos por m^2 = $rounded<br>";
        // Calcular el desperdicio del 5%
        $waste = $rounded * 0.05;
        echo "Desperdicio de ladrillos (5%) = $waste<br>";
        // Calcular la cantidad de ladrillos por m^2 (considerando 5% de desperdicio)
        $quantityBricks = ceil($rounded + $waste);
        echo "Cantidad de ladrillos + desperdicio = $quantityBricks<br>";
        // Calcular el área del muro
        $wallArea = $widthW * $heightW;
        echo "Area total del muro = $wallArea<br>";
        // Calcular la cantidad total de ladrillos necesarios para el muro
        $totalBricks = $quantityBricks * $wallArea;
        echo "Cantidad total de ladrillos = $totalBricks<br>";
        // Calcular el costo total de los ladrillos
        $totalCost = $totalBricks * $costBrick;
        echo "Costo total de los ladrillos = $totalCost<br>";
    } else {
        echo "No se encontraron ladrillos del tipo seleccionado";
    }
}
?>
