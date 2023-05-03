<?php
echo 'welcum '.$_COOKIE['Anvandare'];

?>
<html>
<body>
<head><title>Input Box</title></head>
<form action="phpSaveInlägg.php" method="POST">
skapa inlägg här: 
<br>
<input type="text" name="inlagg">
<br>
<input type="submit">
</form>
</body>
</html>
<?php
$db = new SQLite3('InLagg.sq3');
$allInputquery = "SELECT * FROM InLagg"; 
$inLägning = $db->query($allInputquery); 
while ($row = $inLägning->fetchArray(SQLITE3_ASSOC))
{
 echo $row['InlaggText'];
}
?>