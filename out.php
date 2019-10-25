<?php
session_start();
$row= $_SESSION['row'];
if ($row[3]>23 and $row[4]>23 and $row[5]>23 and $row[6]>23 ) {
	$base='uti';
	$serveur='localhost';
	$user='root';
	$password='';
	$con=mysqli_connect("$serveur","$user","$password","$base") or die("Could not connect to the database");
	if (!$con)
		{header('Location: index.php');die;}
	switch ($row[2]) {
		case '1':
			$sql = "UPDATE utilisateur SET niveau=2 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scored=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scoreg=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scorec=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scorel=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			break;
		case '2':
			$sql = "UPDATE utilisateur SET niveau=3 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scored=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scoreg=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scorec=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scorel=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			break;
		case '3':
			$sql = "UPDATE utilisateur SET niveau=4 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scored=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scoreg=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scorec=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scorel=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			break;
		case '4':
			$sql = "UPDATE utilisateur SET niveau=5 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scored=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scoreg=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scorec=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scorel=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			break;
		case '5':
			$sql = "UPDATE utilisateur SET niveau=6 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scored=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scoreg=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scorec=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			$sql = "UPDATE utilisateur SET scorel=0 where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			break;
		case '6':
			$sql = "DELETE FROM utilisateur where mail=".'"'."$row[0]".'"';
			$result = mysqli_query($con,$sql) or die("Could not connect to the database");
			break;}}
$_SESSION = array();
session_destroy();
header('Location: index.php');die;
?>