<?php

$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$email = $_POST['email'];
$plz = $_POST['plz'];
$komitee = $_POST['komitee'];
$pw = $_POST['pw'];

// Database connection
require_once "config.php";
    $stmt = $conn->prepare("insert into schueler(komitee, vorname, nachname, mail, passwort, plz) values(?, ?, ?, ?, ?, ?)");
    $hpw = password_hash($pw, PASSWORD_DEFAULT);
    $stmt->bind_param("sssssi", $komitee, $firstName, $lastName, $email, $hpw, $plz);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();

?>