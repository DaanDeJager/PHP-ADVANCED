<html>
<body>

<?php

function rekenUit(){
$getallen = array(rand(1,200),rand(1,200),rand(1,200));
echo "Als ik $getallen[0] $getallen[1] en $getallen[2] bij elkaar optel krijg ik " . array_sum($getallen) . "<br>";
}
rekenUit();
rekenUit();
rekenUit();
?>

</body>
</html>