<form>
	<input type="text" name="nome">
	<input type="number" name="idade">
	<input type="number" name="salario">
	<input type="submit" name="Enviar">
</form>
<?php
	if (isset($_GET)) {
		
		foreach ($_GET as $key => $value) {
			echo "Nome do campo: " . $key . "<br>";
			echo "Valor do campo: " . $value;
			echo "<hr>";
		}

	}
?>