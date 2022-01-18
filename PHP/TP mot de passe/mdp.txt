<?php

$a = $_POST['Nom'];
$b = $_POST['MDP1'];
$b1 = "Password";

if ($b != $b1)
{
	echo ("Mot de passe incorect <a href='index.php'>Retour</a>");
}
else
{

echo "<p align='center'><b><font size='7'>Bravo $a
      ton mot de passe est correct</font></b></p>";

echo "La date actuelle est ";
echo date('d-m-Y');
echo "<br>L'heure actuelle est ";
echo date('H:i');

echo"<br><a href='index.php'>Retour</a>";

}

?>