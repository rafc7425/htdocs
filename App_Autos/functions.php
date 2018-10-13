<?php 
   
  //  header("Content-Type: text/html;charset=utf-8");//correcion de las ñ´s
	// conexión a base de datos MySQL con PHP.
	// Datos de la base de datos
	$usuario = "root";
	$password = "";
	$servidor = "localhost";
	$basededatos = "autos";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( " no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
	$consultamarcas = "SELECT * FROM Inventario WHERE marcas = ford ";
	$consultatotal = "SELECT * FROM Inventario";
	$resultadoford = mysqli_query($conexion,$consultamarcas);
	$resultado = mysqli_query( $conexion, $consultatotal ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// Motrar el resultado de los registro de la base de datos
	// Encabezado de la tabla
	echo "<table border='2px'>";
	echo "<tr>";
	echo "<th>id</th>";
    echo "<th>marca</th>";
   
    echo "<th>modelo</th>";
    echo "<th>año</th>";
    echo "<th>precio</th>";
    echo "</tr>";
	
 
	// Bucle while que recorre cada registro y muestra cada campo en la tabla.
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['id'] . "</td><td>" . $columna['marca'] ."</td><td>". $columna['modelo'] ."</td>".
		"</td><td>". $columna['year'] ."</td>"."<td>". $columna['precio'] ."</td>";
		echo "<td>";
        echo "</tr>";
	}
	

	

	echo "</table>"; // Fin de la tabla



	// cerrar conexión de base de datos*/
	mysqli_close( $conexion );
?>