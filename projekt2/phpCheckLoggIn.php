<?php
$db = new SQLite3('upgifter.sq3'); #vilken databas öppnar vi? 
$allInputQuery = "SELECT * FROM InLogningar"; #vilket kommando vill vi köra? 
$users = $db->query($allInputQuery); #en ny array som innehåller all information
$Användarnamn = $_POST["användarNamn"];
$Lösenord = $_POST["lösenord"];
while ($row = $users->fetchArray(SQLITE3_ASSOC))#SQLITE3_ASSOC är en funktion i SQLite3 som hämtar info från 
{ 
 if($Användarnamn == $row['användarnamn'] && $Lösenord == $row['lösenord'])
 {
	setcookie("Anvandare", $Användarnamn, time()+(86400*30), '/');
 	header("Location: chatboard.php");
 }
 else
 {
	header("Location: omFel.php");
 }
}
?>
