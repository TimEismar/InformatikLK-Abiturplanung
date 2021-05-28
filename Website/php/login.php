<?php 
$servername = "localhost";
$user = "root";
$pw = "eismart";
$db ="EISMART";

$iuname = $_GET["iusername"];
$ipsw = $_GET["ipsw"];

$aadpw = $db->query("SELECT Passwort FROM Users");
echo $aadpw;


if(password_verify($ipsw, $dpw)){
    echo "<script src="js/login.js"></script>";
}


?>