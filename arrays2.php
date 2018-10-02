<?php



$cars = array("Volvo", "BMW", "Toyota","Audi", "Mercedes");
//pa que salga cuantos
echo count($cars) ;
echo "<br>";
//

for ($x = 0; $x < count($cars); $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";
foreach($cars as $coche) {
echo $coche;
echo "<br>";
}

?>
