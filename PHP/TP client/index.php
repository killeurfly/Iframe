<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<body>

<form action="client.php" method="post">

Nom:<input type="text" name="Nom"><br>
Prenom:<input type="text" name="Pre"><br>
Adresse:<input type="text" name="Adr"><br>
Saisir un mot de passe:<input type="password" name="MDP1"><br>
Confirmer le mot de passe:<input type="password" name="MDP2"><br>
Numero CIN:<input type="text" name="CIN">
<br>
Faite votre choix de catalogue:<br>

<input type="radio" name="CAT" value="Mer" id="Cat">Mer<br>
<input type="radio" name="CAT" value="Montagne" id="Cat">Montagne

<br>
<input type="submit" name="Envoyer">
<input type="reset" name="reinitialiser">
</body>
</html>
