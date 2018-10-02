
<?php


//https://www.w3schools.com/php/php_arrays_multi.asp

$horario = array(
  array('BBDD','EIE','ASO','ASO','IAW','IAW'), //lunes 0
  array('IAW','SEG','SRI','SRI','BBDD','BBDD'), //martes 1
  array('SEG','SEG','ASO','ASO','EIE','EIE'), //miercoles 2
  array('SRI','SRI','ASO','ASO','IAW','IAW'), //jueves 3
  array('SEG','SEG','SRI','SRI','ING','ING'), //viernes 4
);




$dia = date("N");
$hora= date("G");

echo $horario[$dia-1][$hora-8] . "<br><br>";

//print horario
foreach ($horario as $dia) {
  foreach ($dia as $asig) {
    echo $asig . "<br>";
  }
  echo "--------<br>";
}
