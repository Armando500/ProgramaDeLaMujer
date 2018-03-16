<html>
	<head>
		<title>
			Programa del dia de la mujer
		</title>
	</head>
	<body>

		<h1>Libro de visitas</h1>
		<?php

		 $nombre = $_GET["txtnombre"];
		    $genero = $_GET["txtgenero"];
			$mensaje = $_GET["txtmensaje"];

			$conexion = mysqli_connect("localhost","root","","diadelamujer");
			$consulta = mysqli_query($conexion,"select * from mujer;");
			if (mysqli_num_rows($consulta) > 0) {
				echo "<table border=1>";
				echo "<tr><th colspan=4>Libro de Visitas</th></tr>";
				echo "<tr><th>Nombre</th><th>Genero</th><th>Mensaje</tr>";
				while ($registro = mysqli_fetch_array($consulta)){
					echo "<tr>";
					echo "<td>".$registro["Nombre"]."</td>";
					echo "<td>".$registro["Sexo"]."</td>";					
				    echo "<td>".$registro["Mensaje"]."</td>";
					
                  }
				}
			}
	   
		?>
		<a href="index.htm">Libro De Visitas</a>
		<br>
	</body>
</html>
