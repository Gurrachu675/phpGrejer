<?php
$Användarnamn = $_POST["användarNamn"];
$Lösenord = $_POST["lösenord"];
$Lösenord1 = $_POST["lösenord1"];
if($Lösenord == $Lösenord1)
{
	$db = new SQLite3('Upgifter.sq3'); 
	$db->exec("CREATE TABLE IF NOT EXISTS InLogningar (användarnamn text primary, lösenord text)");
	$db->exec("INSERT INTO InLogningar VALUES('".$Användarnamn."','".$Lösenord."')"); 
	header("Location: html1q.php");
}
else
{
	echo 'try again';
}
?>
