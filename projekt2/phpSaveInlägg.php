<?php
$InLaggs = $_POST["inlagg"];
$date   = new DateTime(); //this returns the current date time
$result = $date->format('Y-m-d');

$db = new SQLite3('InLagg.sq3'); 
$db->exec("CREATE TABLE IF NOT EXISTS InLagg (InlaggText text, TimeStampe text, InlaggsID integer primary key autoincrement, Användare text)");
$db->exec("INSERT INTO InLagg(InlaggText, TimeStampe, Användare) VALUES('".$InLaggs."','".$result."','".$_COOKIE['Anvandare']."')"); 
header("Location: chatboard.php");
?>