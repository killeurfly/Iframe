<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>PHP-Tableaux</title>
</head>
<body>

<h3>les tableaux numerotés</h3>

<?php

$couleur = array("Bleu","Blanc","Rouge","Vert","Noir");

echo "$couleur[0] <br>";

echo "$couleur[4] <br>";

$i=0;
while ($i < 5)
	{
		echo "$couleur[$i] ";
		$i++;
	}

$couleur[0] = "Blanc";
echo "<br>";
$i=0;
while ($i < 5)
	{
		echo "$couleur[$i] ";
		$i++;
	}

?>

</body>
</html>
