<?php
$InLäggs = $_POST["inlägg"];


$db = new SQLite3('Inlägg.sq3'); 
$db->exec("CREATE TABLE IF NOT EXISTS InLägg (InläggText text, TimeStampe text, InläggsID integer primary key autoincrement, Användare text)");
$db->exec("INSERT INTO InLogningar VALUES('".$InLäggs."','".$."','".$_COOKIE['Anvandare']."')"); 
header("Location: html1q.php");
?>