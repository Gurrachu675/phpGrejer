<?php
echo 'welcum '.$_COOKIE['Anvandare'];

?>
<html>
<body>
<head><title>Input Box</title></head>
<form action="phpSaveInlägg.php" method="POST">
skapa inlägg här: 
<br>
<input type="text" name="inlägg">
<br>
<input type="submit">
</form>
</body>
</html>