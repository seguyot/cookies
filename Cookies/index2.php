
<?php session_start();
setcookie("login", $_POST["login"], time()+10000);
setcookie("motdepasse", $_POST["motdepasse"], time()+10000);
echo $_SESSION['firstname'] = "Celine"  ."</br>" . $_SESSION['lastname'] = "Guyot"  ."</br>" .$_SESSION['age'] = 202;
echo $_COOKIE["login"]. " " . $_COOKIE["password"];
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


</body>
</html>