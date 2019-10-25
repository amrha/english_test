<!DOCTYPE html>
<html>
<head>
	<title>Ton Profile</title>
	<?php
	error_reporting(E_ALL ^ E_NOTICE); 
	session_start();
/*	if (!empty("$_SESSION")) {header('Location: logfail.html');die;
}*/
$base='uti';
$serveur='localhost';
$user='root';
$password='';
try{
$a=$_POST['e-mail'];}
catch(Exception $e){$a= $_SESSION['e-mail'];}
try{
$b=$_POST['login'];}
catch(Exception $e){
$b= $_SESSION['login'];}
if (!$a) {
	$a= $_SESSION['e-mail'];}
if (!$b) {
	$b= $_SESSION['login'];}
$con=mysqli_connect("$serveur","$user","$password","$base") or die("Could not connect to the database");
if (!$con)
	{header('Location: index.php');die;}
$sql = "SELECT * FROM utilisateur where mail=".'"'."$a".'"'." and passe=".'"'."$b".'"';
$result = mysqli_query($con,$sql) or die("Could not connect to the database");
$row = mysqli_fetch_array($result);
if (empty($row)) {header('Location: logfail.html');die;}
$_SESSION['row'] = $row;
switch ($row[2]) {
	case '1':
		$row[2]="A1 (BEGINNER)";
		break;
	case '2':
		$row[2]="A2 (ELEMENTARY)";
		break;
	case '3':
		$row[2]="B1 (INTERMEDIATE)";
		break;
	case '4':
		$row[2]="B2 (UPPER INTERMEDIATE)";
		break;
	case '5':
		$row[2]="C1 (ADVANCED)";
		break;
	case '6':
		$row[2]="C2 (PROFICIENT)";
		break;}
//$rowcount=mysqli_num_rows($result);
//if($rowcount == 0) {header('Location: logfail.html');die;}
?>
</head>
<body style="background-color: #0af;">
	<table style="height: 100%;width: 100%" align="center"><tr ><td colspan="6"><h1 align="center">WELCOME</h1></td>
		
<tr><td align="center" colspan="3">your account</td><td  align="center" colspan="3">  <output ><?php print("$row[0]"); ?></output> </td></tr>
	<tr><td width="50%" align="center" colspan="3">current level</td><td width="50%" align="center" colspan="3"><?php print("$row[2]"); ?></td></tr>
	<tr><td align="center" colspan="3">total score</td><td align="center" colspan="3"><?php print($row[4]+$row[5]+$row[6]+$row[3]); ?></td></tr><form name="formulaire2" method="post" action="cq.php">
<tr><td align="center" colspan="2">compréhension</td><td align="center" colspan="2"><?php print($row[3]); ?></td><td align="center" colspan="2"><input type="submit" value="START" style="background-color: #0af;"></td></tr></form>
<form name="formulaire2" method="post" action="gq.php">
<tr><td align="center" colspan="2">grammaire</td><td align="center" colspan="2"><?php print($row[4]); ?></td><td align="center" colspan="2"><input type="submit" value="START" style="background-color: #0af;"></td></tr></form>
<form name="formulaire2" method="post" action="lq.php">
<tr><td align="center" colspan="2">listening </td><td align="center" colspan="2"><?php print($row[5]); ?></td><td align="center" colspan="2"><input type="submit" value="START" style="background-color: #0af;"></td></tr></form>
<form name="formulaire2" method="post" action="dq.php">
<tr><td align="center" colspan="2">dictation</td><td align="center" colspan="2"><?php print($row[6]); ?></td><td align="center" colspan="2"><input type="submit" value="START" style="background-color: #0af;"></td></tr></form>

		<td align="center" colspan="6"><a href="out.php"><button style="background-color:#0af;">LOG OUT</button></a></td></tr></table>		
</body>
</html>
<?php mysqli_close($con);?>