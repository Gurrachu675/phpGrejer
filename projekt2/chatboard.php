<?php
echo 'welcum '.$_COOKIE['Anvandare'];

?>
<html>
<body>
<head><title>Input Box</title></head>
<form action="phpSök.php" method="POST">
Sök på användare: 
<br>
<input type="text" name="AnvändarSök">
<br>
<input type="submit">
</form>
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
$allInputQuery = "SELECT * FROM InLagg"; 
$inLagning = $db->query($allInputQuery); 
while ($row = $inLagning->fetchArray(SQLITE3_ASSOC))
{
    echo $row['InlaggText'];
}
?>