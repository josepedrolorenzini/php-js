<?php

$host = 'localhost';
$user = 'root';
$pass= '';
$db = 'mediale';
$conn =  mysqli_connect($host,$user, $pass , $db);


if($conn){
    echo "connection succesuful";
}else{
    die();
}

?>