<?php
		// Verificar si los datos fueron enviados por el formulario
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			// Obtener los datos del formulario y almacenarlos en variables
			$numero_socio = $_POST["numero_socio"];
			$nombre_completo = $_POST["nombre_completo"];
			$telefono = $_POST["telefono"];
			$correo = $_POST["correo"];
			$fecha_proximo_pago = $_POST["fecha_proximo_pago"];
			$contacto_emergencia = $_POST["contacto_emergencia"];

			// Mostrar los datos almacenados en pantalla
			echo "<p>Los datos ingresados son:</p>";
			echo "<ul>";
			echo "<li>Número de socio: " . $numero_socio . "</li>";
			echo "<li>Nombre completo: " . $nombre_completo . "</li>";
			echo "<li>Número de teléfono: " . $telefono . "</li>";
			echo "<li>Correo electrónico: " . $correo . "</li>";
			echo "<li>Fecha de próximo pago: " . $fecha_proximo_pago . "</li>";
			echo "<li>Contacto de emergencia: " . $contacto_emergencia . "</li>";
			echo "</ul>";
		}
	?>