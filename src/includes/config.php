<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache, must-revalidate");
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");

	/***********************************************************************************/
	$nombreDeLaEmpresa = "APRORA";
	$nombreDelPanel= "APRORA_PANEL";
	/***********************************************************************************/

	 // CONEXION LOCAL
	// $usuario = "root";
	// $password = "";
	// $baseDeDatos = "aprora";
	// $servidor = "localhost";
	// $dsn = "mysql:host=".$servidor.";dbname=".$baseDeDatos.";port=3306;charset=UTF8";


	/* CONEXION REMOTA */
	$usuario = "dbo758602226";
	$password = "Gnr74410.";
	$baseDeDatos = "aprora";
	$servidor = "db758602226.db.1and1.com";
	$dsn = "mysql:host=".$servidor.";dbname=".$baseDeDatos.";port=3306;charset=UTF8";


	/* Se conecta con la base de datos elegida.    */
	$conexion = new PDO ($dsn, $usuario, $password);
	$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
