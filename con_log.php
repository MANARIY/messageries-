<?php 
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$username=$_POST["email"];
	$password=$_POST["password"];

	//connection avec la base de donnees

	$host="Localhost";
	$dbusername="root";
	$dbpassword="";
	$dbname="cybercriminalite";

	$conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
	if ($conn->connect_error){
		die("connection failed:".$conn->connect_error);
	}


	//valider login
	$query="SELECT * FROM enregistre WHERE email='$username' AND password='$password'";
	$resultat=$conn->query($query);
	if ($resultat->num_rows==1) {
		//login success.
        header("Location:Accueil.php");
		exit();
	} else {
		//login failed
        header("Location:login.php");
		exit();
	}
	$conn->close();
}