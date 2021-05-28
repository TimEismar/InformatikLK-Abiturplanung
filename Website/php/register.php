<!DOCTYPE html>
<html>
    <body>

<?php
    require_once "config.php";

    $iuname = $_GET["username"];
    $ifirstname = $_GET["firstname"];
    $ilastname = $_GET["lastname"];
    $imail = $_GET["email"];

    $ipw = $_GET["ipsw"];
    $irpw = $_GET["psw-repeat"];



    if ($ipw === $irpw){
        $hashed_password = password_hash($ipw, PASSWORD_DEFAULT);
    }
    else {
        echo "Passwörter ungleich";
    }



    $sql = "INSERT INTO Users (Username, Vorname, Nachname, Mail, Passwort) VALUES ('$iuname', '$ifirstname', '$ilastname', '$imail', '$hashed_password')";

    if($db->query($sql) === TRUE){
        echo "Erfolgreich registriert";
        echo $ifirstnam;
    }
    else{
        echo "Probiers nochmal" . $db->error;
    }

    $db->close();


?>

</body>
</html>