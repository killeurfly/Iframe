<?php

mysql_connect("localhost","root","");
mysql_select_db("scolarite");

$a = $_POST['Num'];
$b = $_POST['Nom'];
$c = $_POST['Adr'];
$d = $_POST['Tel'];
$e = $_POST['civil'];



$req1 = "INSERT INTO eleve VALUES ('$a','$b','$c','$d','$e')";
mysql_query($req1);

echo "<p align='center'><b><font size='7' color='#FF3399' face='Kunstler Script'>
      L'enregistrement a ete effectue</font></b></p>";

mysql_close()

?>