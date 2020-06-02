<!DOCTYPE html>
<html>
<body>
<?php echo $_POST["voornaam"]; ?> 
<?php echo $_POST["Achternaam"]; ?><br>
Klas :<?php echo $_POST["klas"]; ?><br>
<?php echo $_POST["leeftijd"]; ?> Jaar oud<br>
<?php echo $_POST["adres"]; ?><br>
<?php echo $_POST["plaatsnaam"]; ?><br>
<?php echo $_POST["geslacht"]; ?><br>
<?php $kleur = $_POST["kleur"]; 
 echo "<body style='background-color:$kleur'>";?><br>

</body>
</html>
