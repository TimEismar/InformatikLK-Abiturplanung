<!DOCTYPE html>
<html>
    <body>

<?php
    $servername = "localhost";
    $user = "root";
    $pw = "eismart";
    $db ="EISMART";

    $iuname = $_GET["username"];
    $ifirstname = $_GET["firstname"];
    $ilastname = $_GET["lastname"];
    $imail = $_GET["email"];
    $ipicture = "a";


    $ipw = $_GET["ipsw"];
    $irpw = $_GET["psw-repeat"];



    if ($ipw === $irpw){
        $hashed_password = password_hash($ipw, PASSWORD_DEFAULT);
    }
    else {
        echo "Passwörter ungleich";
    }

// Test der Connection
    // Create connection
$conn = new mysqli($servername, $user, $pw, $db);
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}


    $sql = "INSERT INTO Users (Username, Vorname, Nachname, Mail, Passwort, Profilbild) VALUES ('$iuname', '$ifirstname', '$ilastname', '$imail', '$hashed_password', '$ipicture')";

    if($conn->query($sql) === TRUE){
        echo "Erfolgreich registriert";
        echo $ifirstnam;
    }
    else{
        echo "Probiers nochmal" . $conn->error;
    }

    if(password_verify('123', $hashed_password)){
        echo "Passwort gleich";
    }

    $conn->close();


?>

</body>
</html>