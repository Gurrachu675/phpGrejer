<?php
$Användarnamn = $_POST["användarNamn"];
$Lösenord = $_POST["lösenord"];
$Lösenord1 = $_POST["lösenord"];
$db = new SQLite3('Upgifter.sq3'); 
$db->exec("CREATE TABLE IF NOT EXISTS InLogningar (användarnamn text, lösenord text)");
$db->exec("INSERT INTO InLogningar VALUES('".$Användarnamn."',".$Lösenord.")"); 
header("Location: ");
?>
