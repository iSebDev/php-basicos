<?php
$func = $_POST["func"];
 
function areaTriangulo() {
    $base = $_POST["base"];
    $altura = $_POST["altura"];
    $area = ($base * $altura) / 2;
    return "El area de tu triangulo de base <b>$base</b> y altura <b>$altura</b> es <b>$area</b>";
}
 
function calcularDescuento() {
    $precio = $_POST["precio"];
    $descuento = $_POST["descuento"];
    $precioFinal = $precio - ($precio * ($descuento / 100));
    return "Le aplicamos el <b>$descuento%</b> de descuento a los <b>$$precio</b> por lo que solo tendras que pagar <b>$$precioFinal</b>";
}
 
function bucleNumeros() {
    $n = $_POST["num"];
    $nCursor = 0;
 
    $nFinal = 0;
 
    while ($nCursor < $n) {
        $nCursor += 1;
 
        $nFinal += $nCursor;
    }
 
    echo "Resultado: <b>$nFinal</b>";
}

class Persona {
    private $nombre;
    private $edad;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function saludar() {
        $nombre = $this->nombre;
        echo "Hola, <b>$nombre</b>.";
    }
}

function crearPersonaSaludar() {
    $nombre = $_POST["nombre"];
    $edad = $_POST["edad"];

    $persona = new Persona($nombre, $edad);
    $persona->saludar();
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        switch ($func) {
            case 1: echo areaTriangulo(); break;
            case 2: echo calcularDescuento(); break;
            case 3: echo bucleNumeros(); break;
            case 6: echo crearPersonaSaludar(); break;
        }
    ?>
</body>
</html>