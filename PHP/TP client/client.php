<?php

mysql_connect("localhost","root","");
mysql_select_db("gestion_client");

$a = $_POST['Nom'];
$b = $_POST['Pre'];
$c = $_POST['Adr'];
$d = $_POST['MDP1'];
$d1 = $_POST['MDP2'];
$e = $_POST['CIN'];
$f = $_POST['CAT'];

if ($d != $d1)
{
	echo "Les 2 mot de passe sont differents";
}
else
{
$req1 = "INSERT INTO client VALUES ('$a','$b','$c','$d','$e','$f')";
mysql_query($req1);

echo "<p align='center'><b><font size='7'>
      L'enregistrement a ete effectue</font></b></p>";
}
mysql_close()

?>