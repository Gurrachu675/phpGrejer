<?php
$db = new SQLite3('upgifter.sq3'); #vilken databas öppnar vi? 
$allInputQuery = "SELECT * FROM InLogningar"; #vilket kommando vill vi köra? 
$users = $db->query($allInputQuery); #en ny array som innehåller all information
$AnvändarSök = $_POST["AnvändarSök"];
while ($row = $users->fetchArray(SQLITE3_ASSOC))#SQLITE3_ASSOC är en funktion i SQLite3 som hämtar info från 
{ 
 if($AnvändarSök == $_COOKIE['Anvandare'])
    {
        echo 'hdejh';
    }
 else if($AnvändarSök == $row['användarnamn'])
 {
	setcookie("AnvandareSök", $AnvändarSök, time()+(86400*30), '/');
 	header("Location: Profile.php.php");
 }
 else
 {
	header("Location: chatboard.php");
 }
}
?>