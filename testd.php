<?php
	session_start();
	$r= $_SESSION['r'];
	$row= $_SESSION['row'];
	$_SESSION['e-mail'] = $row[0];
	$_SESSION['login'] = $row[1];
	$s=$row[6]+1;
	$a=$_POST['reponse'];
	if ($r==$a) {
	$base='uti';
	$serveur='localhost';
	$user='root';
	$password='';
	$con=mysqli_connect("$serveur","$user","$password","$base") or die("Could not connect to the database");
	if (!$con)
		{header('Location: index.php');die;}
	$sql = "UPDATE utilisateur SET scored='$s' where mail=".'"'."$row[0]".'"';
	$result = mysqli_query($con,$sql) or die("Could not connect to the database");
		header('Location: profile.php');die;}
	else{header('Location: dq.php');die;}
	 ?>