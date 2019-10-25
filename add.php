<?php
$a=$_POST['mail'];
$b=$_POST['passe'];
if ($a=="" or $b==""){header('Location: index.php'); die;}
$base='uti';
$serveur='localhost';
$user='root';
$password='';
$con=mysqli_connect("$serveur","$user","$password","$base");
if (!$con)
	{header('Location: index.php');die;}
if (!$con)
	{header('Location: index.php');die;}
$sql = "CREATE TABLE `utilisateur` (
  `mail` varchar(255) COLLATE utf8_bin NOT NULL,
  `passe` varchar(255) COLLATE utf8_bin NOT NULL,
  `niveau` int(255) NOT NULL,
  `scorec` int(255) NOT NULL,
  `scoreg` int(255) NOT NULL,
  `scorel` int(255) NOT NULL,
  `scored` int(255) NOT NULL
) ";
$result = mysqli_query($con,$sql);
$sql = "INSERT INTO utilisateur  values('$a','$b',1,0,0,0,0)";
$result = mysqli_query($con,$sql);
if($result){
	header('Location: registrer.html');die;}
else {
	header('Location: erreur.html');die;}
mysqli_close();	?>