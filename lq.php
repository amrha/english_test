<!DOCTYPE html>
<html>
<head>
	<title> GRAMMAIRE</title>
	<?php
	session_start();
	error_reporting(E_ALL ^ E_NOTICE); 
//$base='uti';
//$serveur='localhost';
//$user='root';
//$password='';
$row= $_SESSION['row'];
//$con=mysqli_connect("$serveur","$user","$password","$base") or die("Could not connect to the database");
//if (!$con)
	//{header('Location: index.html');die;}
//$sql = "SELECT * FROM utilisateur where mail=".'"'."$a".'"';
//$result = mysqli_query($con,$sql) or die("Could not connect to the database");
//$row = mysqli_fetch_array($result);
switch ($row[2]) {
	case '1':
		switch ($row[5]) {
			case '0':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '1':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '2':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;			
			case '3':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '4':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '5':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '6':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '7':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '8':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '9':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '10':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '11':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '12':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '13':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '14':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '15':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '16':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '17':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '18':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '19':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '20':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '21':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '22':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '23':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '24':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;
	case '2':
		switch ($row[5]) {
			case '0':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '1':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '2':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;			
			case '3':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '4':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '5':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '6':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '7':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '8':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '9':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '10':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '11':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '12':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '13':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '14':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '15':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '16':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '17':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '18':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '19':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '20':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '21':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '22':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '23':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '24':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;
	case '3':
		switch ($row[5]) {
			case '0':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '1':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '2':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;			
			case '3':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '4':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '5':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '6':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '7':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '8':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '9':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '10':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '11':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '12':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '13':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '14':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '15':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '16':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '17':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '18':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '19':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '20':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '21':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '22':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '23':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '24':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;
	case '4':
		switch ($row[5]) {
			case '0':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '1':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '2':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;			
			case '3':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '4':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '5':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '6':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '7':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '8':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '9':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '10':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '11':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '12':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '13':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '14':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '15':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '16':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '17':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '18':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '19':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '20':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '21':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '22':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '23':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '24':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;
	case '5':
		switch ($row[5]) {
			case '0':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '1':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '2':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;			
			case '3':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '4':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '5':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '6':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '7':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '8':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '9':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '10':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '11':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '12':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '13':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '14':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '15':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '16':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '17':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '18':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '19':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '20':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '21':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '22':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '23':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '24':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;	
	case '6':
		switch ($row[5]) {
			case '0':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '1':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '2':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;			
			case '3':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '4':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '5':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '6':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '7':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '8':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '9':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '10':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '11':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '12':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '13':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '14':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '15':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '16':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '17':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '18':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '19':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '20':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '21':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '22':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '23':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '24':
				$q="0.mp3";
				$r="je suis trop paresseux pour poser des questions uniques";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;}
		//$_SESSION['q'] = $q;
		$_SESSION['r'] = $r;
		$_SESSION['row'] = $row;
		$_SESSION['e-mail'] = $row[0];
		$_SESSION['login'] = $row[1];
?>
</head>
<body style="background-color: #0af;">
<table style="height: 100%;width: 100%" align="center"><tr><td><h1 align="center">GRAMMAIRE QUESTION</h1></td>
	<tr><td  align="center"><p>what does this mean in french</p></td></tr>
	<tr><td  align="center"><audio controls="controls"><source src="<?php echo "$q"; ?>" type="audio/mpeg"></audio></td></tr>
	<tr><td  align="center"><form name="formulaire" method="post" action="testl.php"><input type="text" name ="reponse" value=""></td></tr>
	<tr><td  align="center"><input type="submit" value="SEND"></form></td></tr>
	<tr><td  align="center"><a href="profile.php">Retour</a></td></tr>
</body>
</html>