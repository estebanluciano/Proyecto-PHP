<?php
// comentario de linea
/* comentarios 
multilinea */

// string
$uno = "contenido de uno";

// integer
$dos = 234;

echo "Uno: ".$uno."<br>";
echo "Dos: ".$dos."<hr>";

// cuadrados de los primeros 30 numeros enteros, si es par o no
for ($i=1; $i <= 30; $i++) { 
	
	$cuadrado = $i*$i;
	echo "El cuadrado de ".$i." es ".($cuadrado);
	
	if ($cuadrado%2 == 0) {
		echo " y es par";
	} else {
		echo " y es impar";
	}
		
	echo "<br>";
}
echo "<hr>";

// multiplique los primeros numeros enteros
$i = 1;
$numero = 1;
while ($i <= 20) {
	// $numero = $numero * $i  --son iguales
	$numero *= $i;
	$i++;
}
echo "El resultado de multiplicar los 20 primeros numeros enteros es ".$numero."<hr>";

/* Imprimir por pantalla tabla de multiplicar del numero 
pasado por parametro GET por la URL.*/

/* http://localhost/proyecto-php/Ejercicios.php?uno=hola&dos=2&tres=3

var_dump(&_GET);

array (size=3)
'uno' => string 'hola' (length=4)
'dos' => string '2' (length=1)
'tres' => string '3' (length=1)

*/

// $numero = 5;
// $numero = $_GET["numero"];
// controla que el parametro GET no venga vacio -- && significa que se cumpla lo primero y lo que viene despues.

if (isset($_GET["numero"]) && is_numeric($_GET["numero"])){
	$numero = $_GET["numero"];
} else {
	$numero = 0; // defecto
	echo "<p>Sin parametro numero, o no es numerico.</p>";
}

echo "<h2>Tabla de multiplicar de ".$numero."</h2>";

for ($i=1; $i < 10; $i++) { 
	echo $numero." x ".$i." = ".($i*$numero)."<br>";

}
echo "<hr>";

// Arreglo de 12 meses del año y mostrarlo
$meses = array("Enero", 
			  "Febrero",
			  "Marzo",
			  "Abril",
			  "Mayo",
			  "Junio",
			  "Julio",
			  "Agosto",
			  "Septiembre",
			  "Octubre",
			  "Noviembre",
			  "Diciembre"
);

for ($i=0; $i < count($meses) ; $i++) { 
	echo $meses[$i]."<br>";
}
echo "<hr>";

// lo mismo pero con FOREACH
foreach ($meses as $mes) {
	echo $mes."<br>";
}

echo "<hr>";

// lo mismo pero con FOREACH con indices
foreach ($meses as $indice => $mes) {
	echo ($indice+1)."-".$mes."<br>";
}

echo "<hr>";

// uso de CASE
$cadena = "durazno";

switch ($cadena) {
	case 'manzana':
		echo "<p>Es una Manzana</p>";
		break;
	case 'durazno':
		echo "<p>Es un Durazno</p>";
		break;
	case 'kiwi':
		echo "<p>Es un Kiwi</p>";
		break;
	
	default:
		echo "<p>No es una fruta</p>";
		break;
}

echo "<hr>";

// ejemplo DO WHILE

$i = 0;

do {
	echo "Número ".$i."<br>";
	$i++;
} while ($i <= 10);

echo "<hr>";

// otro ejemplo de arreglo con indice propio
$arreglo = array(
	'elemento1' => 10,
	'elemento2' => 20,
	'elemento3' => 30,
	'elemento4' => 40,
	'elemento5' => 50
);

foreach ($arreglo as $key => $value) {
	echo "Indice: ".$key." - ".$value."<br>";
}

echo "<hr>";

// mas de arreglos
$datos = array(
	"Nombre" => "Esteban", 
	"Apellido" => "Gaido", 
	"Nacionalidad" => "Argentino"
);
echo $datos['Nombre']." es de Nacionalidad ".$datos['Nacionalidad']."<br>";

echo "<hr>";

?>

</body>
</html>

