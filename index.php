<?php 
class foo {
    public function __construct() {
        echo "Se instacio foo";
    }
}
class bar {
    public function __construct() {
        echo "Se instacio bar";
    }
}
class foobar {
    public function __construct() {
        echo "Se instacio foobar";
    }
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
    <div>
        <h1>Area de un triangulo</h1>
        <form action="funciones.php" method="POST">
            <input type="number" name="func" value="1" hidden>
            Base: <input type="number" name="base"><br>Altura: <input type="number" name="altura"><br>
            <input type="submit">
        </form>
    </div>
    <hr>
    <div>
        <h1>Calcular descuentos</h1>
        <form action="funciones.php" method="POST">
            <input type="number" name="func" value="2" hidden>
            Precio: <input type="number" name="precio"><br>Descuento: <input type="number" maxlength="100" name="descuento"><br>
            <input type="submit">
        </form>
    </div>
    <hr>
    <div>
        <h1>Arreglo desordenado $compras</h1>
        <?php 
            $compras = array();
 
            // Agregar elementos al array
            // (a) Índice 0: "Manzanas"
            // (b) Índice 1: "Bananas"
            // (c) Índice 2: "Arroz"
            // (d) Índice 3: "Leche"
            // (e) Índice 4: "Pan integral"
            $compras[0] = "Manzanas";
            $compras[1] = "Bananas";
            $compras[2] = "Arroz";
            $compras[3] = "Leche";
            $compras[4] = "Pan integral";
 
            // Utilizar la función unset() para eliminar el elemento "Arroz"
            unset($compras[2]); // 2 -> indice del elemento "Arroz"
 
            // Modificar el elemento en el índice 3
            $compras[3] = "Leche de almendras"; 
        ?>
        <ul>
            <?php
            // Imprimir cada item de la lista desordenada <ul> con un foreach
 
            foreach ($compras as $i) {
                echo "<li>$i</li>";
            }
            ?>
        </ul>
    </div>
    <hr>
    <div>
        <h1>Suma de numeros naturales</h1>
        <form action="funciones.php" method="POST">
            <input type="number" name="func" value="3" hidden>
            Un numero: <input type="number" name="num"><br>
            <input type="submit">
        </form>
    </div>
    <hr>
    <div>
        <h1>Conceptos</h1>
        Defina con sus palabras los siguientes términos:
        <?php 
            $conceptos = [
                "Objeto" => "Representacion de la realidad de un objeto o la instancia partiendo de un molde y estableciendo valor a argumentos lo que lo hace distinto de otros objetos que parten del mismo molde",
                "Atributo" => "Dato o variable dentro de un molde que describen el objeto que creamos",
                "Clase" => "Es el molde, es donde encapsulamos todos los atributos, variables, metodos y puede ser instanciado, es mas algo en general, cuando instanciamos es donde se hacen los cambios",
                "Constructor" => "Dentro de una clase es lo primero que se hace al instanciar, con la posibilidad de recibir parametros a la hora de crear un objeto o ejecutar funciones del mismo",
                "Herencia" => "Es cuando una clase hereda propiedades y metodos de una clase (superclase) anteriormente creada",
                "Polimorfismo" => "Es cuando a la hora de heredar de una superclase, podemos darle distinta forma a eso que heredamos, posibilitando cambiar el comportamiento de sus metodos"
            ]
        ?>
        <ul>
            <?php 
                foreach ($conceptos as $i => $k) {
                    echo "<li><b>$i:</b> $k<br><br></li>";
                }
            ?>
        </ul>
    </div>
    <hr>
    <div>
        <h1>Ejercicio 6 - Clases</h1>
        <form action="funciones.php" method="POST">
            <input type="number" name="func" value="6" hidden>
            Tu nombre: <input type="text" name="nombre"><br>
            Un edad: <input type="number" name="edad"><br>
            <input type="submit" value="Crear y saludar">
        </form>
        <?php
        new foo();
        echo "<br>";
        new bar();
        echo "<br>";
        new foobar();
        echo "<br>"; 
        ?>
    </div>
</body>
 
</html>