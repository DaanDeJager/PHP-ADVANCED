<table>
<tr>
<th>Voornaam</th>
<th>Achternaam</th>
<th>Klas</th>
<th>Leeftijd</th>
<th>Woonplaats</th>
</tr>
<tr>
<?php
$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
$student = array("voornaam"=>"Jan","achternaam"=>"Janssen","klas"=>"9A","Leeftijd"=>17,"Woonplaats"=>"Amstelveen");

foreach($student as $value){
echo "<td>" . $value . "</td>";
}
?>
</tr>
</table> 
