

	<?PHP
	$con = mysql_connect ("localhost", "root", "") ;
	if (! $con)
	{
	die("ne pourrait pas se relier : ". mysql_error ());
	}

	mysql_select_db ("Arinas", $con) ;
	//en stocke la date du jour dans la variable $date_inscri
	$date_inscri=date();

	$sql=" INSERT INTO `commande` (`id`, `nom`, `prenom`, `email`, `adresse`, `tel`)
	VALUES
	('','$_POST[nom]','$_POST[prenom]','$_POST[email]','$_POST[adresse]','$_POST[tel]')";

	if (!mysql_query($sql,$con))
	{
	die('impossible d’ajouter cet enregistrement : ' . mysql_error());
	}
	echo "L’enregistrement est ajouté ";

	mysql_close($con)
	?>
	<a href=" formulaire_info.php ">Retour au formulaire</a>
