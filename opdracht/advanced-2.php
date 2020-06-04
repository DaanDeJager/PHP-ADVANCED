<html>
<body>

<table id="table">
    <tr>
<th>Voornaam</th>
<th>Achternaam</th>
<th>Klas</th>
<th>Leeftijd</th>
<th>Woonplaats</th>
      
</tr>
    <tr>
<?php 
$bgkleur = $_POST["bgkleur"]; 
$dikte = $_POST["border"];
$padding = $_POST["padding"];
$textkleur = $_POST["txtkleur"];
echo "<style>
td,table,tr,th{
    border: $dikte;
    border-collapse: collapse;
}
td,th{
    padding: $padding;
}

</style>";
echo    "<body style='color:$textkleur;background-color:$bgkleur'>" ; 

function maakRij(){
        $daan = array("voornaam"=>"Daan","achternaam"=>"de Jager","klas"=>"9c","Leeftijd"=>16,"Woonplaats"=>"Uithoorn");
        foreach($daan as $value){
            echo "<td> $value </td> <br>";
        }
    }
maakRij();
   

?>
    </tr>
</table>
</body>
</hmtl>