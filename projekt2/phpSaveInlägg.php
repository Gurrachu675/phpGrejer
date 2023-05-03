<?php
$InLaggs = $_POST["inlagg"];
$timestamp = date("m/d/Y", strtotime($date));

$db = new SQLite3('Inlagg.sq3'); 
$db->exec("CREATE TABLE IF NOT EXISTS InLagg (InlaggText text, TimeStampe text, InlaggsID integer primary key autoincrement, Användare text)");
$db->exec("INSERT INTO InLagg VALUES('".$InLaggs."','".$timestamp."','".$_COOKIE['Anvandare']."')"); 
header("Location: html1q.php");
?>