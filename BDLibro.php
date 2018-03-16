<html>
	<head>
		<title>
			Libro De Visitas:)!!!
		</title>
		<style type="text/css">
			.tablaalta {
				padding: 14px;
				margin: 10px;
			}

			.tablaalta br {
				padding: 20px;
				border-radius: : 25px;
			}

			tr th {
				background-color: azure;
			}
			
			tr td {
				background-color: black;
				color: yellow;
			}
			a {
				color: white;
			}

			a:hover {
				color: red;
			}

			a:visited {
				color: purple;
			}

		</style>
	</head>
	<body>
		<?php
			$nombre = $_GET["txtnombre"];
		    $genero = $_GET["txtgenero"];
			$mensaje = $_GET["txtmensaje"];

			$conexion = mysqli_connect("localhost","root","","diadelamujer");
			$consulta = mysqli_query($conexion,"insert into mujer values (\"$nombre\",\"$genero\",\"$mensaje\");");


			if($genero == "Femenino"){
				echo "<script>alert('Feliz dia de la mujer');</script>";
				echo '<body style="background-color:blue">';
			}elseif ($genero == "Masculino") {
				echo "<script>alert('Felicidades');</script>";
				echo '<body style="background-color:green">';
				# code...
			}
			
			echo "Guardado";

		?>
		<br>
		<h1>Libro de visitas</h1>
		<?php
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
					if ($registro["Sexo"] == "Femenino") {
						echo "<td><style='color:green;'>".$registro["Mensaje"]."</td>";

					}else if ($registro["Sexo"] == "Masculino") {
						echo "<td><style='color:blue;'>".$registro["Mensaje"]."</td>";					
					//echo "<td>".$registro["Mensaje"]."</td>";
				}
			}
			}
				   
		?>
		<a href="index.htm">Libro De Visitas</a>
		<br>
	</body>
</html>