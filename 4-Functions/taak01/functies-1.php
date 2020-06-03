<html>
<body>

<?php

function schrijfKleur(){
    $color = array("red","#FF66FF","blue","#1234");
    foreach($color as $value)
    echo "<a style=color:$value;>" . "De kleur is $value <br>" ."</a>";
          
}
schrijfKleur();
?>

</body>
</html>