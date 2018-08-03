
<?php

// On démarre la session AVANT d'écrire du code HTML

session_start();


// On s'amuse à créer quelques variables de session dans $_SESSION

$_SESSION['firstname'] = 'Celine';

$_SESSION['lastname'] = 'Guyot';

$_SESSION['age'] = 24;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Hello more info<a href="index2.php">click here</a></p>
<form action="index2.php" method="post">

<?php
    function get_ip() {
    	// IP si internet partagé
    	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
    		return $_SERVER['HTTP_CLIENT_IP'];
    	}
    	// IP derrière un proxy
    	elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    		return $_SERVER['HTTP_X_FORWARDED_FOR'];
    	}
    	// Sinon : IP normale
    	else {
    		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
    	}
    }
    // Afficher l'adresse IP
    echo 'Adresse IP du visiteur : '.get_ip() . "</br>"; 
    // Affiche le User Agent
    echo . "</br>";
    // Affiche le nom du serveur
    echo $_SERVER["SERVER_NAME"];
?>
</form>
</body>
</html>