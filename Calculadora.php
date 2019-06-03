<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Calculadora</title>
</head>
<body>
	<!-- Estructura donde ingresar los datos --> 
	<fieldset>
		<legend>Operaciones Matematicas</legend>
		<form action="#" method="POST">
			<label for="N1">Primer Numero</label>
			<input type="number" name="n1" required>
			<br><br>
			<label for="N2">Segundo Numero</label>
			<input type="number" name="n2" required>
			<br><br>
			<label for="operaciones">Operaciones Aritmeticas</label>
			<select name="operaciones" id="opr">
				<option value="sumar">Sumar</option>
				<option value="restar">Restar</option>
				<option value="multiplicar">Multiplicar</option>
				<option value="dividir">Dividir</option>
			</select>
			<br>
			<input type="submit" name="enviar" value="Calcular">
		</form>
	</fieldset>
	<h3>Resultado</h3>
	
	<!-- Codigo para el boton "Calcular" --> 
	<?php
		/* para evitar el error de variables no definidas las metemos dentro del IF	
		$n1 = $_POST["n1"];
		$n2 = $_POST["n2"];
		$opc = $_POST["operaciones"]; 
		*/
		if (isset($_POST["enviar"])) {
		
			$n1 = $_POST["n1"];
			$n2 = $_POST["n2"];
			$opc = $_POST["operaciones"]; 
			// Accion deacuerdo al operador elegido
			switch ($opc) {
				case 'sumar':
					$resultado = $n1 + $n2;
					break;				
				case 'restar':
					$resultado = $n1 - $n2;
					break;				
				case 'multiplicar':
					$resultado = $n1 * $n2;
					break;				
				case 'dividir':
					if ($n2 != 0) {
							$resultado = $n1 / $n2;
						} else {
							$resultado = "¡No existe la division por 0!";
						}	
					break;				
				default:
					$resultado = "Sin resultado";
					break;
			}
			echo "El resultado de ".$opc." ".$n1." con ".$n2." es ".$resultado."<br>";
			//echo var_dump($_POST);
		}
	?>

</body>
</html>

