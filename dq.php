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
		switch ($row[6]) {
			case '0':
				$q="1.mp3";
				$r="one";
				break;
			case '1':
				$q="2.mp3";
				$r="two";
				break;
			case '2':
				$q="3.mp3";
				$r="three";
				break;			
			case '3':
				$q="4.mp3";
				$r="four";
				break;
			case '4':
				$q="5.mp3";
				$r="five";
				break;
			case '5':
				$q="6.mp3";
				$r="six";
				break;
			case '6':
				$q="7.mp3";
				$r="seven";
				break;
			case '7':
				$q="8.mp3";
				$r="eight";
				break;
			case '8':
				$q="9.mp3";
				$r="nine";
				break;
			case '9':
				$q="10.mp3";
				$r="ten";
				break;
			case '10':
				$q="11.mp3";
				$r="eleven";
				break;
			case '11':
				$q="12.mp3";
				$r="twelve";
				break;
			case '12':
				$q="13.mp3";
				$r="thirteen";
				break;
			case '13':
				$q="14.mp3";
				$r="forteen";
				break;
			case '14':
				$q="15.mp3";
				$r="fifteen";
				break;
			case '15':
				$q="16.mp3";
				$r="sixteen";
				break;
			case '16':
				$q="17.mp3";
				$r="seventeen";
				break;
			case '17':
				$q="18.mp3";
				$r="eighteen";
				break;
			case '18':
				$q="19.mp3";
				$r="nineteen";
				break;
			case '19':
				$q="20.mp3";
				$r="twenty";
				break;
			case '20':
				$q="21.mp3";
				$r="tewnty one";
				break;
			case '21':
				$q="22.mp3";
				$r="twenty two";
				break;
			case '22':
				$q="23.mp3";
				$r="twenty three";
				break;
			case '23':
				$q="24.mp3";
				$r="twenty four";
				break;
			case '24':
				$q="25.mp3";
				$r="twenty five";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;
	case '2':
		switch ($row[6]) {
			case '0':
				$q="26.mp3";
				$r="twenty six";
				break;
			case '1':
				$q="27.mp3";
				$r="twenty seven";
				break;
			case '2':
				$q="28.mp3";
				$r="twenty eight";
				break;			
			case '3':
				$q="29.mp3";
				$r="twenty nine";
				break;
			case '4':
				$q="30.mp3";
				$r="therty";
				break;
			case '5':
				$q="31.mp3";
				$r="therty one";
				break;
			case '6':
				$q="32.mp3";
				$r="therty two";
				break;
			case '7':
				$q="33.mp3";
				$r="therty three";
				break;
			case '8':
				$q="34.mp3";
				$r="therty four";
				break;
			case '9':
				$q="35.mp3";
				$r="therty five";
				break;
			case '10':
				$q="36.mp3";
				$r="therty six";
				break;
			case '11':
				$q="37.mp3";
				$r="therty seven";
				break;
			case '12':
				$q="38.mp3";
				$r="therty eight";
				break;
			case '13':
				$q="39.mp3";
				$r="therty nine";
				break;
			case '14':
				$q="40.mp3";
				$r="forty";
				break;
			case '15':
				$q="41.mp3";
				$r="forty one";
				break;
			case '16':
				$q="42.mp3";
				$r="forty two";
				break;
			case '17':
				$q="43.mp3";
				$r="forty three";
				break;
			case '18':
				$q="44.mp3";
				$r="forty four";
				break;
			case '19':
				$q="45.mp3";
				$r="forty five";
				break;
			case '20':
				$q="46.mp3";
				$r="forty six";
				break;
			case '21':
				$q="47.mp3";
				$r="forty seven";
				break;
			case '22':
				$q="48.mp3";
				$r="forty eight";
				break;
			case '23':
				$q="49.mp3";
				$r="forty nine";
				break;
			case '24':
				$q="50.mp3";
				$r="fifty";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;
	case '3':
		switch ($row[6]) {
			case '0':
				$q="1.mp3";
				$r="one";
				break;
			case '1':
				$q="2.mp3";
				$r="two";
				break;
			case '2':
				$q="3.mp3";
				$r="three";
				break;			
			case '3':
				$q="4.mp3";
				$r="four";
				break;
			case '4':
				$q="5.mp3";
				$r="five";
				break;
			case '5':
				$q="6.mp3";
				$r="six";
				break;
			case '6':
				$q="7.mp3";
				$r="seven";
				break;
			case '7':
				$q="8.mp3";
				$r="eight";
				break;
			case '8':
				$q="9.mp3";
				$r="nine";
				break;
			case '9':
				$q="10.mp3";
				$r="ten";
				break;
			case '10':
				$q="11.mp3";
				$r="eleven";
				break;
			case '11':
				$q="12.mp3";
				$r="twelve";
				break;
			case '12':
				$q="13.mp3";
				$r="thirteen";
				break;
			case '13':
				$q="14.mp3";
				$r="forteen";
				break;
			case '14':
				$q="15.mp3";
				$r="fifteen";
				break;
			case '15':
				$q="16.mp3";
				$r="sixteen";
				break;
			case '16':
				$q="17.mp3";
				$r="seventeen";
				break;
			case '17':
				$q="18.mp3";
				$r="eighteen";
				break;
			case '18':
				$q="19.mp3";
				$r="nineteen";
				break;
			case '19':
				$q="20.mp3";
				$r="twenty";
				break;
			case '20':
				$q="21.mp3";
				$r="tewnty one";
				break;
			case '21':
				$q="22.mp3";
				$r="twenty two";
				break;
			case '22':
				$q="23.mp3";
				$r="twenty three";
				break;
			case '23':
				$q="24.mp3";
				$r="twenty four";
				break;
			case '24':
				$q="25.mp3";
				$r="twenty five";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;
	case '4':
		switch ($row[6]) {
			case '0':
				$q="26.mp3";
				$r="twenty six";
				break;
			case '1':
				$q="27.mp3";
				$r="twenty seven";
				break;
			case '2':
				$q="28.mp3";
				$r="twenty eight";
				break;			
			case '3':
				$q="29.mp3";
				$r="twenty nine";
				break;
			case '4':
				$q="30.mp3";
				$r="therty";
				break;
			case '5':
				$q="31.mp3";
				$r="therty one";
				break;
			case '6':
				$q="32.mp3";
				$r="therty two";
				break;
			case '7':
				$q="33.mp3";
				$r="therty three";
				break;
			case '8':
				$q="34.mp3";
				$r="therty four";
				break;
			case '9':
				$q="35.mp3";
				$r="therty five";
				break;
			case '10':
				$q="36.mp3";
				$r="therty six";
				break;
			case '11':
				$q="37.mp3";
				$r="therty seven";
				break;
			case '12':
				$q="38.mp3";
				$r="therty eight";
				break;
			case '13':
				$q="39.mp3";
				$r="therty nine";
				break;
			case '14':
				$q="40.mp3";
				$r="forty";
				break;
			case '15':
				$q="41.mp3";
				$r="forty one";
				break;
			case '16':
				$q="42.mp3";
				$r="forty two";
				break;
			case '17':
				$q="43.mp3";
				$r="forty three";
				break;
			case '18':
				$q="44.mp3";
				$r="forty four";
				break;
			case '19':
				$q="45.mp3";
				$r="forty five";
				break;
			case '20':
				$q="46.mp3";
				$r="forty six";
				break;
			case '21':
				$q="47.mp3";
				$r="forty seven";
				break;
			case '22':
				$q="48.mp3";
				$r="forty eight";
				break;
			case '23':
				$q="49.mp3";
				$r="forty nine";
				break;
			case '24':
				$q="50.mp3";
				$r="fifty";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;
	case '5':
		switch ($row[6]) {
			case '0':
				$q="1.mp3";
				$r="one";
				break;
			case '1':
				$q="2.mp3";
				$r="two";
				break;
			case '2':
				$q="3.mp3";
				$r="three";
				break;			
			case '3':
				$q="4.mp3";
				$r="four";
				break;
			case '4':
				$q="5.mp3";
				$r="five";
				break;
			case '5':
				$q="6.mp3";
				$r="six";
				break;
			case '6':
				$q="7.mp3";
				$r="seven";
				break;
			case '7':
				$q="8.mp3";
				$r="eight";
				break;
			case '8':
				$q="9.mp3";
				$r="nine";
				break;
			case '9':
				$q="10.mp3";
				$r="ten";
				break;
			case '10':
				$q="11.mp3";
				$r="eleven";
				break;
			case '11':
				$q="12.mp3";
				$r="twelve";
				break;
			case '12':
				$q="13.mp3";
				$r="thirteen";
				break;
			case '13':
				$q="14.mp3";
				$r="forteen";
				break;
			case '14':
				$q="15.mp3";
				$r="fifteen";
				break;
			case '15':
				$q="16.mp3";
				$r="sixteen";
				break;
			case '16':
				$q="17.mp3";
				$r="seventeen";
				break;
			case '17':
				$q="18.mp3";
				$r="eighteen";
				break;
			case '18':
				$q="19.mp3";
				$r="nineteen";
				break;
			case '19':
				$q="20.mp3";
				$r="twenty";
				break;
			case '20':
				$q="21.mp3";
				$r="tewnty one";
				break;
			case '21':
				$q="22.mp3";
				$r="twenty two";
				break;
			case '22':
				$q="23.mp3";
				$r="twenty three";
				break;
			case '23':
				$q="24.mp3";
				$r="twenty four";
				break;
			case '24':
				$q="25.mp3";
				$r="twenty five";
				break;
			case '25':
				header('Location: profile.php');die;
				break;}
		break;	
	case '6':
		switch ($row[6]) {
			case '0':
				$q="26.mp3";
				$r="twenty six";
				break;
			case '1':
				$q="27.mp3";
				$r="twenty seven";
				break;
			case '2':
				$q="28.mp3";
				$r="twenty eight";
				break;			
			case '3':
				$q="29.mp3";
				$r="twenty nine";
				break;
			case '4':
				$q="30.mp3";
				$r="therty";
				break;
			case '5':
				$q="31.mp3";
				$r="therty one";
				break;
			case '6':
				$q="32.mp3";
				$r="therty two";
				break;
			case '7':
				$q="33.mp3";
				$r="therty three";
				break;
			case '8':
				$q="34.mp3";
				$r="therty four";
				break;
			case '9':
				$q="35.mp3";
				$r="therty five";
				break;
			case '10':
				$q="36.mp3";
				$r="therty six";
				break;
			case '11':
				$q="37.mp3";
				$r="therty seven";
				break;
			case '12':
				$q="38.mp3";
				$r="therty eight";
				break;
			case '13':
				$q="39.mp3";
				$r="therty nine";
				break;
			case '14':
				$q="40.mp3";
				$r="forty";
				break;
			case '15':
				$q="41.mp3";
				$r="forty one";
				break;
			case '16':
				$q="42.mp3";
				$r="forty two";
				break;
			case '17':
				$q="43.mp3";
				$r="forty three";
				break;
			case '18':
				$q="44.mp3";
				$r="forty four";
				break;
			case '19':
				$q="45.mp3";
				$r="forty five";
				break;
			case '20':
				$q="46.mp3";
				$r="forty six";
				break;
			case '21':
				$q="47.mp3";
				$r="forty seven";
				break;
			case '22':
				$q="48.mp3";
				$r="forty eight";
				break;
			case '23':
				$q="49.mp3";
				$r="forty nine";
				break;
			case '24':
				$q="50.mp3";
				$r="fifty";
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
	<tr><td  align="center"><p>what is this word</p></td></tr>
	<tr><td  align="center"><audio controls="controls"><source src="<?php echo "$q"; ?>" type="audio/mpeg"></audio></td></tr>
	<tr><td  align="center"><form name="formulaire" method="post" action="testd.php"><input type="text" name ="reponse" value=""></td></tr>
	<tr><td  align="center"><input type="submit" value="SEND"></form></td></tr>
	<tr><td  align="center"><a href="profile.php">Retour</a></td></tr>
</body>
</html>