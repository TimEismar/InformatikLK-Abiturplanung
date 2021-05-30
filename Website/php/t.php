<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$plz = $_POST['plz'];
$komitee = $_POST['komitee'];

// Database connection
$conn = new mysqli('localhost','root','','abi-mftt');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into schueler(komitee, vorname, nachname, mail, plz) values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $komitee, $firstName, $lastName, $email, $plz);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}

?>