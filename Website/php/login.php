<?php 
require_once "config.php";

$iuname = $_GET["iusername"];
$ipsw = $_GET["ipsw"];

$dpw = $db->query("SELECT Passwort FROM Users WHERE username = $iuname");


if(password_verify($ipsw, $dpw)){
    //echo "<script src="js/login.js"></script>";
    header('lehrerreg.html');
    exit;
}
else{
    echo 'das war ein ungültiger Login';
}


?>